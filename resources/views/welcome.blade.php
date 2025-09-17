<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

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

    <!-- search popup start -->
    <div class="search-popup">
        <button class="close-search"><span class="flaticon-multiply"><i class="fal fa-times"></i></span></button>
        <form method="post" action="#">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fal fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- search popup end -->

    <!-- it-offcanvus-area-start -->
    <div class="it-offcanvas-area">
        <div class="itoffcanvas">
            <div class="itoffcanvas__close-btn">
                <button class="close-btn"><i class="fal fa-times"></i></button>
            </div>
            <div class="itoffcanvas__logo">
                <a href="index.html">
                    <img src="assets/img/logo/logo-white.png" alt="">
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

    <header class="it-header-height">
        <!-- header-top-area-start -->
        <div class="it-header-top-area  white-bg it-header-top-ptb">
            <div class="container container-1650">
                <div class="row align-items-center">
                    <div class="col-xxl-5 col-xl-4 col-lg-5 col-md-6 col-sm-7 d-none d-sm-block">
                        <div class="it-header-top-social-box d-flex align-items-center">
                            <span>Follow On:</span>
                            <a href="#">
                                <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M1.82727 6.83333C1.14284 6.83333 1 6.96763 1 7.61111V8.77778C1 9.42126 1.14284 9.55556 1.82727 9.55556H3.48182V14.2222C3.48182 14.8657 3.62466 15 4.30909 15H5.96364C6.64807 15 6.79091 14.8657 6.79091 14.2222V9.55556H8.64871C9.1678 9.55556 9.30155 9.4607 9.44416 8.99145L9.7987 7.82478C10.043 7.02095 9.89246 6.83333 9.00326 6.83333H6.79091V4.88889C6.79091 4.45933 7.16129 4.11111 7.61818 4.11111H9.97273C10.6572 4.11111 10.8 3.97681 10.8 3.33333V1.77778C10.8 1.1343 10.6572 1 9.97273 1H7.61818C5.33373 1 3.48182 2.74111 3.48182 4.88889V6.83333H1.82727Z"
                                        stroke="currentcolor" stroke-width="1.5" stroke-linejoin="round" />
                                </svg>
                            </a>
                            <a href="#">
                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.41177 0H0L5.23083 6.87316L0.334618 12.6389H2.59681L6.29998 8.27809L9.58823 12.5988H14L8.6172 5.52593L8.62673 5.53813L13.2614 0.0802914H10.9992L7.55741 4.13336L4.41177 0ZM2.43522 1.20371H3.80866L11.5648 11.395H10.1913L2.43522 1.20371Z"
                                        fill="currentcolor" />
                                </svg>
                            </a>
                            <a href="#">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.5 1H4.5C2.567 1 1 2.567 1 4.5V11.5C1 13.433 2.567 15 4.5 15H11.5C13.433 15 15 13.433 15 11.5V4.5C15 2.567 13.433 1 11.5 1Z"
                                        stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M10.7963 7.55921C10.8827 8.14178 10.7832 8.73676 10.5119 9.25952C10.2407 9.78228 9.81148 10.2062 9.28542 10.471C8.75935 10.7358 8.16319 10.8279 7.58173 10.7344C7.00027 10.6408 6.46311 10.3663 6.04667 9.94982C5.63022 9.53338 5.35569 8.99622 5.26213 8.41476C5.16856 7.8333 5.26073 7.23714 5.52551 6.71107C5.79029 6.18501 6.21421 5.75583 6.73697 5.48458C7.25973 5.21333 7.85471 5.11382 8.43728 5.20021C9.03152 5.28833 9.58167 5.56524 10.0065 5.99003C10.4313 6.41482 10.7082 6.96496 10.7963 7.55921Z"
                                        stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M11.8477 4.15039H11.8577" stroke="currentcolor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            <a href="#">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.2579 4.73828C11.5141 4.73828 12.7188 5.2373 13.6071 6.12555C14.4954 7.01381 14.9944 8.21854 14.9944 9.47473V15.0006H11.8367V9.47473C11.8367 9.056 11.6704 8.65442 11.3743 8.35834C11.0782 8.06225 10.6767 7.89591 10.2579 7.89591C9.8392 7.89591 9.43762 8.06225 9.14154 8.35834C8.84545 8.65442 8.67911 9.056 8.67911 9.47473V15.0006H5.52148V9.47473C5.52148 8.21854 6.0205 7.01381 6.90876 6.12555C7.79701 5.2373 9.00174 4.73828 10.2579 4.73828Z"
                                        fill="currentcolor" />
                                    <path d="M3.15763 5.52734H0V15.0002H3.15763V5.52734Z" fill="currentcolor" />
                                    <path
                                        d="M1.57881 3.15763C2.45077 3.15763 3.15763 2.45077 3.15763 1.57881C3.15763 0.706859 2.45077 0 1.57881 0C0.706859 0 0 0.706859 0 1.57881C0 2.45077 0.706859 3.15763 1.57881 3.15763Z"
                                        fill="currentcolor" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-8 col-lg-7 col-md-6 col-sm-5">
                        <div
                            class="it-header-top-contact-wrap d-flex justify-content-center justify-content-sm-end align-items-center">
                            <ul>
                                <li class="d-none d-xxl-inline-block">
                                    <div class="it-header-top-contact d-flex align-items-center">
                                        <span>
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.74999 0.749245C9.74999 0.550332 9.82901 0.359567 9.96966 0.218915C10.1103 0.0782622 10.3011 -0.000755399 10.5 -0.000755399C12.4884 0.0014283 14.3948 0.792306 15.8009 2.19836C17.2069 3.60441 17.9978 5.51079 18 7.49924C18 7.69816 17.921 7.88892 17.7803 8.02958C17.6397 8.17023 17.4489 8.24924 17.25 8.24924C17.0511 8.24924 16.8603 8.17023 16.7197 8.02958C16.579 7.88892 16.5 7.69816 16.5 7.49924C16.4982 5.90849 15.8655 4.38341 14.7407 3.25858C13.6158 2.13375 12.0907 1.50103 10.5 1.49924C10.3011 1.49924 10.1103 1.42023 9.96966 1.27957C9.82901 1.13892 9.74999 0.948157 9.74999 0.749245ZM10.5 4.49924C11.2956 4.49924 12.0587 4.81531 12.6213 5.37792C13.1839 5.94053 13.5 6.7036 13.5 7.49924C13.5 7.69816 13.579 7.88892 13.7197 8.02958C13.8603 8.17023 14.0511 8.24924 14.25 8.24924C14.4489 8.24924 14.6397 8.17023 14.7803 8.02958C14.921 7.88892 15 7.69816 15 7.49924C14.9988 6.30614 14.5243 5.16224 13.6807 4.31858C12.837 3.47492 11.6931 3.00044 10.5 2.99924C10.3011 2.99924 10.1103 3.07826 9.96966 3.21891C9.82901 3.35957 9.74999 3.55033 9.74999 3.74924C9.74999 3.94816 9.82901 4.13892 9.96966 4.27957C10.1103 4.42023 10.3011 4.49924 10.5 4.49924ZM17.3197 12.5535C17.7544 12.9893 17.9984 13.5797 17.9984 14.1952C17.9984 14.8108 17.7544 15.4012 17.3197 15.837L16.6372 16.6237C10.4947 22.5045 -4.45276 7.56074 1.33724 1.39874L2.19974 0.648745C2.63607 0.226253 3.22119 -0.00746859 3.82852 -0.00185427C4.43585 0.00376005 5.01655 0.248258 5.44499 0.678745C5.46824 0.701995 6.85799 2.50724 6.85799 2.50724C7.27036 2.94047 7.49992 3.51594 7.49894 4.11405C7.49796 4.71215 7.26653 5.28687 6.85274 5.71874L5.98424 6.81074C6.46488 7.97858 7.17154 9.03993 8.06362 9.93382C8.9557 10.8277 10.0156 11.5365 11.1825 12.0195L12.2812 11.1457C12.7132 10.7323 13.2878 10.5011 13.8857 10.5003C14.4836 10.4994 15.0589 10.729 15.492 11.1412C15.492 11.1412 17.2965 12.5302 17.3197 12.5535ZM16.2877 13.644C16.2877 13.644 14.493 12.2632 14.4697 12.24C14.3152 12.0868 14.1065 12.0008 13.8889 12.0008C13.6713 12.0008 13.4625 12.0868 13.308 12.24C13.2877 12.261 11.775 13.4662 11.775 13.4662C11.673 13.5474 11.5517 13.6006 11.423 13.6206C11.2942 13.6406 11.1625 13.6267 11.0407 13.5802C9.52908 13.0174 8.15604 12.1363 7.01462 10.9966C5.87319 9.85681 4.99004 8.48507 4.42499 6.97425C4.37489 6.85084 4.35855 6.71631 4.37767 6.5845C4.39678 6.45269 4.45065 6.32834 4.53374 6.22425C4.53374 6.22425 5.73899 4.71074 5.75924 4.69124C5.91244 4.53673 5.9984 4.32796 5.9984 4.11037C5.9984 3.89278 5.91244 3.68401 5.75924 3.52949C5.73599 3.50699 4.35524 1.71074 4.35524 1.71074C4.19841 1.57012 3.99374 1.49482 3.78317 1.50025C3.57261 1.50569 3.3721 1.59147 3.22274 1.73999L2.36024 2.48999C-1.87126 7.57799 11.082 19.8127 15.5407 15.5992L16.224 14.8117C16.3841 14.6634 16.4803 14.4587 16.4922 14.2408C16.5041 14.0229 16.4308 13.8088 16.2877 13.644Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </span>
                                        <a class="border-line-black" href="tel:7055690123">(705) 569-0123</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="it-header-top-contact d-flex align-items-center">
                                        <span>
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.25 0.75H3.75C2.7558 0.751191 1.80267 1.14666 1.09966 1.84966C0.396661 2.55267 0.00119089 3.5058 0 4.5L0 13.5C0.00119089 14.4942 0.396661 15.4473 1.09966 16.1503C1.80267 16.8533 2.7558 17.2488 3.75 17.25H14.25C15.2442 17.2488 16.1973 16.8533 16.9003 16.1503C17.6033 15.4473 17.9988 14.4942 18 13.5V4.5C17.9988 3.5058 17.6033 2.55267 16.9003 1.84966C16.1973 1.14666 15.2442 0.751191 14.25 0.75ZM3.75 2.25H14.25C14.6991 2.25088 15.1376 2.38614 15.5092 2.63835C15.8808 2.89057 16.1684 3.24821 16.335 3.66525L10.5915 9.4095C10.1688 9.83049 9.59656 10.0669 9 10.0669C8.40344 10.0669 7.83118 9.83049 7.4085 9.4095L1.665 3.66525C1.83161 3.24821 2.11921 2.89057 2.49079 2.63835C2.86236 2.38614 3.30091 2.25088 3.75 2.25ZM14.25 15.75H3.75C3.15326 15.75 2.58097 15.5129 2.15901 15.091C1.73705 14.669 1.5 14.0967 1.5 13.5V5.625L6.348 10.47C7.05197 11.1722 8.00569 11.5665 9 11.5665C9.99431 11.5665 10.948 11.1722 11.652 10.47L16.5 5.625V13.5C16.5 14.0967 16.2629 14.669 15.841 15.091C15.419 15.5129 14.8467 15.75 14.25 15.75Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </span>
                                        <a class="border-line-black" href="mailto:info@intogmail.com">info@
                                            intogmail.com</a>
                                    </div>
                                </li>
                                <li class="d-none d-lg-inline-block">
                                    <div class="it-header-top-contact d-flex align-items-center">
                                        <span>
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_2294_12283)">
                                                    <path
                                                        d="M9 4.5C8.40666 4.5 7.82664 4.67595 7.33329 5.00559C6.83994 5.33524 6.45543 5.80377 6.22836 6.35195C6.0013 6.90013 5.94189 7.50333 6.05765 8.08527C6.1734 8.66721 6.45912 9.20176 6.87868 9.62132C7.29824 10.0409 7.83279 10.3266 8.41473 10.4424C8.99667 10.5581 9.59987 10.4987 10.1481 10.2716C10.6962 10.0446 11.1648 9.66006 11.4944 9.16671C11.8241 8.67336 12 8.09334 12 7.5C12 6.70435 11.6839 5.94129 11.1213 5.37868C10.5587 4.81607 9.79565 4.5 9 4.5ZM9 9C8.70333 9 8.41332 8.91203 8.16665 8.7472C7.91997 8.58238 7.72771 8.34811 7.61418 8.07403C7.50065 7.79994 7.47095 7.49834 7.52882 7.20736C7.5867 6.91639 7.72956 6.64912 7.93934 6.43934C8.14912 6.22956 8.41639 6.0867 8.70737 6.02882C8.99834 5.97094 9.29994 6.00065 9.57403 6.11418C9.84812 6.22771 10.0824 6.41997 10.2472 6.66665C10.412 6.91332 10.5 7.20333 10.5 7.5C10.5 7.89783 10.342 8.27936 10.0607 8.56066C9.77936 8.84196 9.39783 9 9 9Z"
                                                        fill="currentcolor" />
                                                    <path
                                                        d="M9.00024 17.9995C8.36869 18.0028 7.74557 17.8547 7.18303 17.5676C6.6205 17.2805 6.13493 16.8628 5.76698 16.3495C2.90873 12.4068 1.45898 9.4428 1.45898 7.5393C1.45898 5.53923 2.25351 3.62109 3.66777 2.20683C5.08202 0.792569 7.00017 -0.00195312 9.00024 -0.00195312C11.0003 -0.00195312 12.9184 0.792569 14.3327 2.20683C15.747 3.62109 16.5415 5.53923 16.5415 7.5393C16.5415 9.4428 15.0917 12.4068 12.2335 16.3495C11.8655 16.8628 11.38 17.2805 10.8174 17.5676C10.2549 17.8547 9.63178 18.0028 9.00024 17.9995ZM9.00024 1.6353C7.43455 1.63708 5.9335 2.25984 4.82639 3.36695C3.71928 4.47406 3.09652 5.97511 3.09473 7.5408C3.09473 9.0483 4.51448 11.836 7.09148 15.3903C7.31026 15.6916 7.59726 15.9369 7.92902 16.106C8.26078 16.2751 8.62786 16.3633 9.00024 16.3633C9.37261 16.3633 9.73969 16.2751 10.0715 16.106C10.4032 15.9369 10.6902 15.6916 10.909 15.3903C13.486 11.836 14.9057 9.0483 14.9057 7.5408C14.9039 5.97511 14.2812 4.47406 13.1741 3.36695C12.067 2.25984 10.5659 1.63708 9.00024 1.6353Z"
                                                        fill="currentcolor" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_2294_12283">
                                                        <rect width="18" height="18" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                        <a class="border-line-black" target="_blank"
                                            href="https://www.google.com/maps/@23.843848,90.3081992,17.5z?entry=ttu&g_ep=EgoyMDI1MDEwMS4wIKXMDSoASAFQAw%3D%3D">Tetrick
                                            Road Fort Myers, NY</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-top-area-end -->

        <!-- header-area-start -->
        <div id="header-sticky" class="it-header-area it-header-ptb it-header-style black-bg">
            <div class="container container-1650">
                <div class="p-relative">
                    <div class="row align-items-center">
                        <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-6">
                            <div class="it-header-logo">
                                <a href="index.html"><img src="assets/img/logo/logo-white.png" alt=""></a>
                            </div>
                            <div class="it-header-logo-3 d-none">
                                <a href="index.html"><img src="assets/img/logo/logo-black.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xxl-7 col-xl-7 d-none d-xl-block">
                            <div class="it-header-menu it-header-dropdown">
                                <nav class="it-menu-content">
                                    <ul>
                                        <li class="has-dropdown p-static">
                                            <a href="index.html">Home</a>
                                            <div class="it-submenu submenu has-home-img">
                                                <div class="it-homemenu-wrapper">
                                                    <div
                                                        class="row gx-6 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-5">
                                                        <div class="col home-img">
                                                            <div class="home-img-thumb home-img-overly mb-20">
                                                                <img src="assets/img/menu/home-1.jpg" alt>
                                                                <div class="home-img-btn">
                                                                    <a class="it-btn-sm" href="index.html">
                                                                        <span>
                                                                            <span class="text-1">Multi Page</span>
                                                                            <span class="text-2">Multi Page</span>
                                                                        </span>
                                                                    </a>
                                                                    <a class="it-btn-sm" href="index-one-page.html">
                                                                        <span>
                                                                            <span class="text-1">One Page</span>
                                                                            <span class="text-2">One Page</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="home-img-content text-center">
                                                                <h4 class="home-img-title">
                                                                    <a href="index.html">Oil Energy</a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="col home-img">
                                                            <div class="home-img-thumb home-img-overly mb-20">
                                                                <img src="assets/img/menu/home-2.jpg" alt>
                                                                <div class="home-img-btn">
                                                                    <a class="it-btn-sm" href="index-2.html">
                                                                        <span>
                                                                            <span class="text-1">Multi Page</span>
                                                                            <span class="text-2">Multi Page</span>
                                                                        </span>
                                                                    </a>
                                                                    <a class="it-btn-sm" href="index-2-one-page.html">
                                                                        <span>
                                                                            <span class="text-1">One Page</span>
                                                                            <span class="text-2">One Page</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="home-img-content text-center">
                                                                <h4 class="home-img-title">
                                                                    <a href="index-2.html">Solar Service</a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="col home-img">
                                                            <div class="home-img-thumb home-img-overly mb-20">
                                                                <img src="assets/img/menu/home-3.jpg" alt>
                                                                <div class="home-img-btn">
                                                                    <a class="it-btn-sm" href="index-3.html">
                                                                        <span>
                                                                            <span class="text-1">Multi Page</span>
                                                                            <span class="text-2">Multi Page</span>
                                                                        </span>
                                                                    </a>
                                                                    <a class="it-btn-sm" href="index-3-one-page.html">
                                                                        <span>
                                                                            <span class="text-1">One Page</span>
                                                                            <span class="text-2">One Page</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="home-img-content text-center">
                                                                <h4 class="home-img-title">
                                                                    <a href="index-3.html">Solar Instalment</a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="col home-img">
                                                            <div class="home-img-thumb home-img-overly mb-20">
                                                                <img src="assets/img/menu/home-4.jpg" alt>
                                                                <div class="home-img-btn">
                                                                    <a class="it-btn-sm" href="index-4.html">
                                                                        <span>
                                                                            <span class="text-1">Multi Page</span>
                                                                            <span class="text-2">Multi Page</span>
                                                                        </span>
                                                                    </a>
                                                                    <a class="it-btn-sm" href="index-4-one-page.html">
                                                                        <span>
                                                                            <span class="text-1">One Page</span>
                                                                            <span class="text-2">One Page</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="home-img-content text-center">
                                                                <h4 class="home-img-title">
                                                                    <a href="index-4.html">Hydro Energy</a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="col home-img">
                                                            <div class="home-img-thumb home-img-overly mb-20">
                                                                <img src="assets/img/menu/home-5.jpg" alt>
                                                                <div class="home-img-btn">
                                                                    <a class="it-btn-sm" href="index-5.html">
                                                                        <span>
                                                                            <span class="text-1">Multi Page</span>
                                                                            <span class="text-2">Multi Page</span>
                                                                        </span>
                                                                    </a>
                                                                    <a class="it-btn-sm" href="index-5-one-page.html">
                                                                        <span>
                                                                            <span class="text-1">One Page</span>
                                                                            <span class="text-2">One Page</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="home-img-content text-center">
                                                                <h4 class="home-img-title">
                                                                    <a href="index-5.html">Wind Energy</a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="about-us-v1.html">About Us</a>
                                            <ul class="it-submenu submenu">
                                                <li><a href="about-us-v1.html">About Us V1</a></li>
                                                <li><a href="about-us-v2.html">About Us V2</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="#">Pages</a>
                                            <ul class="it-submenu submenu">
                                                <li><a href="project.html">Project</a></li>
                                                <li><a href="project-details.html">Project Details</a></li>
                                                <li><a href="team.html">Team</a></li>
                                                <li><a href="team-details.html">Team Details</a></li>
                                                <li><a href="testimonial.html">Testimonial</a></li>
                                                <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                                <li><a href="shop-details.html">Shop Details</a></li>
                                                <li><a href="faq.html">Faq</a></li>
                                                <li><a href="career.html">Career</a></li>
                                                <li><a href="sign-in.html">Sign In</a></li>
                                                <li><a href="sign-up.html">Sign Up</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="cost-calculation.html">Cost Calculation</a></li>
                                                <li><a href="404.html">Error</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="service-v1.html">Services</a>
                                            <ul class="it-submenu submenu">
                                                <li><a href="service-v1.html">Service 01</a></li>
                                                <li><a href="service-v2.html">Service 02</a></li>
                                                <li><a href="service-details.html">Service details</a></li>
                                                <li><a href="service-details-no-sidebar.html">Service No Sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="blog.html">Blog</a>
                                            <ul class="it-submenu submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                                <li><a href="blog-details-no-sidebar.html">Blog No Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-6">
                            <div class="it-header-right-action d-flex justify-content-end align-items-center">
                                <div class="it-header-user d-none d-xxl-block">
                                    <a href="sign-in.html">
                                        <svg width="16" height="20" viewBox="0 0 16 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8 10C10.7614 10 13 7.76142 13 5C13 2.23858 10.7614 0 8 0C5.23858 0 3 2.23858 3 5C3 7.76142 5.23858 10 8 10Z"
                                                fill="currentcolor" />
                                            <path
                                                d="M8 11.666C3.85977 11.6706 0.504609 15.0258 0.5 19.166C0.5 19.6262 0.873086 19.9993 1.33332 19.9993H14.6666C15.1269 19.9993 15.5 19.6262 15.5 19.166C15.4954 15.0258 12.1402 11.6706 8 11.666Z"
                                                fill="currentcolor" />
                                        </svg>
                                    </a>
                                </div>
                                <a href="contact.html" class="it-btn-theme d-none d-md-flex">
                                    <span>
                                        <span class="text-1">Get a Free Call</span>
                                        <span class="text-2">Get a Free Call</span>
                                    </span>
                                </a>
                                <div class="it-header-bar d-xl-none">
                                    <button class="it-menu-bar">
                                        <span>
                                            <svg width="24" height="20" viewBox="0 0 24 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M10 18.3333C10 17.4128 10.7462 16.6667 11.6667 16.6667H21.6667C22.5872 16.6667 23.3333 17.4128 23.3333 18.3333C23.3333 19.2538 22.5872 20 21.6667 20H11.6667C10.7462 20 10 19.2538 10 18.3333ZM0 1.66667C0 0.746183 0.746183 0 1.66667 0H21.6667C22.5872 0 23.3333 0.746183 23.3333 1.66667C23.3333 2.58713 22.5872 3.33333 21.6667 3.33333H1.66667C0.746183 3.33333 0 2.58713 0 1.66667ZM0 10C0 9.07953 0.746183 8.33333 1.66667 8.33333H21.6667C22.5872 8.33333 23.3333 9.07953 23.3333 10C23.3333 10.9205 22.5872 11.6667 21.6667 11.6667H1.66667C0.746183 11.6667 0 10.9205 0 10Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-area-end -->

    </header>

    <main>

      {{-- <x-home.slider />

      <x-home.about-us />

      <x-home.service-area />

      <x-home.step-area />

      <x-home.project-area /> --}}


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
