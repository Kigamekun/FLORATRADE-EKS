<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - {{ env('APP_NAME') }}</title>

    <!--Bootstrap Assets-->
    <link rel="stylesheet" href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendor/bootstrap/icons-1.7.2/font/bootstrap-icons.css') }}">

    <link rel="stylesheet" href="{{ url('assets/css/preloader.css') }}">


    <!--Auth Css-->
    <link rel="stylesheet" href="{{ url('assets/css/auth.css') }}">
</head>

<body>

    <div class="wrapperPreloader">
        <div id="loader"></div>
    </div>

    <div id="auth">
        <div class="imagesAuth">
            <img src="{{ url('assets/img/authImages.png') }}" alt="">
        </div>
        <div class="sectionFormAuth">
            <div class="headAuth">
                <h1>Welcome</h1>
                <p>Log in to your account to continue</p>
            </div>
            <form action="{{ route('login') }}" method="POST" class="formAuth">
                @csrf

                {{-- Pesan error umum (misalnya salah email atau password) --}}
                @if (session('status'))
                    <div class="alert alert-danger">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="mb-3">
                    <div class="inputForm position-relative">
                        <div class="icon position-absolute top-50 start-0 translate-middle-y ms-2">
                            <img src="{{ url('assets/img/iconUser.svg') }}" style="width: 20px; height: 20px;" alt="">
                        </div>
                        <input type="email" name="email"
                            class="form-control ps-5 @error('email') is-invalid @enderror" id="email"
                            placeholder="Email" value="{{ old('email') }}">
                    </div>
                    {{-- Error ditaruh di luar wrapper --}}
                    @error('email')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="inputForm position-relative">
                        <div class="icon position-absolute top-50 start-0 translate-middle-y ms-2">
                            <img src="{{ url('assets/img/iconLock.svg') }}" style="width: 20px; height: 20px;" alt="">
                        </div>
                        <input type="password" name="password"
                            class="form-control ps-5 pe-5 @error('password') is-invalid @enderror" id="password"
                            placeholder="Password">
                        <div class="wrapperToggle position-absolute top-50 end-0 translate-middle-y me-2">
                            <i class="bi bi-eye-fill" id="togglePassword"></i>
                        </div>
                    </div>
                    {{-- Error ditaruh di luar wrapper --}}
                    @error('password')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>


                <div class="mb-4 d-flex justify-content-end">
                    <a href="{{ route('password.request') }}" class="forgotPassword">Forgot your password ?</a>
                </div>

                <div class="actionUser d-flex justify-content-center flex-column align-items-center">
                    <button type="submit" class="btn btnPrimary">Log In</button>
                    <p class="text">Don’t have an account ? <a href="{{ route('register') }}">Sign up!</a></p>
                </div>
            </form>

        </div>
    </div>




    <!--Vendor-->
    <script src="{{ url('assets/vendor/jquery/jquery.min.js') }}"></script>

    <!--Bootstrap JS-->
    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!--Script Auth-->
    <script>
        //Preloader
        $(window).on('load', function() {
            $('.wrapperPreloader').fadeOut('slow');
        });

        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            this.classList.toggle('bi-eye-slash-fill');
        });
    </script>
</body>

</html>
