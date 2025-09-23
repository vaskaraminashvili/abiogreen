<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.scss', 'resources/js/app.js'])
    @endif
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo_icon.png') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('./assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('./assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('./assets/css/custom-animation.css') }}">
    <link rel="stylesheet" href="{{ asset('./assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('./assets/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('./assets/css/font-awesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('./assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('./assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('./assets/css/main.css') }}">
</head>

</html>

<body id="body" class="it-magic-cursor">

    <!-- preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end  -->

    <div id="magic-cursor">
        <div id="ball"></div>
    </div>

    <!-- back-to-top-start  -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="far fa-angle-double-up"></i>
    </button>
    <!-- back-to-top-end  -->



    <!-- it-offcanvus-area-start -->
    <div class="it-offcanvas-area">
        <div class="itoffcanvas">
            <div class="itoffcanvas__close-btn">
                <button class="close-btn"><i class="fal fa-times"></i></button>
            </div>
            <div class="itoffcanvas__logo">
                <a href="{{ route('home') }}">
                    <img class="logo_image" src="{{ asset('images/logo_icon.png') }}" alt="">
                </a>
            </div>
            <div class="itoffcanvas__text">
                <p>Suspendisse interdum consectetur libero id. Fermentum leo vel orci porta non. Euismod viverra nibh
                    cras pulvinar suspen.</p>
            </div>
            <div class="it-menu-mobile d-xl-none"></div>
            <div class="itoffcanvas__info">
                <h3 class="offcanva-title">Get In Touch</h3>
                <div class="it-info-wrapper mb-20 d-flex align-items-center">
                    <div class="itoffcanvas__info-icon">
                        <a href="#"><i class="fal fa-envelope"></i></a>
                    </div>
                    <div class="itoffcanvas__info-address">
                        <span>Email</span>
                        <a href="maito:hello@yourmail.com">hello@yourmail.com</a>
                    </div>
                </div>
                <div class="it-info-wrapper mb-20 d-flex align-items-center">
                    <div class="itoffcanvas__info-icon">
                        <a href="#"><i class="fal fa-phone-alt"></i></a>
                    </div>
                    <div class="itoffcanvas__info-address">
                        <span>Phone</span>
                        <a href="tel:(00)45611227890">(00) 456 1122 7890</a>
                    </div>
                </div>
                <div class="it-info-wrapper mb-20 d-flex align-items-center">
                    <div class="itoffcanvas__info-icon">
                        <a href="#"><i class="fas fa-map-marker-alt"></i></a>
                    </div>
                    <div class="itoffcanvas__info-address">
                        <span>Location</span>
                        <a href="htits://www.google.com/maps/@37.4801311,22.8928877,3z" target="_blank">Riverside 255,
                            San Francisco, USA </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="body-overlay"></div>
    <!-- it-offcanvus-area-end -->
    <x-header />
    <main>

      <x-home.slider />

      <x-home.about-us />

      <x-home.service-area />


      <x-home.project-area />


      <x-home.brand-area />


      <x-home.blog-area />

    </main>

    <x-footer />

    <!-- JS here -->
    <script src="{{ asset('./assets/js/jquery.js') }}"></script>
    <script src="{{ asset('./assets/js/jequery-knob.js') }}"></script>
    <script src="{{ asset('./assets/js/jequery-appear.js') }}"></script>
    <script src="{{ asset('./assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('./assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('./assets/js/purecounter.js') }}"></script>
    <script src="{{ asset('./assets/js/range-slider.js') }}"></script>
    <script src="{{ asset('./assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('./assets/js/ordain-it.js') }}"></script>
    <script src="{{ asset('./assets/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('./assets/js/isotope-pkgd.js') }}"></script>
    <script src="{{ asset('./assets/js/beforeafter.js') }}"></script>
    <script src="{{ asset('./assets/js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('./assets/js/slider.js') }}"></script>
    <script src="{{ asset('./assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('./assets/js/wow.js') }}"></script>
    <script src="{{ asset('./assets/js/main.js') }}"></script>

</body>

</html>
