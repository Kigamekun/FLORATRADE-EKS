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
            <form action="{{ route('register') }}" method="POST" class="formAuth" id="formRegister">
    @csrf
    <div class="mb-3 inputForm">
        <div class="icon">
            <label for="username">
                <img src="{{ url('assets/img/iconUser.svg') }}" alt="">
            </label>
        </div>
        <input type="text" class="form-control" id="username" name="name" placeholder="Username" required>
        <div class="invalid-feedback">Username wajib diisi.</div>
    </div>
    <div class="mb-3 inputForm">
        <div class="icon">
            <label for="email">
                <img src="{{ url('assets/img/iconEmail.svg') }}" alt="">
            </label>
        </div>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
        <div class="invalid-feedback">Masukkan email yang valid.</div>
    </div>
    <div class="mb-3 inputForm">
        <div class="icon">
            <label for="number">
                <img src="{{ url('assets/img/iconPhone.svg') }}" alt="">
            </label>
        </div>
        <input type="number" class="form-control only-number" id="number" name="phone" placeholder="No Telephone" min="0" required>
        <div class="invalid-feedback">No telephone wajib diisi dan tidak boleh minus.</div>
    </div>
    <div class="mb-4 inputForm passwordForm">
        <div class="icon">
            <label for="password">
                <img src="{{ url('assets/img/iconLock.svg') }}" alt="">
            </label>
        </div>
        <div class="wrapperToggle">
            <i class="bi bi-eye-fill togglePassword" data-target="password"></i>
        </div>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required minlength="6">
        <div class="invalid-feedback">Password minimal 6 karakter.</div>
    </div>
    <div class="mb-4 inputForm passwordForm">
        <div class="icon">
            <label for="password_confirmation">
                <img src="{{ url('assets/img/iconLock.svg') }}" alt="">
            </label>
        </div>
        <div class="wrapperToggle">
            <i class="bi bi-eye-fill togglePassword" data-target="password_confirmation"></i>
        </div>
        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Password Confirmation" required>
        <div class="invalid-feedback">Konfirmasi password tidak sama.</div>
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

        <script>
$(document).ready(function () {

    // Toggle show/hide password
    $(document).on("click", ".togglePassword", function () {
        let target = $("#" + $(this).data("target"));
        let type = target.attr("type") === "password" ? "text" : "password";
        target.attr("type", type);
        $(this).toggleClass("bi-eye-slash-fill");
    });

    // Prevent minus number input
    $(document).on("input", ".only-number", function () {
        let val = $(this).val();
        if (val === "" || parseFloat(val) < 0) {
            $(this).val(""); // reset kalau minus
            $(this).removeClass("is-valid").addClass("is-invalid");
        } else {
            $(this).removeClass("is-invalid").addClass("is-valid");
        }
    });

    // Form submit validation
    $("#formRegister").on("submit", function (e) {
        let valid = true;

        // username
        let username = $("#username");
        if (username.val().trim() === "") {
            username.addClass("is-invalid"); valid = false;
        } else {
            username.removeClass("is-invalid").addClass("is-valid");
        }

        // email
        let email = $("#email");
        let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email.val())) {
            email.addClass("is-invalid"); valid = false;
        } else {
            email.removeClass("is-invalid").addClass("is-valid");
        }

        // phone
        let phone = $("#number");
        if (phone.val().trim() === "" || parseFloat(phone.val()) < 0) {
            phone.addClass("is-invalid"); valid = false;
        } else {
            phone.removeClass("is-invalid").addClass("is-valid");
        }

        // password
        let password = $("#password");
        if (password.val().length < 6) {
            password.addClass("is-invalid"); valid = false;
        } else {
            password.removeClass("is-invalid").addClass("is-valid");
        }

        // confirm password
        let confirm = $("#password_confirmation");
        if (password.val() !== confirm.val() || confirm.val() === "") {
            confirm.addClass("is-invalid"); valid = false;
        } else {
            confirm.removeClass("is-invalid").addClass("is-valid");
        }

        if (!valid) {
            e.preventDefault(); // stop submit kalau invalid
        }
    });

    // hapus error state kalau user mulai ketik
    $("#formRegister input").on("input", function () {
        $(this).removeClass("is-invalid");
    });

});
</script>

</body>
</html>
