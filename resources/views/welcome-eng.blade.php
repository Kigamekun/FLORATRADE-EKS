<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Plantsasri Indonesia is one of the leading exporters of agricultural products, especially ornamental plants in Indonesia. We are an OEM whitelabel manufacturing company, our company has been established for more than 3 years in the agricultural industry.">
    <meta name="keywords" content="Plantsasri, plants, indonesia farmer, bisa ekspor, cara ekpsor, plants indonesia, seller plants indonesia, buy plants from indonesia, supplier plants indonesia">
    <meta name="author" content="Plantsasri Indonesia">
    <title>Plantsasri - Ornamentals Plants Leading Exporters</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ url('favicon.ico') }}">

    <!--Bootstrap Assets-->
    <link rel="stylesheet" href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendor/bootstrap/icons-1.7.2/font/bootstrap-icons.css') }}">

    <!--CSS Component For Layouting-->
    <link rel="stylesheet" href="{{ url('assets/css/preloader.css') }}">

    <!--Slick Js-->
    <link rel="stylesheet" href="{{ url('assets/vendor/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendor/slick/slick-theme.css') }}">

    <!--Styling LandingPage-->
    <link rel="stylesheet" href="{{ url('assets/css/landingpage.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset("vendor/cookie-consent/css/cookie-consent.css")}}">
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5C8HF3V"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


    <div class="wrapperPreloader">
        <div id="loader"></div>
    </div>


    <div id="app">
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">

                <a class="navbar-brand" href="#">
                    {{-- <img src="{{ url('assets/img/PlantsasriLogo.png') }}" alt=""> --}}
                    <img src="{{ url('assets/img/LogoFloraTrade.png') }}" alt="Logo Floratrade">
                </a>

                <button class="navbar-toggler" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <div class="menu">
                            <a class="nav-link active" href="#app">Home</a>
                            <a class="nav-link" href="#about">About</a>
                            <a class="nav-link" href="#service">Services</a>
                            <a class="nav-link" href="#">Shop</a>
                            <a class="nav-link" href="#contact">Contact</a>
                        </div>

                        <div class="getStarted">
                            <div class="polygon">
                                <div class="clipath"></div>
                            </div>
                            @if (is_null(Auth::user()))
                                <div class="buttonWrapper">
                                    <div class="wrapperLanguage">
                                        <a href="?lang=eng" class="english language">
                                            <img src="{{ url('assets/img/united.svg') }}" alt="">
                                            ENG
                                        </a>
                                        <a href="?lang=id" class="indonesia language">
                                            <img src="{{ url('assets/img/indonesia.svg') }}" alt="">
                                            ID
                                        </a>
                                    </div>
                                    <a href="{{ route('login') }}" class="nav-link">Get Started</a>
                                </div>

                            @else
                                <div class="buttonWrapper">
                                    <a href="
                    @if (Auth::user()->role == 0)
                                        {{ '/admin' }}

                                    @else
                                        {{ route('dashboard') }}
                            @endif

                            " class="nav-link">Dashboard</a>
                        </div>
                        @endif
                    </div>

                </div>
            </div>

    </div>
    </nav>
    <!--End Navbar-->

    <!--Jumbotron-->
    <div class="wrapperJumbotron">
        <div class="container">
            <div class="content">
                <div class="text textSlider">
                    <div class="textSlide">
                        <h1 class="jumbotronText">START YOUR BUSSINESS RIGHT!</h1>
                        <p>Realize your dream of becoming an exporter and importer with <span class="brand">KlorofilFarm Indonesia</span></p>
                        <p>The most complete and trusted legality plants export management service.</p>
                    </div>
                    <div class="textSlide">
                        <h1 class="jumbotronText">GRAB YOUR CHANCE NOW!</h1>
                        <p>Do your best at every opportunity you have.</p>
                        <p>If you want a different change, start with yourself right now.</p>
                    </div>
                </div>
                <div class="getStartedButton">
                    <a href="{{ route('login') }}">Get Started</a>
                </div>
            </div>
        </div>
    </div>
    <!--End Jumbotron-->

    <div class="mainContent">
        <div class="container">

            <!--About Plantsasri-->
            <div class="aboutPlantsasri" id="about">
                <div class="imagesWrapper">
                    <img src="{{ url('assets/img/PlantsasriImages_1.png') }}" alt="">
                </div>
                <div class="about">
                    <h1>About KlorofilFarm</h1>
                    <p> KlorofilFarm Indonesia is one of the exporters of agricultural products, especially ornamental plants in Indonesia. </p>

                    <p> KlorofilFarm Indonesia also cares about all Indonesian farmers. Through this website development program, we provide access to farmers to be able to reach global markets and expand their business reach.</p>

                    <p> KlorofilFarm Indonesia also has an ornamental plant marketplace that can be used to send and buy ornamental plants and send them wherever they want.</p>
                    <div class="statisticAbout">
                        <div class="statistic">
                            <span class="count">5</span>
                            <p>Years of Experience</p>
                        </div>
                        <div class="statistic">
                            <span class="count">233</span>
                            <p>Country Of Destination</p>
                        </div>
                        <div class="statistic">
                            <span class="count">8</span>
                            <p>Plant Entrepreneur</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Plantsasri-->

            <!--Service Plantsasri-->
            <div class="servicePlantsasri" id="service">
                <h1>Our Service</h1>
                <div class="wrapperService">
                    <div class="service">
                        <div class="iconService">
                            <img src="{{ url('assets/img/erth-icon.svg') }}" alt="">
                        </div>
                        <h4>Many Destination</h4>
                        <p>Many countries you can go to send your plants</p>
                    </div>
                    <div class="service">
                        <div class="iconService">
                            <img src="{{ url('assets/img/hand-icon.svg') }}" alt="">
                        </div>
                        <h4>Easy Permission</h4>
                        <p>You can take care of the documents you need for licensing quickly and easily</p>
                    </div>
                    <div class="service">
                        <div class="iconService">
                            <img src="{{ url('assets/img/24-hour-icon.svg') }}" alt="">
                        </div>
                        <h4>Best Services</h4>
                        <p>You will get friendly & super service only at <span
                                class="brand">Planntsasri</span></p>
                    </div>
                </div>
            </div>
            <!--End Service Plantsasri-->

            <!--Banner Promotion-->
            <div class="bannerPlantsasri">
                <div class="wrapperBannerPlantsasri">
                    <div class="phonePreview">
                        <img src="{{ url('assets/img/iphonefrm.png') }}" alt="">
                    </div>

                    <div class="textBanner">
                        <h3>FIRST IN INDONESIA</h3>
                        <h1>TRACK YOUR PLANTS LICENSE</h1>
                        <p>The License Tracking feature is used to monitor the process of your Phytosanitary Certificate. You can monitor
                            your licensing process whenever and wherever you are.</p>
                    </div>
                </div>
            </div>
            <!--End Banner Promotion-->

            <!--Countries Available-->
            <div class="wrapperCountryAvaialble">
                <div class="content">
                    <div class="text">
                        <h1>You can send your plants to these countries.</h1>
                    </div>

                    <div class="wrapperImagesCountry">
                        <div class="lineCountry lineCountry1">
                            <div class="country">
                                <img src="{{ url('assets/img/uk-country.svg') }}" alt="">
                            </div>
                            <div class="country">
                                <img src="{{ url('assets/img/japan_country.svg') }}" alt="">
                            </div>
                            <div class="country">
                                <img src="{{ url('assets/img/europa_country.svg') }}" alt="">
                            </div>
                            <div class="country">
                                <img src="{{ url('assets/img/canada_country.svg') }}" alt="">
                            </div>
                            <div class="country">
                                <img src="{{ url('assets/img/amerika_country.svg') }}" alt="">
                            </div>
                        </div>

                        <div class="lineCountry lineCountry2">
                            <div class="country">
                                <img src="{{ url('assets/img//newZeland_country.svg') }}" alt="">
                            </div>
                            <div class="country">
                                <img src="{{ url('assets/img/singapore_country.svg') }}" alt="">
                            </div>
                            <div class="country">
                                <img src="{{ url('assets/img/uk-country.svg') }}" alt="">
                            </div>
                            <div class="country">
                                <img src="{{ url('assets/img/japan_country.svg') }}" alt="">
                            </div>
                            <div class="country">
                                <img src="{{ url('assets/img/canada_country.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Countries Available-->

            <!--Testimoni-->
            <div class="testimoniSection">
                <h1>Testimoni</h1>

                <div class="wrapperTestimoni">
                    <div class="testimoniList">
                        <div class="profileImages">
                            <img src="{{ url('assets/img/faces.jpg') }}" alt="">
                        </div>
                        <p class="comment">
                            “The service is very good and I will definitely be ordering more!”
                        </p>
                        <p class="nameUser">Carla Hofmeyr</p>
                    </div>
                    <div class="testimoniList">
                        <div class="profileImages">
                            <img src="{{ url('assets/img/faces.jpg') }}" alt="">
                        </div>
                        <p class="comment">
                            “Great packaging, very responsive communication. Plants were beautiful and even better than expected. Will be buying from seller again.”
                        </p>
                        <p class="nameUser">Brooke Cesena</p>
                    </div>
                    <div class="testimoniList">
                        <div class="profileImages">
                            <img src="{{ url('assets/img/faces.jpg') }}" alt="">
                        </div>
                        <p class="comment">
                            “Very fast shipping, beautiful plants! Will definitely order again!”
                        </p>
                        <p class="nameUser">Isela T Zamudio</p>
                    </div>
                    <div class="testimoniList">
                        <div class="profileImages">
                            <img src="{{ url('assets/img/faces.jpg') }}" alt="">
                        </div>
                        <p class="comment">
                            “Highly recommend. Packed very well and arrived good condition.”
                        </p>
                        <p class="nameUser">Matteo Porceillon</p>
                    </div>
                    <div class="testimoniList">
                        <div class="profileImages">
                            <img src="{{ url('assets/img/faces.jpg') }}" alt="">
                        </div>
                        <p class="comment">
                            “The service is very good friendly”
                        </p>
                        <p class="nameUser">Fréderic Victor</p>
                    </div>
                    <div class="testimoniList">
                        <div class="profileImages">
                            <img src="{{ url('assets/img/faces.jpg') }}" alt="">
                        </div>
                        <p class="comment">
                            “Overall Excellent! Many Thanks! God bless”
                        </p>
                        <p class="nameUser">John Kenn</p>
                    </div>
                    <div class="testimoniList">
                        <div class="profileImages">
                            <img src="{{ url('assets/img/faces.jpg') }}" alt="">
                        </div>
                        <p class="comment">
                            “This services is serious and honest. Thank you”
                        </p>
                        <p class="nameUser">Manuel Thomas</p>
                    </div>
                </div>
            </div>
            <!--End Testimoni-->

            <div class="partnership">
                <h1>Partnership</h1>

                <div class="wrapperPartnership">
                    <div class="partnership-item">
                        <img src="{{ url('assets/img/Logo_Barantan.png') }}" alt="">
                    </div>
                    <div class="partnership-item">
                        <img src="{{ url('assets/img/Logo_startcode.png') }}" alt="">
                    </div>
                    <div class="partnership-item">
                        <img src="{{ url('assets/img/LogoKementrianPertanian.png') }}" alt="">
                    </div>
                    <div class="partnership-item">
                        <img src="{{ url('assets/img/DHL-logo.png') }}" alt="">
                    </div>
                    <div class="partnership-item">
                        <img src="{{ url('assets/img/logoEmirates.png') }}" alt="">
                    </div>
                    <div class="partnership-item">
                        <img src="{{ url('assets/img/UPS_logo.png') }}" alt="">
                    </div>
                    <div class="partnership-item">
                        <img src="{{ url('assets/img/catchayLogo.png') }}" alt="">
                    </div>
                </div>
            </div>

            <!--Find Plantsasri-->
            <div class="contactSection" id="contact">
                <div class="contact">
                    <h1>Contact Us</h1>
                    <p>If you have questions about licensing suggestions or complaints, please don't hesitate to contact
                        us. We will be very happy to serve your request as soon as possible.</p>
                    <form method="POST" action="{{ route('sendMailContact') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" name="nama" class="form-control" aria-describedby="passwordHelpBlock">
                        </div>
                        <div class="form-group mb-3">
                            <label for="numberPhone" class="form-label">Phone Number</label>
                            <input type="number" name="numberPhone" id="numberPhone" class="form-control"
                                aria-describedby="passwordHelpBlock">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Email" class="form-label">Email</label>
                            <input type="email" name="email" id="Email" class="form-control" aria-describedby="passwordHelpBlock">
                        </div>
                        <div class="form-group mb-4">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" name="message" id="message" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn buttonSubmit">Submit</button>
                    </form>
                </div>
                <div id="wrapperMaps">
                    <div id="maps">
                        <iframe style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.686099579077!2d106.76789555057734!3d-6.561249565942787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5b9933fc50d%3A0x155679cea3b523ae!2sCV.%20Planterindo%20Asri!5e0!3m2!1sid!2sid!4v1643991203516!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
            <!--End Find Plantsasri-->
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="contentFooter">
                <div class="line">
                    <div class="brand">
                        {{-- <img src="{{ url('assets/img/Logo_Plantsasri.png') }}" alt=""> --}}
                    </div>
                    <p>We help with licensing for plant entrepreneurs who want to send their plants to international
                        markets.</p>
                    <div class="socialMedia">
                        <a href="#" class="social">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                        <a href="#" class="social">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </div>
                </div>

                <div class="line">
                    <h3>Useful Links</h3>

                    <div class="linkToPages">
                        <a href="#">Home</a>
                        <a href="#">About KlorofilFarm</a>
                        <a href="#">Contact Us</a>
                        <a href="#">Faq</a>
                        <a href="#">Get Started</a>
                    </div>
                </div>

                <div class="line">
                    <h3>Many Destination</h3>

                    <div class="linkToPages">
                        <p>Many Destination</p>
                        <p>Easy Permission</p>
                        <p>Best Services</p>
                    </div>
                </div>

                <div class="line">
                    <h3>Got Question ?</h3>
                    <h2 class="phone">+6285156405248</h2>
                    <div class="linkToPages">
                        <p class="address">GARDEN No.13 Jalan Cijahe, Curug Mekar - Bogor Barat, Bogor, Jawa
                            Barat</p>
                    </div>
                </div>
            </div>
            <p class="copyright">© 2021 KlorofilFarm Indonesia</p>
        </div>
    </footer>
    </div>



    <!--Vendor-->
    <!--Jquery-->
    <script src="{{ url('assets/vendor/jquery/jquery.min.js') }}"></script>
    <!--Bootstrap JS-->
    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!--Ion Icon-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!--Slick Js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="{{ url('assets/vendor/slick/slick.min.js') }}"></script>

    <script>
        //Preloader
        $(window).on('load', function() {
            $('.wrapperPreloader').fadeOut('slow');
        });

        //Navbar Mobile Version Toggle triger
        $(document).ready(function() {
            $(".navbar-toggler").click(function() {
                $(".navbar-collapse").toggleClass("showNavbar");
            });
        });

        //Jumbotron text slide
        $('.textSlider').slick({
            dots: false,
            infinite: true,
            speed: 1000,
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: true,
            arrows: false,
            autoplay:true,
        });

        //testimoni slick
        $('.wrapperTestimoni').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            adaptiveHeight: true,
            arrows: false,
            responsive: [{
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        //count Number
        $('.count').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 3000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>


    <script>
        $('.lineCountry1').slick({
            infinite: false,
            slidesToShow: 2.5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
        $('.lineCountry2').slick({
            slidesToShow: 2.5,
            infinite: false,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    </script>


        <script>
            $(document).ready(function () {
                $(document).on("scroll", onScroll);

                //smoothscroll
                $('a[href^="#"]').on('click', function (e) {
                    e.preventDefault();
                    $(document).off("scroll");

                    $('a').each(function () {
                        $(this).removeClass('active');
                    })
                    $(this).addClass('active');

                    var target = this.hash,
                        menu = target;
                    $target = $(target);
                    $('html, body').stop().animate({
                        'scrollTop': $target.offset().top+6
                    }, 700, 'swing', function () {
                        window.location.hash = target;
                        $(document).on("scroll", onScroll);
                    });
                });
            });

            function onScroll(event){
                var scrollPos = $(document).scrollTop();
                $('#navbar a').each(function () {
                    var currLink = $(this);
                    var refElement = $(currLink.attr("href"));
                    if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                        $('#navbar ul li a').removeClass("active");
                        currLink.addClass("active");
                    }
                    else{
                        currLink.removeClass("active");
                    }
                });
            }
        </script>

        <!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/62012f29b9e4e21181bddcf3/1fraa0f63';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PD78QR1W0F"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-PD78QR1W0F');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5C8HF3V');</script>
<!-- End Google Tag Manager -->
<!-- MailChimp -->
<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/6f0416e88f41b4756ef17490d/ceabefb3b194e39094133844a.js");
</script>
<!-- End MailChimp -->
</body>

</html>
