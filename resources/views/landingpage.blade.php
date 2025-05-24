<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FloraTrade - Platform Ekspor-Impor untuk Tanaman Hias</title>
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2cb876',
                        secondary: '#E8F5E9',
                        gray: '#464b4f'
                    },
                    borderRadius: {
                        'none': '0px',
                        'sm': '4px',
                        DEFAULT: '8px',
                        'md': '12px',
                        'lg': '16px',
                        'xl': '20px',
                        '2xl': '24px',
                        '3xl': '32px',
                        'full': '9999px',
                        'button': '8px'
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
    
    <!--Styling LandingPage-->
    <!-- <link rel="stylesheet" href="{{ url('assets/css/landingpage.css') }}"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
    
    <style>
        :where([class^="ri-"])::before { content: "\f3c2"; }
        body {
            font-family: 'Poppins', sans-serif;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', sans-serif;
        }
        input:focus, textarea:focus {
            outline: none;
        }
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        .hero-section {
            background-image: url('https://readdy.ai/api/search-image?query=A%20serene%20and%20vibrant%20tropical%20garden%20scene%20with%20lush%20ornamental%20plants%20and%20exotic%20flowers.%20The%20left%20side%20of%20the%20image%20has%20a%20clean%2C%20gradient%20fade%20to%20white%20to%20allow%20text%20overlay.%20The%20right%20side%20showcases%20beautiful%20tropical%20foliage%2C%20philodendrons%2C%20monstera%20plants%2C%20and%20colorful%20flowering%20orchids.%20Natural%20morning%20light%20creates%20a%20fresh%2C%20inspiring%20atmosphere.%20Professional%20photography%20with%20shallow%20depth%20of%20field.&width=1200&height=800&seq=12345&orientation=landscape');
            background-position: right top;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 0;
        }
        @media (max-width: 768px) {
        .hero-section {
        background-position: center;
        background-size: cover;
        }
        }
        @media (min-width: 769px) {
        .hero-section {
        background-size: contain;
        }
            
        }
        /* Navbar Links */
        nav a {
            display: block;
            padding: 0.5rem 0;
            color: #464b4f;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s ease-in-out;
        }

        nav a:hover {
            color: #2cb876;
        }

        /* Mobile Navigation */
        #mobileNav {
            display: none; /* Hidden by default */
            flex-direction: column;
            gap: 1rem;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 1rem;
            border-radius: 8px;
            z-index: 59;
        }
        
        

    </style>
</head>
<body class="bg-white">
    <div class="wrapperPreloader">
        <div id="loader"></div>
    </div>
    <!-- Header -->
    <header class="w-full bg-white shadow-sm fixed top-0 left-0 right-0 z-50">
        <div  class="container mx-auto px-4 py-4 flex items-center justify-between">
            <!-- Logo -->
            <a href="#" class="navbar-brand">
                <img src="{{ url('assets/img/LogoFloraTrade.png') }}" alt="Logo FloraTrade" class="h-10">
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-8">
                <a href="#home" class="text-gray-900 font-medium hover:text-primary transition-colors">Home</a>
                <a href="#about" class="text-gray-600 hover:text-primary transition-colors">Tentang</a>
                <a href="#services" class="text-gray-600 hover:text-primary transition-colors">Layanan</a>
                <a href="https://market.floratrade.my.id/" class="text-gray-600 hover:text-primary transition-colors">Marketplace</a>
                <a href="#contact" class="text-gray-600 hover:text-primary transition-colors">Kontak</a>
            </nav>

            <!-- User Authentication Links -->
            <div class="flex items-center space-x-4">
                @if (is_null(Auth::user()))
                    <a href="{{ route('login') }}" class="text-primary font-medium hover:text-primary/80 transition-colors whitespace-nowrap border border-primary rounded px-4 py-2">Login</a>
                    <a href="{{ route('register') }}" class="bg-primary text-white px-4 py-2 rounded-button font-medium hover:bg-primary/90 transition-colors whitespace-nowrap">Sign Up</a>
                @else
                    <a href="
                    @if (Auth::user()->role == 0)
                        {{ '/admin' }}
                    @else
                        {{ route('dashboard') }}
                    @endif
                    " class="bg-primary text-white px-4 py-2 rounded-button font-medium hover:bg-primary/90 transition-colors whitespace-nowrap">Dashboard</a>
                @endif
            </div>

            <!-- Hamburger Menu Button -->
            <button id="menuButton" class="md:hidden w-10 h-10 flex items-center justify-center text-gray-700">
                <i class="ri-menu-line ri-lg"></i>
            </button>
        </div>

        
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero-section min-h-[700px] pt-24 flex items-center bg-right-top bg-cover md:bg-contain bg-no-repeat">
        <div class="container mx-auto px-4 w-full">
            <div class="flex flex-col md:flex-row items-center">
                <div class="w-full md:w-3/5 py-16 md:py-0 bg-gradient-to-r from-white via-white/95 to-transparent backdrop-blur-[2px]">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
                    Bawa Bisnis Tanaman Hiasmu Tumbuh dan <span class="text-primary">Dunia!</span>
                    </h1>
                    <p class="text-lg text-gray-700 mb-8 max-w-lg">
                    Terhubung dengan pasar global dan ekspor tanaman indah Anda ke seluruh dunia dengan layanan manajemen ekspor kami yang lengkap, andal, dan efisien.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="bg-primary text-white px-8 py-3 !rounded-button font-medium hover:bg-primary/90 transition-colors text-lg whitespace-nowrap"
                            onclick="window.location.href='{{ route('login') }}'">
                            Mulai Ekspor Hari Ini
                        </button>
                        {{-- <button class="border border-primary text-primary px-8 py-3 !rounded-button font-medium hover:bg-primary/5 transition-colors text-lg whitespace-nowrap">
                            Learn More
                        </button> --}}
                    </div>
                </div>
                <div class="w-full md:w-2/5">
                    <!-- Hero image is in the background -->
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-20 bg-white" id="about">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="w-full md:w-1/2">
                    <img src="https://readdy.ai/api/search-image?query=A%20professional%20photograph%20of%20a%20diverse%20collection%20of%20exotic%20ornamental%20plants%20arranged%20in%20a%20modern%20greenhouse%20or%20nursery.%20The%20image%20shows%20various%20tropical%20plants%20with%20vibrant%20foliage%20including%20philodendrons%2C%20calatheas%2C%20and%20rare%20aroid%20species.%20The%20plants%20are%20displayed%20on%20modern%20shelving%20with%20clean%20white%20background.%20The%20lighting%20is%20bright%20and%20natural%2C%20highlighting%20the%20vivid%20colors%20and%20textures%20of%20the%20plants.&width=600&height=500&seq=12346&orientation=landscape"
                        alt="Ornamental Plants Collection"
                        class="w-full h-auto rounded-lg shadow-lg object-cover object-top">
                </div>
                <div class="w-full md:w-1/2">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 relative">
                        Tentang FloraTrade
                        <span class="absolute bottom-0 left-0 w-20 h-1 bg-primary"></span>
                    </h2>
                    <p class="text-gray-700 mb-6">
                        FloraTrade adalah platform digital utama yang mengkhususkan diri dalam ekspor-impor tanaman hias dari Indonesia. Kami menjembatani kesenjangan antara petani lokal dan pasar global, menyediakan solusi ekspor yang komprehensif.                    </p>
                    <p class="text-gray-700 mb-6">
                    Misi kami adalah membantu bisnis tanaman hias Indonesia berkembang di dunia internasional dengan menyederhanakan proses ekspor, mengelola dokumentasi, dan menghubungkan mereka dengan pembeli di seluruh dunia.
                    </p>
                    <div class="grid grid-cols-2 gap-6 mt-8">
                        <div class="flex items-start">
                            <div class="w-12 h-12 flex items-center justify-center bg-secondary rounded-full mr-4">
                                <i class="ri-global-line ri-lg text-primary"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900 mb-1">Jangkauan Global</h4>
                                <p class="text-gray-600">Akses ke pasar internasional di lebih dari 230 negara</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                        <div class="w-12 h-12 flex items-center justify-center bg-secondary rounded-full mr-4">
                            <i class="ri-team-line ri-lg text-primary"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-900 mb-1">
                                Jaringan yang Berkembang
                            </h4>
                            <p class="text-gray-600">50+ Pengusaha Tanaman Hias Terafiliasi</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Bagaimana Kami Bekerja</h2>
                <p class="text-gray-700 max-w-2xl mx-auto">
                Layanan komprehensif kami dirancang untuk membuat ekspor tanaman hias menjadi sederhana, efisien, dan menguntungkan bagi bisnis Anda.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white p-8 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-16 h-16 flex items-center justify-center bg-secondary rounded-full mb-6">
                        <i class="ri-global-line ri-2x text-primary"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Ekspor ke Dunia yang Penuh Peluang</h3>
                    <p class="text-gray-700 mb-6">
                    Terhubung dengan pembeli terverifikasi dari seluruh dunia dan kembangkan bisnis tanaman hias Anda hingga ke luar negeri.
                    </p>
                    <a href="#" class="inline-flex items-center text-primary font-medium hover:underline">
                        Pelajari selengkapnya
                        <i class="ri-arrow-right-line ri-sm ml-1"></i>
                    </a>
                </div>
                <!-- Service 2 -->
                <div class="bg-white p-8 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-16 h-16 flex items-center justify-center bg-secondary rounded-full mb-6">
                        <i class="ri-file-list-3-line ri-2x text-primary"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Dokumentasi Ekspor yang lancar</h3>
                    <p class="text-gray-700 mb-6">
                        Kami menangani semua dokumen, izin, dan persyaratan kepatuhan yang rumit untuk memastikan pabrik Anda mencapai tujuan tanpa penundaan.
                    </p>
                    <a href="#" class="inline-flex items-center text-primary font-medium hover:underline">
                        Pelajari selengkapnya
                        <i class="ri-arrow-right-line ri-sm ml-1"></i>
                    </a>
                </div>
                <!-- Service 3 -->
                <div class="bg-white p-8 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-16 h-16 flex items-center justify-center bg-secondary rounded-full mb-6">
                        <i class="ri-customer-service-2-line ri-2x text-primary"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Dukungan Premium</h3>
                    <p class="text-gray-700 mb-6">
                        Tim kami yang berdedikasi memberikan bantuan yang dipersonalisasi selama proses ekspor, memastikan kebutuhan bisnis Anda terpenuhi.
                    </p>
                    <a href="#" class="inline-flex items-center text-primary font-medium hover:underline">
                        Pelajari selengkapnya
                        <i class="ri-arrow-right-line ri-sm ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Apa Kata Klien Kami</h2>
                <p class="text-gray-700 max-w-2xl mx-auto">
                    Dengarkan cerita dari para pebisnis yang telah berhasil mengembangkan ekspor tanaman hias mereka dengan FloraTrade.
                </p>
            </div>
            <div id="testimonialSlides" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white p-8 rounded-lg border border-gray-100 shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="text-primary">
                            <i class="ri-star-fill ri-lg"></i>
                            <i class="ri-star-fill ri-lg"></i>
                            <i class="ri-star-fill ri-lg"></i>
                            <i class="ri-star-fill ri-lg"></i>
                            <i class="ri-star-fill ri-lg"></i>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-6 italic">
                        "FloraTrade has transformed our business. We've expanded to 5 new countries in just 6 months, and the documentation process that used to take weeks now takes days."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full bg-gray-200 overflow-hidden mr-4">
                            <img src="https://readdy.ai/api/search-image?query=Professional%20headshot%20of%20an%20Indonesian%20business%20owner%2C%20male%2C%2040s%2C%20wearing%20a%20smart%20casual%20outfit%2C%20looking%20confident%20and%20approachable%20against%20a%20neutral%20background.%20High-quality%20portrait%20photography%20with%20good%20lighting.&width=100&height=100&seq=12347&orientation=squarish" alt="Ahmad Suryanto" class="w-full h-full object-cover object-top">
                        </div>
                        <div>
                            <h4 class="text-gray-900 font-semibold">Ahmad Suryanto</h4>
                            <p class="text-gray-600 text-sm">Founder, Klorofilfarm</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="bg-white p-8 rounded-lg border border-gray-100 shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="text-primary">
                            <i class="ri-star-fill ri-lg"></i>
                            <i class="ri-star-fill ri-lg"></i>
                            <i class="ri-star-fill ri-lg"></i>
                            <i class="ri-star-fill ri-lg"></i>
                            <i class="ri-star-fill ri-lg"></i>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-6 italic">
                        "As a small nursery, we never thought we could export internationally. FloraTrade made it possible, and now 40% of our revenue comes from overseas buyers."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full bg-gray-200 overflow-hidden mr-4">
                            <img src="https://readdy.ai/api/search-image?query=Professional%20headshot%20of%20an%20Indonesian%20businesswoman%2C%20early%2030s%2C%20with%20a%20warm%20smile%2C%20wearing%20professional%20attire%2C%20against%20a%20neutral%20background.%20High-quality%20portrait%20photography%20with%20good%20lighting.&width=100&height=100&seq=12348&orientation=squarish" alt="Dewi Anggraini" class="w-full h-full object-cover object-top">
                        </div>
                        <div>
                            <h4 class="text-gray-900 font-semibold">Dewi Anggraini</h4>
                            <p class="text-gray-600 text-sm">Owner, Green Haven Nursery</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="bg-white p-8 rounded-lg border border-gray-100 shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="text-primary">
                            <i class="ri-star-fill ri-lg"></i>
                            <i class="ri-star-fill ri-lg"></i>
                            <i class="ri-star-fill ri-lg"></i>
                            <i class="ri-star-fill ri-lg"></i>
                            <i class="ri-star-half-fill ri-lg"></i>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-6 italic">
                        "The support team at FloraTrade is exceptional. They guided us through every step of the export process and helped us navigate complex regulations with ease."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full bg-gray-200 overflow-hidden mr-4">
                            <img src="https://readdy.ai/api/search-image?query=Professional%20headshot%20of%20an%20Indonesian%20business%20owner%2C%20male%2C%20mid-30s%2C%20with%20glasses%2C%20wearing%20a%20smart%20casual%20outfit%2C%20looking%20professional%20against%20a%20neutral%20background.%20High-quality%20portrait%20photography%20with%20good%20lighting.&width=100&height=100&seq=12349&orientation=squarish" alt="Budi Santoso" class="w-full h-full object-cover object-top">
                        </div>
                        <div>
                            <h4 class="text-gray-900 font-semibold">Budi Santoso</h4>
                            <p class="text-gray-600 text-sm">Director, Tropical Flora Exports</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-10">
                <div class="flex space-x-2" id="testimonialDots">
                    <button id="dot1" class="w-3 h-3 rounded-full bg-primary"></button>
                    <button id="dot2" class="w-3 h-3 rounded-full bg-gray-300 hover:bg-primary/50 transition-colors"></button>
                    <button id="dot3" class="w-3 h-3 rounded-full bg-gray-300 hover:bg-primary/50 transition-colors"></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 bg-gray-50" id="contact">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Hubungi kami</h2>
                <p class="text-gray-700 max-w-2xl mx-auto">
                    Ada pertanyaan tentang mengekspor tanaman hias Anda? Hubungi kami hari ini dan tim kami akan membantu Anda memulai.
                </p>
            </div>
            <div class="flex flex-col lg:flex-row gap-12">
                <div class="w-full lg:w-1/2 bg-white p-8 rounded-lg shadow-sm">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-6">Kirim Pesan Kepada Kami</h3>
                    <form>
                        <div class="mb-6">
                            <label for="name" class="block text-gray-700 mb-2">Nama Lengkap</label>
                            <input type="text" id="name" class="w-full px-4 py-3 border border-gray-300 rounded focus:border-primary" placeholder="Masukkan nama lengkap Anda">
                        </div>
                        <div class="mb-6">
                            <label for="phone" class="block text-gray-700 mb-2">Nomor Telefon</label>
                            <input type="tel" id="phone" class="w-full px-4 py-3 border border-gray-300 rounded focus:border-primary" placeholder="Masukkan nomor telefon Anda">
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 mb-2">Alamat Email</label>
                            <input type="email" id="email" class="w-full px-4 py-3 border border-gray-300 rounded focus:border-primary" placeholder="Masukkan alamat email Anda">
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 mb-2">Pesan</label>
                            <textarea id="message" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded focus:border-primary" placeholder="Bagaimana kami bisa membantu Anda?"></textarea>
                        </div>
                        <button type="submit" class="bg-primary text-white px-6 py-3 !rounded-button font-medium hover:bg-primary/90 transition-colors w-full md:w-auto whitespace-nowrap">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="bg-white p-8 rounded-lg shadow-sm mb-8">
                        <h3 class="text-2xl font-semibold text-gray-900 mb-6">Contact Information</h3>
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="w-10 h-10 flex items-center justify-center bg-secondary rounded-full mr-4">
                                    <i class="ri-map-pin-line ri-lg text-primary"></i>
                                </div>
                                <div>
                                    <h4 class="text-gray-900 font-medium mb-1">Office Address</h4>
                                    <p class="text-gray-700">Jl. Raya Pajajaran No. 88, Bogor, West Java, Indonesia</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-10 h-10 flex items-center justify-center bg-secondary rounded-full mr-4">
                                    <i class="ri-phone-line ri-lg text-primary"></i>
                                </div>
                                <div>
                                    <h4 class="text-gray-900 font-medium mb-1">Phone Number</h4>
                                    <p class="text-gray-700">+62 851 5640 5248</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-10 h-10 flex items-center justify-center bg-secondary rounded-full mr-4">
                                    <i class="ri-mail-line ri-lg text-primary"></i>
                                </div>
                                <div>
                                    <h4 class="text-gray-900 font-medium mb-1">Email Address</h4>
                                    <p class="text-gray-700">info@floratrade.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- -<div class="h-80 rounded-lg overflow-hidden shadow-sm">
                        <div class="w-full h-full" style="background-image: url('https://public.readdy.ai/gen_page/map_placeholder_1280x720.png'); background-size: cover; background-position: center;"></div>
                    </div> --}}
                    <div id="wrapperMaps">
                        <div id="maps">
                            <iframe style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.951156945661!2d106.77035217567887!3d-6.6529764933417574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69cf0a4fe681cd%3A0xc02e01bae04617a4!2sReksa%20Farm!5e0!3m2!1sid!2sid!4v1746527283118!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray text-white pt-16 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <!-- Company Info -->
                <div>
                    <h4 class="text-xl font-semibold mb-6">FloraTrade</h4>
                    <p class="text-white/80 mb-6">
                        Connecting Indonesian ornamental plant businesses with global markets through efficient export solutions.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 flex items-center justify-center bg-white/10 rounded-full hover:bg-white/20 transition-colors">
                            <i class="ri-facebook-fill ri-lg text-white"></i>
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center bg-white/10 rounded-full hover:bg-white/20 transition-colors">
                            <i class="ri-instagram-line ri-lg text-white"></i>
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center bg-white/10 rounded-full hover:bg-white/20 transition-colors">
                            <i class="ri-linkedin-fill ri-lg text-white"></i>
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center bg-white/10 rounded-full hover:bg-white/20 transition-colors">
                            <i class="ri-youtube-fill ri-lg text-white"></i>
                        </a>
                    </div>
                </div>
                <!-- Quick Links -->
                <div>
                    <h4 class="text-xl font-semibold mb-6">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="#home" class="text-white/80 hover:text-white transition-colors">Home</a></li>
                        <li><a href="#about" class="text-white/80 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#services" class="text-white/80 hover:text-white transition-colors">Services</a></li>
                        <li><a href="#" class="text-white/80 hover:text-white transition-colors">Marketplace</a></li>
                        <li><a href="#contact" class="text-white/80 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
                <!-- Services -->
                <div>
                    <h4 class="text-xl font-semibold mb-6">Our Services Excellence</h4>
                    <ul class="space-y-3">
                        <li><p class="text-white/80 hover:text-white transition-colors">Export Documentation</p></li>
                        <li><p class="text-white/80 hover:text-white transition-colors">Market Access</p></li>
                        <li><p class="text-white/80 hover:text-white transition-colors">Best Quality</p></li>
                        <li><p class="text-white/80 hover:text-white transition-colors">Many Destination</p></li>
                    </ul>
                </div>
                <!-- Newsletter -->
                {{--  <div>
                    <h4 class="text-xl font-semibold mb-6">Newsletter</h4>
                    <p class="text-white/80 mb-4">
                        Subscribe to our newsletter for the latest updates on export opportunities.
                    </p>
                    <form class="flex">
                        <input type="email" placeholder="Your email address" class="px-4 py-3 rounded-l-button bg-white/10 border-none text-white placeholder-white/60 flex-1">
                        <button type="submit" class="bg-white text-primary px-4 py-3 !rounded-r-button font-medium hover:bg-white/90 transition-colors whitespace-nowrap">
                            Subscribe
                        </button>
                    </form>
                </div>--}}
            </div>
            <div class="pt-8 border-t border-white/20 text-center">
                <p class="text-white/70">
                    &copy; {{ date('Y') }} FloraTrade. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        
        // Mobile menu toggle
        const menuButton = document.querySelector(".ri-menu-line").parentElement;
        const nav = document.querySelector("nav");
        menuButton.addEventListener("click", function () {
          nav.classList.toggle("hidden");
          nav.classList.toggle("flex");
          nav.classList.toggle("flex-col");
          nav.classList.toggle("absolute");
          nav.classList.toggle("top-16");
          nav.classList.toggle("left-0");
          nav.classList.toggle("right-0");
          nav.classList.toggle("bg-white");
          nav.classList.toggle("p-4");
          nav.classList.toggle("shadow-md");
        });

        


        // Testimonial slider functionality
        const testimonialSlides = document.getElementById("testimonialSlides");
        const dots = [
          document.getElementById("dot1"),
          document.getElementById("dot2"),
          document.getElementById("dot3"),
        ];
        const testimonialSets = [
          // First set (original)
          [
            {
              name: "Ahmad Suryanto",
              role: "Founder, Klorofilfarm",
              text: '"FloraTrade has transformed our business. We\'ve expanded to 5 new countries in just 6 months, and the documentation process that used to take weeks now takes days."',
              image:
                "https://readdy.ai/api/search-image?query=Professional%20headshot%20of%20an%20Indonesian%20business%20owner%2C%20male%2C%2040s%2C%20wearing%20a%20smart%20casual%20outfit%2C%20looking%20confident%20and%20approachable%20against%20a%20neutral%20background.%20High-quality%20portrait%20photography%20with%20good%20lighting.&width=100&height=100&seq=12347&orientation=squarish",
            },
            {
              name: "Dewi Anggraini",
              role: "Owner, Green Haven Nursery",
              text: '"As a small nursery, we never thought we could export internationally. FloraTrade made it possible, and now 40% of our revenue comes from overseas buyers."',
              image:
                "https://readdy.ai/api/search-image?query=Professional%20headshot%20of%20an%20Indonesian%20businesswoman%2C%20early%2030s%2C%20with%20a%20warm%20smile%2C%20wearing%20professional%20attire%2C%20against%20a%20neutral%20background.%20High-quality%20portrait%20photography%20with%20good%20lighting.&width=100&height=100&seq=12348&orientation=squarish",
            },
            {
              name: "Budi Santoso",
              role: "Director, Tropical Flora Exports",
              text: '"The support team at FloraTrade is exceptional. They guided us through every step of the export process and helped us navigate complex regulations with ease."',
              image:
                "https://readdy.ai/api/search-image?query=Professional%20headshot%20of%20an%20Indonesian%20business%20owner%2C%20male%2C%20mid-30s%2C%20with%20glasses%2C%20wearing%20a%20smart%20casual%20outfit%2C%20looking%20professional%20against%20a%20neutral%20background.%20High-quality%20portrait%20photography%20with%20good%20lighting.&width=100&height=100&seq=12349&orientation=squarish",
            },
          ],
          // Second set
          [
            {
              name: "Sarah Wijaya",
              role: "CEO, Orchid Paradise",
              text: '"The international exposure we\'ve gained through FloraTrade has been incredible. Our rare orchid varieties are now reaching collectors worldwide."',
              image:
                "https://readdy.ai/api/search-image?query=Professional%20headshot%20of%20an%20Indonesian%20businesswoman%2C%20mid-40s%2C%20wearing%20elegant%20business%20attire%2C%20confident%20pose%2C%20against%20a%20neutral%20background.%20High-quality%20portrait%20photography%20with%20good%20lighting.&width=100&height=100&seq=12350&orientation=squarish",
            },
            {
              name: "Rudi Hartono",
              role: "Manager, Green World Exports",
              text: '"FloraTrade\'s market insights helped us identify trending plants in different regions. This has been crucial for our export strategy."',
              image:
                "https://readdy.ai/api/search-image?query=Professional%20headshot%20of%20an%20Indonesian%20business%20professional%2C%20male%2C%20early%2030s%2C%20wearing%20business%20casual%20attire%2C%20friendly%20smile%2C%20against%20a%20neutral%20background.%20High-quality%20portrait%20photography%20with%20good%20lighting.&width=100&height=100&seq=12351&orientation=squarish",
            },
            {
              name: "Linda Kusuma",
              role: "Owner, Tropical Gardens Co",
              text: '"The platform\'s efficiency in handling documentation and logistics has reduced our export time by 60%. Simply outstanding!"',
              image:
                "https://readdy.ai/api/search-image?query=Professional%20headshot%20of%20an%20Indonesian%20entrepreneur%2C%20female%2C%20late%2030s%2C%20wearing%20modern%20business%20attire%2C%20professional%20look%2C%20against%20a%20neutral%20background.%20High-quality%20portrait%20photography%20with%20good%20lighting.&width=100&height=100&seq=12352&orientation=squarish",
            },
          ],
          // Third set
          [
            {
              name: "Michael Tanjung",
              role: "Director, Flora Express",
              text: '"FloraTrade\'s quality assurance protocols have helped us maintain consistent standards across all our shipments. Our return rate is now less than 1%."',
              image:
                "https://readdy.ai/api/search-image?query=Professional%20headshot%20of%20an%20Indonesian%20executive%2C%20male%2C%20mid-40s%2C%20wearing%20formal%20business%20suit%2C%20confident%20pose%2C%20against%20a%20neutral%20background.%20High-quality%20portrait%20photography%20with%20good%20lighting.&width=100&height=100&seq=12353&orientation=squarish",
            },
            {
              name: "Rina Sulistyo",
              role: "Founder, Green Thumb Nurseries",
              text: '"The networking opportunities through FloraTrade have been invaluable. We\'ve formed lasting partnerships with buyers from Europe and Asia."',
              image:
                "https://readdy.ai/api/search-image?query=Professional%20headshot%20of%20an%20Indonesian%20business%20owner%2C%20female%2C%20early%2040s%2C%20wearing%20smart%20business%20attire%2C%20warm%20professional%20smile%2C%20against%20a%20neutral%20background.%20High-quality%20portrait%20photography%20with%20good%20lighting.&width=100&height=100&seq=12354&orientation=squarish",
            },
            {
              name: "Hendra Wijaya",
              role: "CEO, Indonesian Flora Hub",
              text: '"From payment processing to shipping logistics, FloraTrade has streamlined every aspect of our export operations. It\'s a game-changer."',
              image:
                "https://readdy.ai/api/search-image?query=Professional%20headshot%20of%20an%20Indonesian%20CEO%2C%20male%2C%20late%2040s%2C%20wearing%20executive%20business%20attire%2C%20authoritative%20yet%20approachable%2C%20against%20a%20neutral%20background.%20High-quality%20portrait%20photography%20with%20good%20lighting.&width=100&height=100&seq=12355&orientation=squarish",
            },
          ],
        ];
        function createTestimonialCard(testimonial) {
          return `
      <div class="bg-white p-8 rounded-lg border border-gray-100 shadow-sm transition-all duration-500 transform hover:shadow-md">
      <div class="flex items-center mb-4">
      <div class="text-primary">
      <i class="ri-star-fill ri-lg"></i>
      <i class="ri-star-fill ri-lg"></i>
      <i class="ri-star-fill ri-lg"></i>
      <i class="ri-star-fill ri-lg"></i>
      <i class="ri-star-fill ri-lg"></i>
      </div>
      </div>
      <p class="text-gray-700 mb-6 italic">${testimonial.text}</p>
      <div class="flex items-center">
      <div class="w-12 h-12 rounded-full bg-gray-200 overflow-hidden mr-4">
      <img src="${testimonial.image}" alt="${testimonial.name}" class="w-full h-full object-cover object-top">
      </div>
      <div>
      <h4 class="text-gray-900 font-semibold">${testimonial.name}</h4>
      <p class="text-gray-600 text-sm">${testimonial.role}</p>
      </div>
      </div>
      </div>
      `;
        }
        function updateTestimonials(setIndex) {
          const slides = document.getElementById("testimonialSlides");
          slides.style.opacity = "0";
          slides.style.transform = "translateY(20px)";
          setTimeout(() => {
            slides.innerHTML = testimonialSets[setIndex]
              .map((testimonial) => createTestimonialCard(testimonial))
              .join("");
            requestAnimationFrame(() => {
              slides.style.opacity = "1";
              slides.style.transform = "translateY(0)";
            });
            dots.forEach((dot, index) => {
              dot.className =
                index === setIndex
                  ? "w-3 h-3 rounded-full bg-primary transition-colors duration-300"
                  : "w-3 h-3 rounded-full bg-gray-300 hover:bg-primary/50 transition-colors duration-300";
            });
          }, 300);
        }
        // Initialize first set of testimonials
        document.addEventListener("DOMContentLoaded", () => {
          updateTestimonials(0);
        });
        dots.forEach((dot, index) => {
          dot.addEventListener("click", () => updateTestimonials(index));
        });
      });
    </script>
  </body>
</html>