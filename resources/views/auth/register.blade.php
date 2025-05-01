<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Plantsasri</title>

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
                <h1>Create Account</h1>
                <p>Sign Up account to continue</p>
            </div>
            <form action="{{ route('register') }}" method="POST" class="formAuth">
                @csrf
                <div class="mb-3 inputForm">
                    <div class="icon">
                        <label for="username">
                            <img src="{{ url('assets/img/iconUser.svg') }}" alt="">
                        </label>
                    </div>
                    <input type="username" class="form-control" id="username" name="name" placeholder="Username">
                </div>
                <div class="mb-3 inputForm">
                    <div class="icon">
                        <label for="email">
                            <img src="{{ url('assets/img/iconEmail.svg') }}" alt="">
                        </label>
                    </div>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="mb-3 inputForm">
                    <div class="icon">
                        <label for="number">
                            <img src="{{ url('assets/img/iconPhone.svg') }}" alt="">
                        </label>
                    </div>
                    <input type="number" class="form-control" id="number" name="phone" placeholder="No Telephone">
                </div>
                <div class="mb-4 inputForm passwordForm">
                    <div class="icon">
                        <label for="password">
                            <img src="{{ url('assets/img/iconLock.svg') }}" alt="">
                        </label>
                    </div>
                    <div class="wrapperToggle">
                        <i class="bi bi-eye-fill" id="togglePassword"></i>
                    </div>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <div class="mb-4 inputForm passwordForm">
                    <div class="icon">
                        <label for="password">
                            <img src="{{ url('assets/img/iconLock.svg') }}" alt="">
                        </label>
                    </div>
                    <div class="wrapperToggle">
                        <i class="bi bi-eye-fill" id="togglePassword"></i>
                    </div>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Password Confirmation">
                </div>
                <div class="actionUser d-flex justify-content-center flex-column align-items-center">
                    <button type="submit" class="btn btnPrimary">Sign Up</button>
                    <p class="text">Have an account ? <a href="{{ route('login') }}">Login!</a></p>
                </div>
            </form>
        </div>
    </div>




    <!--Vendor-->
        <script src="{{ url('assets/vendor/jquery/jquery.min.js') }}"></script>
        <!--Bootstrap JS-->
        <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <script>
            //Preloader
            $(window).on('load', function() {
                $('.wrapperPreloader').fadeOut('slow');
            });

            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#password');

            togglePassword.addEventListener('click', function (e) {
                // toggle the type attribute
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);

                this.classList.toggle('bi-eye-slash-fill');
            });
        </script>
</body>
</html>
