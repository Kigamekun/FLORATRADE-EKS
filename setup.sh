#!/bin/bash

echo "🚀 Membuat file Docker setup untuk Laravel..."

# .dockerignore
cat > .dockerignore <<'EOF'
node_modules
npm-debug.log
Dockerfile
docker-compose.yml
vendor
.env
.git
.gitignore
EOF
echo "✅ .dockerignore dibuat"

# Dockerfile
cat > Dockerfile <<'EOF'
FROM php:8.2-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

COPY . .

RUN composer install --no-dev --optimize-autoloader
RUN cp .env.example .env || true
RUN php artisan key:generate

CMD ["php-fpm"]
EOF
echo "✅ Dockerfile dibuat"

# docker-compose.yml
cat > docker-compose.yml <<'EOF'
version: '3.8'

services:
  app:
    build:
      context: .
      dockerfile: Dockerfile
    image: laravel-app
    container_name: laravel-app
    restart: unless-stopped
    working_dir: /var/www
    volumes:
      - .:/var/www
    networks:
      - laravel

  webserver:
    image: nginx:alpine
    container_name: laravel-nginx
    restart: unless-stopped
    ports:
      - "8000:80"
    volumes:
      - .:/var/www
      - ./nginx.conf:/etc/nginx/conf.d/default.conf
    networks:
      - laravel

  db:
    image: mysql:8.0
    container_name: laravel-mysql
    restart: unless-stopped
    environment:
      MYSQL_ROOT_PASSWORD: root
      MYSQL_DATABASE: laravel
      MYSQL_USER: laravel
      MYSQL_PASSWORD: laravel
    ports:
      - "3306:3306"
    volumes:
      - dbdata:/var/lib/mysql
    networks:
      - laravel

networks:
  laravel:

volumes:
  dbdata:
EOF
echo "✅ docker-compose.yml dibuat"

# nginx.conf
cat > nginx.conf <<'EOF'
server {
    listen 80;
    index index.php index.html;
    server_name localhost;

    root /var/www/public;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include fastcgi_params;
        fastcgi_pass app:9000;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        fastcgi_param PATH_INFO $fastcgi_path_info;
    }

    location ~ /\.ht {
        deny all;
    }
}
EOF
echo "✅ nginx.conf dibuat"

echo "🎉 Semua file berhasil dibuat!"
echo "➡️  Jalankan: docker compose up -d --build"
