<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/swiper.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="css/custom.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
    ============================================= -->
    <title>Indoamericana | Escuela de formación</title>

</head>

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Top Bar
        ============================================= -->
        <div id="top-bar" class="dark">
            <div class="container clearfix">

                <div class="row justify-content-between">

                    <div class="col-12 col-md-auto">

                        <!-- Top Social
                        ============================================= -->
                        <ul id="top-social">
                            <li><a href="https://www.facebook.com/IndoamericanaCol" class="si-facebook"><span
                                        class="ts-icon"><i class="icon-facebook"></i></span><span
                                        class="ts-text">Facebook</span></a>
                            </li>
                            <li><a href="https://twitter.com/indoamericana" class="si-twitter"><span class="ts-icon"><i
                                            class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a>
                            </li>
                            {{-- <li class="d-none d-sm-flex"><a href="#" class="si-dribbble"><span
                                        class="ts-icon"><i class="icon-dribbble"></i></span><span
                                        class="ts-text">Dribbble</span></a>
                            </li> --}}
                            {{-- <li><a href="#" class="si-github"><span class="ts-icon"><i
                                            class="icon-github-circled"></i></span><span
                                        class="ts-text">Github</span></a>
                            </li> --}}
                            {{-- <li class="d-none d-sm-flex"><a href="#" class="si-pinterest"><span
                                        class="ts-icon"><i class="icon-pinterest"></i></span><span
                                        class="ts-text">Pinterest</span></a>
                            </li> --}}
                            <li><a href="https://www.instagram.com/indoamericana/" class="si-instagram"><span
                                        class="ts-icon"><i class="icon-instagram2"></i></span><span
                                        class="ts-text">Instagram</span></a>
                            </li>
                            <li><a href="tel:6014324350" class="si-call"><span class="ts-icon"><i
                                            class="icon-call"></i></span><span class="ts-text">(57) (601)
                                        4324350</span></a>
                            </li>
                            <li><a href="mailto:admisiones@indoamericana.edu.co" class="si-email3"><span
                                        class="ts-icon"><i class="icon-email3"></i></span><span
                                        class="ts-text">admisiones@indoamericana.edu.co</span></a></li>
                        </ul><!-- #top-social end -->

                    </div>
                    <div class="col-12 col-md-auto">

                        <!-- Top Links
                        ============================================= -->
                        <div class="top-links on-click">
                            <ul class="top-links-container">
                                {{-- <li class="top-links-item"><a href="index.html">Home</a>
                                    <ul class="top-links-sub-menu">
                                        <li class="top-links-item"><a href="about.html">About</a></li>
                                        <li class="top-links-item"><a href="faqs.html">FAQs</a></li>
                                        <li class="top-links-item"><a href="contact.html">Contact</a></li>
                                        <li class="top-links-item"><a href="sitemap.html">Sitemap</a></li>
                                    </ul>
                                </li> --}}
                                <li class="top-links-item"><a href="faqs.html">PQR's</a></li>
                                <li class="top-links-item"><a href="contact.html">Contacto</a></li>
                                @if (Route::has('login'))
                                    @auth
                                        <a href="{{ url('/dashboard') }}"
                                            class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                    @else
                                        <li class="top-links-item"><a href="login-register.html">Login</a>
                                            <div class="top-links-section">

                                                <x-jet-validation-errors class="mb-4" />

                                                @if (session('status'))
                                                    <div class="mb-4 font-medium text-sm text-green-600">
                                                        {{ session('status') }}
                                                    </div>
                                                @endif

                                                <form method="POST" action="{{ route('login') }}" id="top-login"
                                                    autocomplete="off">
                                                    @csrf

                                                    <div class="form-group">
                                                        <x-jet-label for="email" value="{{ __('Email') }}" />
                                                        <x-jet-input id="email" class="form-control" type="email"
                                                            placeholder="Email address" name="email" :value="old('email')"
                                                            required autofocus />
                                                    </div>

                                                    <div class="form-group">
                                                        <x-jet-label for="password" value="{{ __('Password') }}" />
                                                        <x-jet-input id="password" class="form-control" type="password"
                                                            placeholder="Password" name="password" required
                                                            autocomplete="current-password" />
                                                    </div>

                                                    <div class="block mt-4 ml-2">
                                                        <label for="remember_me" class="flex items-center">
                                                            <x-jet-checkbox id="remember_me" name="remember" />
                                                            <span
                                                                class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                                        </label>
                                                    </div>
                                                    <x-jet-button class="btn btn-primary w-100 mt-3">
                                                        {{ __('Log in') }}
                                                    </x-jet-button>
                                                    @if (Route::has('password.request'))
                                                        <div class="flex items-center justify-end mt-3">
                                                            <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                                                href="{{ route('password.request') }}">
                                                                {{ __('Forgot your password?') }}
                                                            </a>
                                                        </div>
                                                    @endif
                                                </form>
                                            </div>
                                        </li>
                                    @endauth
                                @endif

                            </ul>
                        </div><!-- .top-links end -->

                    </div>



                </div>

            </div>
        </div><!-- #top-bar end -->

        <!-- Header
        ============================================= -->
        <header id="header" class="header-size-sm dark">
            <div class="container py-3">
                <div class="header-row flex-column flex-lg-row justify-content-center">

                    <!-- Logo
                    ============================================= -->
                    <div id="logo" class="w-full">
                        <a href="/" class="standard-logo"
                            data-dark-logo="images/inicio/slider/trainer-y-indo-1.png"><img
                                src="images/inicio/slider/trainer-y-indo-1.png" alt="Indo Logo"></a>
                        <a href="/" class="retina-logo"
                            data-dark-logo="images/inicio/slider/trainer-y-indo-1.png"><img
                                src="images/inicio/slider/trainer-y-indo-1.png" alt="Indo Logo"></a>
                    </div><!-- #logo end -->

                    {{-- <div class="header-misc mb-4 mb-lg-0 order-lg-last">

                        <ul class="header-extras me-0 me-sm-4">
                            <li>
                                <i class="i-plain icon-email3 m-0"></i>
                                <div class="he-text">
                                    Drop an Email
                                    <span>info@canvas.com</span>
                                </div>
                            </li>
                            <li>
                                <i class="i-plain icon-call m-0"></i>
                                <div class="he-text">
                                    Get in Touch
                                    <span>1800-1144-551</span>
                                </div>
                            </li>
                        </ul>

                        <!-- Top Cart
                        ============================================= -->
                        <div id="top-cart" class="header-misc-icon d-none d-sm-block">
                            <a href="#" id="top-cart-trigger"><i class="icon-line-bag"></i><span
                                    class="top-cart-number">5</span></a>
                            <div class="top-cart-content">
                                <div class="top-cart-title">
                                    <h4>Shopping Cart</h4>
                                </div>
                                <div class="top-cart-items">
                                    <div class="top-cart-item">
                                        <div class="top-cart-item-image">
                                            <a href="#"><img src="images/shop/small/1.jpg"
                                                    alt="Blue Round-Neck Tshirt" /></a>
                                        </div>
                                        <div class="top-cart-item-desc">
                                            <div class="top-cart-item-desc-title">
                                                <a href="#">Blue Round-Neck Tshirt with a Button</a>
                                                <span class="top-cart-item-price d-block">$19.99</span>
                                            </div>
                                            <div class="top-cart-item-quantity">x 2</div>
                                        </div>
                                    </div>
                                    <div class="top-cart-item">
                                        <div class="top-cart-item-image">
                                            <a href="#"><img src="images/shop/small/6.jpg"
                                                    alt="Light Blue Denim Dress" /></a>
                                        </div>
                                        <div class="top-cart-item-desc">
                                            <div class="top-cart-item-desc-title">
                                                <a href="#">Light Blue Denim Dress</a>
                                                <span class="top-cart-item-price d-block">$24.99</span>
                                            </div>
                                            <div class="top-cart-item-quantity">x 3</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="top-cart-action">
                                    <span class="top-checkout-price">$114.95</span>
                                    <a href="#" class="button button-3d button-small m-0">View Cart</a>
                                </div>
                            </div>
                        </div><!-- #top-cart end -->

                    </div> --}}

                </div>
            </div>

            <div id="header-wrap" class="border-top border-f5">
                <div class="container">
                    <div class="header-row justify-content-between flex-row-reverse flex-lg-row">

                        <div class="header-misc">

                            <!-- Top Search
                            ============================================= -->
                            <div id="top-search" class="header-misc-icon">
                                <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i
                                        class="icon-line-cross"></i></a>
                            </div><!-- #top-search end -->

                        </div>

                        <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100">
                                <path
                                    d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                                </path>
                                <path d="m 30,50 h 40"></path>
                                <path
                                    d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                                </path>
                            </svg>
                        </div>

                        <!-- Primary Navigation
                        ============================================= -->
                        <nav class="primary-menu">

                            <ul class="menu-container">
                                <li class="menu-item">
                                    <a class="menu-link" href="/">
                                        <div>Inicio</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="#">
                                        <div>Programas Académicos</div>
                                    </a>
                                    <ul class="sub-menu-container">
                                        <li class="menu-item">
                                            <a class="menu-link" href="#">
                                                <div><i class="icon-plane"></i>Aviación</div>
                                            </a>
                                            <ul class="sub-menu-container">
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div><i class="icon-line-book"></i>Piloto Comercial de Avión
                                                            (PCA)</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div><i class="icon-line-book"></i>Auxiliar de Servicio a Bordo
                                                            (ASA-TCP)</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div><i class="icon-line-book"></i>Despachador de Vuelo (DPA)
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div><i class="icon-line-book"></i>Técnico en Línea de Aviones
                                                            (TLA)</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div><i class="icon-line-book"></i>Técnico en Línea de
                                                            Helicópteros (TLH)</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="#">
                                                <div><i class="icon-umbrella-beach"></i>Turismo</div>
                                            </a>
                                            <ul class="sub-menu-container">
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div><i class="icon-line-book"></i>Técnico en Turismo y
                                                            Agencias de Viajes (ATA)</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="#">
                                                <div><i class="icon-line-truck"></i>Transporte Terrestre</div>
                                            </a>
                                            <ul class="sub-menu-container">
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div><i class="icon-line-book"></i>Técnico en Conductor de
                                                            Transporte de Pasajeros y Carga</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item mega-menu">
                                    <a class="menu-link" href="#">
                                        <div>C.E.I</div>
                                    </a>
                                    <div class="mega-menu-content mega-menu-style-2">
                                        <div class="container">
                                            <div class="row">
                                                <ul class="sub-menu-container mega-menu-column col-lg-3">
                                                    <li class="menu-item mega-menu-title">
                                                        <a class="menu-link" href="#">
                                                            <div>Quiénes somos</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="about.html">
                                                                    <div>Institución</div>
                                                                </a>
                                                                <ul class="sub-menu-container mega-menu-dropdown">
                                                                    <li class="menu-item">
                                                                        <a class="menu-link" href="about.html">
                                                                            <div>Nosotros</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link" href="about-2.html">
                                                                            <div>Certificaciones</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link" href="about-me.html">
                                                                            <div>Conderaciones</div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="gdpr.html">
                                                                    <div>Recursos Locativos</div>
                                                                </a>
                                                                <ul class="sub-menu-container mega-menu-dropdown">
                                                                    <li class="menu-item">
                                                                        <a class="menu-link" href="gdpr.html">
                                                                            <div>Sede Principal</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link" href="gdpr-small.html">
                                                                            <div>Sede Hangar</div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="gdpr.html">
                                                                    <div>Normativa</div>
                                                                </a>
                                                                <ul class="sub-menu-container mega-menu-dropdown">
                                                                    <li class="menu-item">
                                                                        <a class="menu-link" href="gdpr.html">
                                                                            <div>Manual General Directiva de Institución</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link" href="gdpr-small.html">
                                                                            <div>Política de tratamiento de datos personales</div>
                                                                        </a>
                                                                    </li>
                                                                    
                                                                    <li class="menu-item">
                                                                        <a class="menu-link" href="gdpr-small.html">
                                                                            <div>Brochure Institucional</div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col-lg-3">
                                                    <li class="menu-item mega-menu-title">
                                                        <a class="menu-link" href="#">
                                                            <div>Utility &amp; Specials</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="services.html">
                                                                    <div><i class="icon-star-of-life"></i>Services
                                                                        Pages
                                                                    </div>
                                                                </a>
                                                                <ul class="sub-menu-container mega-menu-dropdown">
                                                                    <li class="menu-item">
                                                                        <a class="menu-link" href="services.html">
                                                                            <div>Layout 1</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link" href="services-2.html">
                                                                            <div>Layout 2</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link" href="services-3.html">
                                                                            <div>Layout 3</div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <div><i class="icon-calendar3"></i>Events</div>
                                                                </a>
                                                                <ul class="sub-menu-container mega-menu-dropdown">
                                                                    <li class="menu-item">
                                                                        <a class="menu-link" href="events-list.html">
                                                                            <div>Events List</div>
                                                                        </a>
                                                                        <ul
                                                                            class="sub-menu-container mega-menu-dropdown">
                                                                            <li class="menu-item">
                                                                                <a class="menu-link"
                                                                                    href="events-list.html">
                                                                                    <div>Right Sidebar</div>
                                                                                </a>
                                                                            </li>
                                                                            <li class="menu-item">
                                                                                <a class="menu-link"
                                                                                    href="events-list-left-sidebar.html">
                                                                                    <div>Left Sidebar</div>
                                                                                </a>
                                                                            </li>
                                                                            <li class="menu-item">
                                                                                <a class="menu-link"
                                                                                    href="events-list-both-sidebar.html">
                                                                                    <div>Both Sidebar</div>
                                                                                </a>
                                                                            </li>
                                                                            <li class="menu-item">
                                                                                <a class="menu-link"
                                                                                    href="events-list-fullwidth.html">
                                                                                    <div>Full Width</div>
                                                                                </a>
                                                                            </li>
                                                                            <li class="menu-item">
                                                                                <a class="menu-link"
                                                                                    href="events-list-parallax.html">
                                                                                    <div>Parallax List</div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link" href="event-single.html">
                                                                            <div>Single Event</div>
                                                                        </a>
                                                                        <ul
                                                                            class="sub-menu-container mega-menu-dropdown">
                                                                            <li class="menu-item">
                                                                                <a class="menu-link"
                                                                                    href="event-single-right-sidebar.html">
                                                                                    <div>Right Sidebar</div>
                                                                                </a>
                                                                            </li>
                                                                            <li class="menu-item">
                                                                                <a class="menu-link"
                                                                                    href="event-single-left-sidebar.html">
                                                                                    <div>Left Sidebar</div>
                                                                                </a>
                                                                            </li>
                                                                            <li class="menu-item">
                                                                                <a class="menu-link"
                                                                                    href="event-single-both-sidebar.html">
                                                                                    <div>Both Sidebar</div>
                                                                                </a>
                                                                            </li>
                                                                            <li class="menu-item">
                                                                                <a class="menu-link"
                                                                                    href="event-single.html">
                                                                                    <div>Full Width</div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link"
                                                                            href="event-single-full-width-image.html">
                                                                            <div>Single Event - Full</div>
                                                                        </a>
                                                                        <ul
                                                                            class="sub-menu-container mega-menu-dropdown">
                                                                            <li class="menu-item">
                                                                                <a class="menu-link"
                                                                                    href="event-single-full-width-image.html">
                                                                                    <div>Parallax Image</div>
                                                                                </a>
                                                                            </li>
                                                                            <li class="menu-item">
                                                                                <a class="menu-link"
                                                                                    href="event-single-full-width-map.html">
                                                                                    <div>Google Map</div>
                                                                                </a>
                                                                            </li>
                                                                            <li class="menu-item">
                                                                                <a class="menu-link"
                                                                                    href="event-single-full-width-slider.html">
                                                                                    <div>Slider Gallery</div>
                                                                                </a>
                                                                            </li>
                                                                            <li class="menu-item">
                                                                                <a class="menu-link"
                                                                                    href="event-single-full-width-video.html">
                                                                                    <div>HTML5 Video</div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link"
                                                                            href="events-calendar.html">
                                                                            <div>Full Width Calendar</div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="contact.html">
                                                                    <div><i class="icon-envelope"></i>Contact Pages
                                                                    </div>
                                                                </a>
                                                                <ul class="sub-menu-container mega-menu-dropdown">
                                                                    <li class="menu-item">
                                                                        <a class="menu-link" href="contact.html">Main
                                                                            Layout</a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link"
                                                                            href="contact-2.html">Grid
                                                                            Layout</a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link"
                                                                            href="contact-3.html">Right
                                                                            Sidebar</a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link"
                                                                            href="contact-4.html">Both
                                                                            Sidebars</a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link"
                                                                            href="contact-5.html">Modal
                                                                            Form</a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link"
                                                                            href="contact-6.html">Form
                                                                            Overlay</a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link"
                                                                            href="contact-7.html">Form
                                                                            Overlay Mini</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="faqs.html">
                                                                    <div><i class="icon-question-circle"></i>FAQs Pages
                                                                    </div>
                                                                </a>
                                                                <ul class="sub-menu-container mega-menu-dropdown">
                                                                    <li class="menu-item">
                                                                        <a class="menu-link" href="faqs.html">
                                                                            <div>Layout 1</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link" href="faqs-2.html">
                                                                            <div>Layout 2</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link" href="faqs-3.html">
                                                                            <div>Layout 3</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link" href="faqs-4.html">
                                                                            <div>Layout 4</div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col-lg-3">
                                                    <li class="menu-item mega-menu-title">
                                                        <a class="menu-link" href="#">
                                                            <div>Layouts &amp; PageNavs</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="full-width.html">
                                                                    <div>Full Width</div>
                                                                </a>
                                                                <ul class="sub-menu-container mega-menu-dropdown">
                                                                    <li class="menu-item">
                                                                        <a class="menu-link" href="full-width.html">
                                                                            <div>Default Width</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link"
                                                                            href="full-width-wide.html">
                                                                            <div>Wide Width</div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <div>Sidebars</div>
                                                                </a>
                                                                <ul class="sub-menu-container mega-menu-dropdown">
                                                                    <li class="menu-item">
                                                                        <a class="menu-link"
                                                                            href="right-sidebar.html">
                                                                            <div>Right Sidebar</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link" href="left-sidebar.html">
                                                                            <div>Left Sidebar</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link" href="both-sidebar.html">
                                                                            <div>Both Sidebar</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link"
                                                                            href="both-right-sidebar.html">
                                                                            <div>Both Right Sidebar</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link"
                                                                            href="both-left-sidebar.html">
                                                                            <div>Both Left Sidebar</div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="page-submenu.html">
                                                                    <div>Page Submenu</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="side-navigation.html">
                                                                    <div>Side Navigation</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col-lg-3">
                                                    <li class="menu-item mega-menu-title">
                                                        <a class="menu-link" href="#">
                                                            <div>Miscellaneous</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="login-register.html">
                                                                    <div>Login/Register</div>
                                                                </a>
                                                                <ul class="sub-menu-container mega-menu-dropdown">
                                                                    <li class="menu-item">
                                                                        <a class="menu-link"
                                                                            href="login-register.html">
                                                                            <div>Default Layout</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link"
                                                                            href="login-register-2.html">
                                                                            <div>Tabbed Login</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link"
                                                                            href="login-register-3.html">
                                                                            <div>Login Accordion</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link" href="login-1.html">
                                                                            <div>Dark BG Login</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link" href="login-2.html">
                                                                            <div>Image BG Login</div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="coming-soon.html">
                                                                    <div>Coming Soon</div>
                                                                </a>
                                                                <ul class="sub-menu-container mega-menu-dropdown">
                                                                    <li class="menu-item">
                                                                        <a class="menu-link" href="coming-soon.html">
                                                                            <div>Default Layout</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link"
                                                                            href="coming-soon-2.html">
                                                                            <div>Parallax Image</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link"
                                                                            href="coming-soon-3.html">
                                                                            <div>HTML5 Video</div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="404.html">
                                                                    <div>404 Pages</div>
                                                                </a>
                                                                <ul class="sub-menu-container mega-menu-dropdown">
                                                                    <li class="menu-item">
                                                                        <a class="menu-link" href="404.html">
                                                                            <div>Default Layout</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link" href="404-2.html">
                                                                            <div>Parallax Image</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link" href="404-3.html">
                                                                            <div>HTML5 Video</div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <div>Extras</div>
                                                                </a>
                                                                <ul class="sub-menu-container mega-menu-dropdown">
                                                                    <li class="menu-item">
                                                                        <a class="menu-link" href="blank-page.html">
                                                                            <div>Blank Page</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link" href="maintenance.html">
                                                                            <div>Maintenance Page</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a class="menu-link" href="sitemap.html">
                                                                            <div>Sitemap</div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item mega-menu">
                                    <a class="menu-link" href="#">
                                        <div>Admisiones</div>
                                    </a>
                                    <div class="mega-menu-content mega-menu-style-2">
                                        <div class="container">
                                            <div class="row">
                                                <ul class="sub-menu-container mega-menu-column col">
                                                    <li class="menu-item mega-menu-title">
                                                        <a class="menu-link" href="#">
                                                            <div>Grids</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="portfolio-1.html">
                                                                    <div>1 Column</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="portfolio-2.html">
                                                                    <div>2 Columns</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="portfolio-3.html">
                                                                    <div>3 Columns</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="portfolio.html">
                                                                    <div>4 Columns</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="portfolio-5.html">
                                                                    <div>5 Columns</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="portfolio-6.html">
                                                                    <div>6 Columns</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col">
                                                    <li class="menu-item mega-menu-title">
                                                        <a class="menu-link" href="#">
                                                            <div>Masonry</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="portfolio-mixed-masonry.html">
                                                                    <div>Mixed Columns</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="portfolio-2-masonry.html">
                                                                    <div>2 Columns</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="portfolio-3-masonry.html">
                                                                    <div>3 Columns</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="portfolio-masonry.html">
                                                                    <div>4 Columns</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="portfolio-5-masonry.html">
                                                                    <div>5 Columns</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="portfolio-6-masonry.html">
                                                                    <div>6 Columns</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col">
                                                    <li class="menu-item mega-menu-title">
                                                        <a class="menu-link" href="#">
                                                            <div>Loading Styles</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="portfolio.html">
                                                                    <div>jQuery Filter</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="portfolio-jpagination.html">
                                                                    <div>jQuery Pagination</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="portfolio-infinity-scroll.html">
                                                                    <div>Infinity Scroll</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="portfolio-ajax.html">
                                                                    <div>AJAX In Page</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="portfolio-ajax-in-modal.html">
                                                                    <div>AJAX In Modal</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="portfolio-filter-styles.html">
                                                                    <div>Filter Styles</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col">
                                                    <li class="menu-item mega-menu-title">
                                                        <a class="menu-link" href="#">
                                                            <div>Single Project</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="portfolio-single-extended.html">
                                                                    <div>Extended Item</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="portfolio-single-fullwidth.html">
                                                                    <div>Parallax Image</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="portfolio-single-gallery-full.html">
                                                                    <div>Slider Gallery</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="portfolio-single-video-fullwidth-left-sidebar.html">
                                                                    <div>HTML5 Video</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="portfolio-single-thumbs-right-sidebar.html">
                                                                    <div>Masonry Thumbs</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="portfolio-single-video-both-sidebar.html">
                                                                    <div>Embed Video</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col">
                                                    <li class="menu-item mega-menu-title">
                                                        <a class="menu-link" href="#">
                                                            <div>Layouts</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="portfolio-nomargin.html">
                                                                    <div>Default</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="portfolio-1-alt-right-sidebar.html">
                                                                    <div>Right Sidebar</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="portfolio-3-left-sidebar.html">
                                                                    <div>Left Sidebar</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="portfolio-2-both-sidebar.html">
                                                                    <div>Both Sidebar</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="portfolio-fullwidth-notitle.html">
                                                                    <div>100% Width</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="portfolio-parallax.html">
                                                                    <div>Parallax</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item mega-menu">
                                    <a class="menu-link" href="#">
                                        <div>Financiación</div>
                                    </a>
                                    <div class="mega-menu-content mega-menu-style-2">
                                        <div class="container">
                                            <div class="row">
                                                <ul class="sub-menu-container mega-menu-column col-lg-3">
                                                    <li class="menu-item mega-menu-title">
                                                        <a class="menu-link" href="#">
                                                            <div>Default</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="blog.html">
                                                                    <div>Right Sidebar</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="blog-left-sidebar.html">
                                                                    <div>Left Sidebar</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="blog-both-sidebar.html">
                                                                    <div>Both Sidebar</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="blog-full-width.html">
                                                                    <div>Full Width</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item mega-menu-title">
                                                        <a class="menu-link" href="#">
                                                            <div>Timeline</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="blog-timeline-right-sidebar.html">
                                                                    <div>Right Sidebar</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="blog-timeline-left-sidebar.html">
                                                                    <div>Left Sidebar</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="blog-timeline.html">
                                                                    <div>Full Width</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col-lg-3">
                                                    <li class="menu-item mega-menu-title">
                                                        <a class="menu-link" href="#">
                                                            <div>Masonry</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="blog-masonry.html">
                                                                    <div>4 Columns</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="blog-masonry-3.html">
                                                                    <div>3 Columns</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="blog-masonry-2.html">
                                                                    <div>2 Columns</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="blog-masonry-full.html">
                                                                    <div>100% Width</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item mega-menu-title">
                                                        <a class="menu-link" href="#">
                                                            <div>Grid</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="blog-grid.html">
                                                                    <div>4 Columns</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="blog-grid-3.html">
                                                                    <div>3 Columns</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="blog-grid-2.html">
                                                                    <div>2 Columns</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col-lg-3">
                                                    <li class="menu-item mega-menu-title">
                                                        <a class="menu-link" href="#">
                                                            <div>Small Thumbs</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="blog-small-left-sidebar.html">
                                                                    <div>Left Sidebar</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="blog-small.html">
                                                                    <div>Right Sidebar</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="blog-small-both-sidebar.html">
                                                                    <div>Both Sidebar</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="blog-small-full-width.html">
                                                                    <div>Full Width</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="blog-small-alt.html">
                                                                    <div>Alternate Layout</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item mega-menu-title">
                                                        <a class="menu-link" href="#">
                                                            <div>Item Splitting</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="blog-grid.html">
                                                                    <div>Pagination</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="blog-masonry.html">
                                                                    <div>Infinite Scroll</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col-lg-3">
                                                    <li class="menu-item mega-menu-title">
                                                        <a class="menu-link" href="#">
                                                            <div>Single</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="blog-single.html">
                                                                    <div>Default Layout</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="blog-single-left-sidebar.html">
                                                                    <div>Left Sidebar</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="blog-single-full.html">
                                                                    <div>Full Width</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="blog-single-small.html">
                                                                    <div>Small Image</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="blog-single-split-right-sidebar.html">
                                                                    <div>Split Layout</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item mega-menu-title">
                                                        <a class="menu-link" href="#">
                                                            <div>Comments Module</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="blog-single-left-sidebar.html#comments">
                                                                    <div>Facebook Comments</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="blog-single-small.html#comments">
                                                                    <div>Disqus Comments</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="shop.html">
                                        <div>Estudiantes</div>
                                    </a>
                                    <ul class="sub-menu-container">
                                        <li class="menu-item">
                                            <a class="menu-link" href="shop.html">
                                                <div>4 Columns</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="shop-3.html">
                                                <div>3 Columns</div>
                                            </a>
                                            <ul class="sub-menu-container">
                                                <li class="menu-item">
                                                    <a class="menu-link" href="shop-3.html">
                                                        <div>Full Width</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="shop-3-right-sidebar.html">
                                                        <div>Right Sidebar</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="shop-3-left-sidebar.html">
                                                        <div>Left Sidebar</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="shop-2.html">
                                                <div>2 Columns</div>
                                            </a>
                                            <ul class="sub-menu-container">
                                                <li class="menu-item">
                                                    <a class="menu-link" href="shop-2-right-sidebar.html">
                                                        <div>Right Sidebar</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="shop-2-left-sidebar.html">
                                                        <div>Left Sidebar</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="shop-2-both-sidebar.html">
                                                        <div>Both Sidebar</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="shop-1.html">
                                                <div>1 Columns</div>
                                            </a>
                                            <ul class="sub-menu-container">
                                                <li class="menu-item">
                                                    <a class="menu-link" href="shop-1.html">
                                                        <div>Full Width</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="shop-1-right-sidebar.html">
                                                        <div>Right Sidebar</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="shop-1-left-sidebar.html">
                                                        <div>Left Sidebar</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="shop-1-both-sidebar.html">
                                                        <div>Both Sidebar</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="shop-category-parallax.html">
                                                <div>Categories - Parallax</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="shop-combination-filter.html">
                                                <div>Combination Filter</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="shop-single.html">
                                                <div>Single Product</div>
                                            </a>
                                            <ul class="sub-menu-container">
                                                <li class="menu-item">
                                                    <a class="menu-link" href="shop-single.html">
                                                        <div>Full Width</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="shop-single-right-sidebar.html">
                                                        <div>Right Sidebar</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="shop-single-left-sidebar.html">
                                                        <div>Left Sidebar</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="shop-single-both-sidebar.html">
                                                        <div>Both Sidebar</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="shop-single-color.html">
                                                        <div>Color Options</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="shop-single-sticky.html">
                                                        <div>Sticky Aside</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="shop-single-list.html">
                                                        <div>Feature List</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="cart.html">
                                                <div>Cart</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="checkout.html">
                                                <div>Checkout</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item mega-menu">
                                    <a class="menu-link" href="#">
                                        <div>Egresados</div>
                                    </a>
                                    <div class="mega-menu-content">
                                        <div class="container">
                                            <div class="row">
                                                <ul class="sub-menu-container mega-menu-column col">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="animations.html">
                                                            <div><i class="icon-magic"></i>Animations</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="buttons.html">
                                                            <div><i class="icon-link"></i>Buttons</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="carousel.html">
                                                            <div><i class="icon-heart3"></i>Carousel</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="charts.html">
                                                            <div><i class="icon-bar-chart"></i>Charts</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="clients.html">
                                                            <div><i class="icon-apple"></i>Clients</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="columns-grids.html">
                                                            <div><i class="icon-th-large"></i>Columns</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="counters.html">
                                                            <div><i class="icon-time"></i>Counters</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="read-more.html">
                                                            <div><i class="icon-ellipsis-h"></i>Read More</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="component-datatable.html">
                                                            <div><i class="icon-table"></i>Data Tables</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="component-datepicker.html">
                                                            <div><i class="icon-calendar3"></i>Date &amp; Time Pickers
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="dividers.html">
                                                            <div><i class="icon-indent-right"></i>Dividers</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="featured-boxes.html">
                                                            <div><i class="icon-lightbulb"></i>Icon Boxes</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="gallery.html">
                                                            <div><i class="icon-picture"></i>Galleries</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="headings-dropcaps.html">
                                                            <div><i class="icon-pencil2"></i>Heading Styles</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="icon-lists.html">
                                                            <div><i class="icon-list-alt"></i>Icon Lists</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="gradients.html">
                                                            <div><i class="icon-tint"></i>Gradients</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="lightbox.html">
                                                            <div><i class="icon-resize-full"></i>Lightbox</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="item-overlays.html">
                                                            <div><i class="icon-line-marquee-plus"></i>Item Overlays
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="form-elements.html">
                                                            <div><i class="icon-edit"></i>Form Elements</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="component-uploads.html">
                                                            <div><i class="icon-line-upload"></i>File Uploads</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="lists-cards.html">
                                                            <div><i class="icon-th-list"></i>Lists &amp; Cards</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="maps.html">
                                                            <div><i class="icon-map-marker2"></i>Maps</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="media-embeds.html">
                                                            <div><i class="icon-play"></i>Media Embeds</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="modal-popovers.html">
                                                            <div><i class="icon-move"></i>Modal Boxes</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="navigation.html">
                                                            <div><i class="icon-align-justify2"></i>Navigations</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="pagination-progress.html">
                                                            <div><i class="icon-cogs"></i>Pagination</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="pie-skills.html">
                                                            <div><i class="icon-tasks"></i>Pies &amp; Skills</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="shape-dividers.html">
                                                            <div><i class="icon-shapes"></i>Shape Dividers</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="component-range-slider.html">
                                                            <div><i class="icon-line-move"></i>Range Slider</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="component-ratings.html">
                                                            <div><i class="icon-star3"></i>Star Ratings</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="pricing.html">
                                                            <div><i class="icon-dollar"></i>Pricing Boxes</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="process-steps.html">
                                                            <div><i class="icon-thumbs-up"></i>Process Steps</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="promo-boxes.html">
                                                            <div><i class="icon-rocket"></i>Promo Boxes</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="quotes-blockquotes.html">
                                                            <div><i class="icon-quote-left"></i>Blockquotes</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="responsive.html">
                                                            <div><i class="icon-laptop2"></i>Responsive</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="sections.html">
                                                            <div><i class="icon-folder-open"></i>Sections</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="social-icons.html">
                                                            <div><i class="icon-facebook2"></i>Social Icons</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="hover-animations.html">
                                                            <div><i class="icon-hand-pointer"></i>Hover Animations
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="component-select-picker.html">
                                                            <div><i class="icon-select"></i>Select Picker</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="component-select-box.html">
                                                            <div><i class="icon-line-columns"></i>Select Boxes</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="style-boxes.html">
                                                            <div><i class="icon-exclamation-sign"></i>Alert Boxes
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="styled-icons.html">
                                                            <div><i class="icon-flag2"></i>Styled Icons</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="tables.html">
                                                            <div><i class="icon-table"></i>Tables</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="tabs.html">
                                                            <div><i class="icon-star3"></i>Tabs</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="testimonials-twitter.html">
                                                            <div><i class="icon-user4"></i>Testimonials</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="thumbnails-slider.html">
                                                            <div><i class="icon-camera3"></i>Thumbnails</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="toggles-accordions.html">
                                                            <div><i class="icon-ok-circle"></i>Toggles</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="lazy-loading.html">
                                                            <div><i class="icon-line-loader"></i>Lazy Loading</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="component-radios-switches.html">
                                                            <div><i class="icon-line-square-check"></i>Radios &amp;
                                                                Switches</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="flip-cards.html">
                                                            <div><i class="icon-refresh"></i>Flip Cards</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="#">
                                        <div>ED. Continuada</div>
                                    </a>
                                    <ul class="sub-menu-container">
                                        <li class="menu-item">
                                            <a class="menu-link" href="#">
                                                <div><i class="icon-stack"></i>Sliders</div>
                                            </a>
                                            <ul class="sub-menu-container">
                                                <li class="menu-item">
                                                    <a class="menu-link" href="slider-revolution.html">
                                                        <div>Revolution Slider</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="rs-demos.html">
                                                                <div>Premium Templates</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="slider-revolution.html">
                                                                <div>Full Screen</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link"
                                                                href="slider-revolution-fullwidth.html">
                                                                <div>Full Width</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link"
                                                                href="slider-revolution-kenburns.html">
                                                                <div>Kenburns Effect</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link"
                                                                href="slider-revolution-html5-videos.html">
                                                                <div>HTML5 Video</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="slider-canvas.html">
                                                        <div>Canvas Slider</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="slider-canvas.html">
                                                                <div>Full Width</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="slider-canvas-fade.html">
                                                                <div>Fade Transition</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="slider-canvas-autoplay.html">
                                                                <div>Autoplay Feature</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link"
                                                                href="slider-canvas-video-event.html">
                                                                <div>Custom Video Event</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link"
                                                                href="slider-canvas-pagination.html">
                                                                <div>Pagination Navigation</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="slider-canvas-3.html">
                                                                <div>3 Columns</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="slider-canvas-4.html">
                                                                <div>4 Columns</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="slider-canvas-5.html">
                                                                <div>5 Columns</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="slider-flex.html">
                                                        <div>Flex Slider</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="slider-flex.html">
                                                                <div>Default Layout</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="slider-flex-thumbs.html">
                                                                <div>with Thumbs</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="slider-owl.html">
                                                        <div>Owl Slider</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="slider-owl-full.html">
                                                                <div>Full Width</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="slider-owl.html">
                                                                <div>Boxed Width</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="slider-owl-videos.html">
                                                                <div>Video Slider</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="static-parallax.html">
                                                        <div>Static Media</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="static-parallax.html">
                                                                <div>Static - Parallax</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="static-image.html">
                                                                <div>Static - Image</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="static-thumbs-grid.html">
                                                                <div>Static - Thumb Gallery</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="static-html5-video.html">
                                                                <div>Static - HTML5 Video</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="static-embed-video.html">
                                                                <div>Static - Embedded Video</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="#">
                                                <div><i class="icon-umbrella"></i>Headers</div>
                                            </a>
                                            <ul class="sub-menu-container">
                                                <li class="menu-item">
                                                    <a class="menu-link" href="header-light.html">
                                                        <div>Light Version</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="header-dark.html">
                                                        <div>Dark Version</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="header-transparent.html">
                                                        <div>Transparent</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="header-semi-transparent.html">
                                                        <div>Semi Transparent</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link"
                                                                href="header-semi-transparent.html">
                                                                <div>Light Version</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link"
                                                                href="header-semi-transparent-dark.html">
                                                                <div>Dark Version</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="header-side-left.html">
                                                        <div>Left Side Header</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="header-side-left.html">
                                                                <div>Fixed Position</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="header-side-left-open.html">
                                                                <div>OnClick Open</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link"
                                                                href="header-side-left-open-push.html">
                                                                <div>Push Content</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="header-side-right.html">
                                                        <div>Right Side Header</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="header-side-right.html">
                                                                <div>Fixed Position</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="header-side-right-open.html">
                                                                <div>OnClick Open</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link"
                                                                href="header-side-right-open-push.html">
                                                                <div>Push Content</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="header-floating.html">
                                                        <div>Floating Version</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="static-sticky.html">
                                                        <div>Static Sticky</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="responsive-sticky.html">
                                                        <div>Responsive Sticky</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="logo-changer.html">
                                                        <div>Alternate Logos</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="alternate-mobile-menu.html">
                                                        <div>Alternate Mobile Menu</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item mega-menu mega-menu-small">
                                            <a class="menu-link" href="#">
                                                <div><i class="icon-align-justify2"></i>Menu Styles</div>
                                            </a>
                                            <div class="mega-menu-content">
                                                <div class="row mx-0">
                                                    <ul class="sub-menu-container mega-menu-column col">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="header-light.html">
                                                                <div>Default Layout</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="menu-2.html">
                                                                <div>Alternate Layout</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="menu-3.html">
                                                                <div>Pill Style</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="menu-4.html">
                                                                <div>Border Style</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="menu-5.html">
                                                                <div>Large Icon Menu</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="split-menu.html">
                                                                <div>Split Layout</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <ul class="sub-menu-container mega-menu-column col">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="menu-6.html">
                                                                <div>Scaling Border</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="menu-subtitle.html">
                                                                <div>Sub-Title Menu</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="menu-7.html">
                                                                <div>Extended Menu 1</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="menu-8.html">
                                                                <div>Extended Menu 2</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="menu-9.html">
                                                                <div>Extended Menu 3</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="menu-10.html">
                                                                <div>Overlay Menu</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="mega-menu.html">
                                                <div><i class="icon-line-columns"></i>Mega Menu</div>
                                            </a>
                                            <ul class="sub-menu-container">
                                                <li class="menu-item">
                                                    <a class="menu-link" href="mega-menu.html">
                                                        <div>Widgetized</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="mega-menu-full.html">
                                                        <div>Full-Width</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="mega-menu-tab.html">
                                                        <div>Tabbed</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="mega-menu-side-tab.html">
                                                        <div>Side-Tabs (onClick)</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="forms.html">
                                                <div><i class="icon-wpforms"></i>Forms</div>
                                            </a>
                                        </li>
                                        <li class="menu-item mega-menu mega-menu-small">
                                            <a class="menu-link" href="widgets.html">
                                                <div><i class="icon-gift"></i>Widgets</div>
                                            </a>
                                            <div class="mega-menu-content">
                                                <div class="row mx-0">
                                                    <ul class="sub-menu-container mega-menu-column col">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="widgets.html">
                                                                <div>Links</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="widgets.html">
                                                                <div>Flickr Photostream</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="widgets.html">
                                                                <div>Dribbble Shots</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="widgets.html">
                                                                <div>Subscribers</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="widgets.html">
                                                                <div>Posts List</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="widgets.html">
                                                                <div>Twitter Feed</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="widgets.html">
                                                                <div>Tabbed Widgets</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <ul class="sub-menu-container mega-menu-column col">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="widgets.html">
                                                                <div>Carousel</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="widgets.html">
                                                                <div>Social Icons</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="widgets.html">
                                                                <div>Testimonials</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="widgets.html">
                                                                <div>Quick Contact</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="widgets.html">
                                                                <div>Tags Cloud</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="widgets.html">
                                                                <div>Video Embeds</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="widgets.html">
                                                                <div>Raw HTML</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="menu-item mega-menu mega-menu-small">
                                            <a class="menu-link" href="#">
                                                <div><i class="icon-ok-sign"></i>Page Titles</div>
                                            </a>
                                            <div class="mega-menu-content">
                                                <div class="row mx-0">
                                                    <ul class="sub-menu-container mega-menu-column col-5">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="page.html">
                                                                <div>Left Align</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="page-title-right.html">
                                                                <div>Right Align</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="page-title-center.html">
                                                                <div>Center Align</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="page-title-dark.html">
                                                                <div>Dark Style</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="page-title-pattern.html">
                                                                <div>BG Pattern</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <ul class="sub-menu-container mega-menu-column col-7">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="page-title-parallax.html">
                                                                <div>Parallax - Default</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link"
                                                                href="page-title-parallax-header.html">
                                                                <div>Parallax - Transparent</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="page-title-video.html">
                                                                <div>HTML5 Video</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="page-title-nobg.html">
                                                                <div>No Background</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="page-title-mini.html">
                                                                <div>Mini Version</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="side-panel.html">
                                                <div><i class="icon-line-layout"></i>Side Panel</div>
                                            </a>
                                            <ul class="sub-menu-container">
                                                <li class="menu-item">
                                                    <a class="menu-link" href="side-panel-left-overlay.html">
                                                        <div>Left Overlay</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="side-panel-left-push.html">
                                                        <div>Left Push</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="side-panel-right-overlay.html">
                                                        <div>Right Overlay</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="side-panel.html">
                                                        <div>Right Push</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="side-panel-light.html">
                                                        <div>Light Background</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="modal-onload.html">
                                                <div><i class="icon-line-expand"></i>Modal OnLoad</div>
                                            </a>
                                            <ul class="sub-menu-container">
                                                <li class="menu-item">
                                                    <a class="menu-link" href="modal-onload.html">
                                                        <div>Default Layout</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="modal-onload-iframe.html">
                                                        <div>Video iFrame</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="modal-onload-subscribe.html">
                                                        <div>Subscription Form</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="modal-onload-common-height.html">
                                                        <div>Common Height</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="modal-onload-cookie.html">
                                                        <div>Cookies Enabled</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item mega-menu mega-menu-small">
                                            <a class="menu-link" href="#footer" data-scrollto="#footer">
                                                <div><i class="icon-th"></i>Footers</div>
                                            </a>
                                            <div class="mega-menu-content">
                                                <div class="row mx-0">
                                                    <ul class="sub-menu-container mega-menu-column col">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="sticky-footer.html">
                                                                <div>Sticky</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#footer"
                                                                data-scrollto="#footer">
                                                                <div>Layout 1</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="footer-2.html#footer">
                                                                <div>Layout 2</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <ul class="sub-menu-container mega-menu-column col">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="footer-3.html#footer">
                                                                <div>Layout 3</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="footer-4.html#footer">
                                                                <div>Layout 4</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="footer-5.html#footer">
                                                                <div>Layout 5</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <ul class="sub-menu-container mega-menu-column col">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="footer-6.html#footer">
                                                                <div>Layout 6</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="footer-7.html#footer">
                                                                <div>Layout 7</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="index.html">
                                        <div>Contacto</div>
                                    </a>
                                    <ul class="sub-menu-container">
                                        <li class="menu-item">
                                            <a class="menu-link" href="intro.html#section-niche">
                                                <div>Niche Demos</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="intro.html#section-onepage">
                                                <div>One-Page Demos</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="index-corporate.html">
                                                <div>Home - Corporate</div>
                                            </a>
                                            <ul class="sub-menu-container">
                                                <li class="menu-item">
                                                    <a class="menu-link" href="index-corporate.html">
                                                        <div>Corporate - Layout 1</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="index-corporate-2.html">
                                                        <div>Corporate - Layout 2</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="index-corporate-3.html">
                                                        <div>Corporate - Layout 3</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="index-corporate-4.html">
                                                        <div>Corporate - Layout 4</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="index-portfolio.html">
                                                <div>Home - Portfolio</div>
                                            </a>
                                            <ul class="sub-menu-container">
                                                <li class="menu-item">
                                                    <a class="menu-link" href="index-portfolio.html">
                                                        <div>Portfolio - Layout 1</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="index-portfolio-2.html">
                                                        <div>Portfolio - Layout 2</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="index-portfolio-3.html">
                                                        <div>Portfolio - Masonry</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="index-portfolio-4.html">
                                                        <div>Portfolio - AJAX</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="index-blog.html">
                                                <div>Home - Blog</div>
                                            </a>
                                            <ul class="sub-menu-container">
                                                <li class="menu-item">
                                                    <a class="menu-link" href="index-blog.html">
                                                        <div>Blog - Layout 1</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="index-blog-2.html">
                                                        <div>Blog - Layout 2</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="index-blog-3.html">
                                                        <div>Blog - Layout 3</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="index-shop.html">
                                                <div>Home - Shop</div>
                                            </a>
                                            <ul class="sub-menu-container">
                                                <li class="menu-item">
                                                    <a class="menu-link" href="index-shop.html">
                                                        <div>Shop - Layout 1</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="index-shop-2.html">
                                                        <div>Shop - Layout 2</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="index-magazine.html">
                                                <div>Home - Magazine</div>
                                            </a>
                                            <ul class="sub-menu-container">
                                                <li class="menu-item">
                                                    <a class="menu-link" href="index-magazine.html">
                                                        <div>Magazine - Layout 1</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="index-magazine-2.html">
                                                        <div>Magazine - Layout 2</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="index-magazine-3.html">
                                                        <div>Magazine - Layout 3</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="landing.html">
                                                <div>Home - Landing Page</div>
                                            </a>
                                            <ul class="sub-menu-container">
                                                <li class="menu-item">
                                                    <a class="menu-link" href="landing.html">
                                                        <div>Landing Page - Layout 1</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="landing-2.html">
                                                        <div>Landing Page - Layout 2</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="landing-3.html">
                                                        <div>Landing Page - Layout 3</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="landing-4.html">
                                                        <div>Landing Page - Layout 4</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="landing-5.html">
                                                        <div>Landing Page - Layout 5</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="index-fullscreen-image.html">
                                                <div>Home - Full Screen</div>
                                            </a>
                                            <ul class="sub-menu-container">
                                                <li class="menu-item">
                                                    <a class="menu-link" href="index-fullscreen-image.html">
                                                        <div>Full Screen - Image</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="index-fullscreen-slider.html">
                                                        <div>Full Screen - Slider</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="index-fullscreen-video.html">
                                                        <div>Full Screen - Video</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="index-onepage.html">
                                                <div>Home - One Page</div>
                                            </a>
                                            <ul class="sub-menu-container">
                                                <li class="menu-item">
                                                    <a class="menu-link" href="index-onepage.html">
                                                        <div>One Page - Default</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="index-onepage-2.html">
                                                        <div>One Page - Submenu</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="index-onepage-3.html">
                                                        <div>One Page - Dots Style</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item mega-menu mega-menu-small">
                                            <a class="menu-link" href="#">
                                                <div>Extras</div>
                                            </a>
                                            <div class="mega-menu-content">
                                                <div class="row mx-0">
                                                    <ul class="sub-menu-container mega-menu-column col">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="index-wedding.html">
                                                                <div>Wedding</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="index-restaurant.html">
                                                                <div>Restaurant</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="index-events.html">
                                                                <div>Events</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <ul class="sub-menu-container mega-menu-column col">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="index-parallax.html">
                                                                <div>Parallax</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="index-app-showcase.html">
                                                                <div>App Showcase</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="index-boxed.html">
                                                                <div>Boxed Layout</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                        <form class="top-search-form" action="search.html" method="get">
                            <input type="text" name="q" class="form-control" value=""
                                placeholder="Type &amp; Hit Enter.." autocomplete="off">
                        </form>

                    </div>

                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->

        <section id="slider" class="slider-element slider-parallax swiper_wrapper vh-75">
            <div class="slider-inner">

                <div class="swiper-container swiper-parent">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide dark">
                            <div class="container">
                                <div class="slider-caption slider-caption-center">
                                    <h2 data-animate="fadeInUp">Welcome to Canvas</h2>
                                    <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Create
                                        just what you need for your Perfect Website. Choose from a wide range of
                                        Elements &amp; simply put them on our Canvas.</p>
                                </div>
                            </div>
                            <div class="swiper-slide-bg"
                                style="background-image: url('images/slider/swiper/1.jpg');">
                            </div>
                        </div>
                        <div class="swiper-slide dark">
                            <div class="container">
                                <div class="slider-caption slider-caption-center">
                                    <h2 data-animate="fadeInUp">Beautifully Flexible</h2>
                                    <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Looks
                                        beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with
                                        Responsive functionality that can be adapted to any screen size.</p>
                                </div>
                            </div>
                            <div class="video-wrap">
                                <video poster="images/videos/explore-poster.jpg" preload="auto" loop autoplay muted>
                                    <source src='images/videos/explore.mp4' type='video/mp4' />
                                    <source src='images/videos/explore.webm' type='video/webm' />
                                </video>
                                <div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="container">
                                <div class="slider-caption">
                                    <h2 data-animate="fadeInUp">Great Performance</h2>
                                    <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">You'll
                                        be surprised to see the Final Results of your Creation &amp; would crave for
                                        more.</p>
                                </div>
                            </div>
                            <div class="swiper-slide-bg"
                                style="background-image: url('images/slider/swiper/3.jpg'); background-position: center top;">
                            </div>
                        </div>
                    </div>
                    <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
                    <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
                    <div class="slide-number">
                        <div class="slide-number-current"></div><span>/</span>
                        <div class="slide-number-total"></div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Content
  ============================================= -->
        <section id="content">
            <div class="content-wrap">

                <div class="promo promo-light promo-full bottommargin-lg header-stick border-top-0 p-5">
                    <div class="container clearfix">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg">
                                <h3>Try Premium Free for <span>30 Days</span> and you'll never regret it!</h3>
                                <span>Starts at just <em>$0/month</em> afterwards. No Ads, No Gimmicks and No SPAM. Just
                                    Real Content.</span>
                            </div>
                            <div class="col-12 col-lg-auto mt-4 mt-lg-0">
                                <a href="#" class="button button-large button-circle m-0">Start Trial</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container clearfix">

                    <div class="row col-mb-50">
                        <div class="col-sm-6 col-lg-3">
                            <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                                <div class="fbox-icon">
                                    <a href="#"><i class="i-alt border-0 icon-shop"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>e-Commerce Solutions<span class="subtitle">Start your Own Shop today</span>
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                                <div class="fbox-icon">
                                    <a href="#"><i class="i-alt border-0 icon-wallet"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Easy Payment Options<span class="subtitle">Credit Cards &amp; PayPal
                                            Support</span></h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                                <div class="fbox-icon">
                                    <a href="#"><i class="i-alt border-0 icon-megaphone"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Instant Notifications<span class="subtitle">Realtime Email &amp; SMS
                                            Support</span></h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                                <div class="fbox-icon">
                                    <a href="#"><i class="i-alt border-0 icon-fire"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Hot Offers Daily<span class="subtitle">Upto 50% Discounts</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="line"></div>

                    <div class="row col-mb-50">
                        <div class="col-md-5">
                            <a href="https://vimeo.com/101373765"
                                class="d-block position-relative rounded overflow-hidden" data-lightbox="iframe">
                                <img src="images/others/1.jpg" alt="Image" class="w-100">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark">
                                        <i class="i-circled i-light icon-line-play m-0"></i>
                                    </div>
                                    <div class="bg-overlay-bg op-06 dark"></div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-7">
                            <div class="heading-block">
                                <h2>Globally Preferred Ecommerce Platform</h2>
                            </div>

                            <p>Worldwide John Lennon, mobilize humanitarian; emergency response donors; cause human
                                experience effect. Volunteer Action Against Hunger Aga Khan safeguards women's.</p>

                            <div class="row col-mb-30">
                                <div class="col-sm-6 col-md-12 col-lg-6">
                                    <ul class="iconlist iconlist-color mb-0">
                                        <li><i class="icon-caret-right"></i> Responsive Ready Layout</li>
                                        <li><i class="icon-caret-right"></i> Retina Display Supported</li>
                                        <li><i class="icon-caret-right"></i> Powerful &amp; Optimized Code</li>
                                        <li><i class="icon-caret-right"></i> 380+ Templates Included</li>
                                    </ul>
                                </div>

                                <div class="col-sm-6 col-md-12 col-lg-6">
                                    <ul class="iconlist iconlist-color mb-0">
                                        <li><i class="icon-caret-right"></i> 12+ Headers &amp; Menu Designs</li>
                                        <li><i class="icon-caret-right"></i> Premium Sliders Included</li>
                                        <li><i class="icon-caret-right"></i> Light &amp; Dark Colors</li>
                                        <li><i class="icon-caret-right"></i> e-Commerce Design Included</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="section topmargin-lg">
                    <div class="container clearfix">

                        <div class="heading-block center">
                            <h2>Features that you are gonna Love</h2>
                            <span>Canvas comes with 100+ Feature oriented Shortcodes that are easy to use too.</span>
                        </div>

                        <div class="row justify-content-center col-mb-50">
                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-phone2"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Responsive Layout</h3>
                                        <p>Powerful Layout with Responsive functionality that can be adapted to any
                                            screen size.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn"
                                    data-delay="200">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-eye"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Retina Ready Graphics</h3>
                                        <p>Looks beautiful &amp; ultra-sharp on Retina Displays with Retina Icons, Fonts
                                            &amp; Images.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn"
                                    data-delay="400">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-star2"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Powerful Performance</h3>
                                        <p>Optimized code that are completely customizable and deliver unmatched fast
                                            performance.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn"
                                    data-delay="600">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-video"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>HTML5 Video</h3>
                                        <p>Canvas provides support for Native HTML5 Videos that can be added to a Full
                                            Width Background.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn"
                                    data-delay="800">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-params"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Parallax Support</h3>
                                        <p>Display your Content attractively using Parallax Sections that have unlimited
                                            customizable areas.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn"
                                    data-delay="1000">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-fire"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Endless Possibilities</h3>
                                        <p>Complete control on each &amp; every element that provides endless
                                            customization possibilities.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn"
                                    data-delay="1200">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-bulb"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Light &amp; Dark Color Schemes</h3>
                                        <p>Change your Website's Primary Scheme instantly by simply adding the dark
                                            class to the body.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn"
                                    data-delay="1400">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-heart2"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Boxed &amp; Wide Layouts</h3>
                                        <p>Stretch your Website to the Full Width or make it boxed to surprise your
                                            visitors.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn"
                                    data-delay="1600">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-note"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Extensive Documentation</h3>
                                        <p>We have covered each &amp; everything in our Documentation including Videos
                                            &amp; Screenshots.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="container clearfix">

                    <div class="heading-block center">
                        <h3>Some of our <span>Featured</span> Works</h3>
                        <span>We have worked on some Awesome Projects that are worth boasting of.</span>
                    </div>

                    <div id="oc-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="1"
                        data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-sm="2"
                        data-items-md="3" data-items-xl="4">

                        <div class="portfolio-item">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="images/portfolio/4/1.jpg" alt="Open Imagination">
                                </a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn"
                                        data-hover-speed="350">
                                        <a href="images/portfolio/full/1.jpg"
                                            class="overlay-trigger-icon bg-light text-dark"
                                            data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeInUpSmall" data-hover-speed="350"
                                            data-lightbox="image"><i class="icon-line-plus"></i></a>
                                        <a href="portfolio-single.html"
                                            class="overlay-trigger-icon bg-light text-dark"
                                            data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeInUpSmall" data-hover-speed="350"><i
                                                class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"
                                        data-hover-speed="350"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single.html">Open Imagination</a></h3>
                                <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                            </div>
                        </div>

                        <div class="portfolio-item">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="images/portfolio/4/2.jpg" alt="Locked Steel Gate">
                                </a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn"
                                        data-hover-speed="350">
                                        <a href="images/portfolio/full/2.jpg"
                                            class="overlay-trigger-icon bg-light text-dark"
                                            data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeInUpSmall" data-hover-speed="350"
                                            data-lightbox="image"><i class="icon-line-plus"></i></a>
                                        <a href="portfolio-single.html"
                                            class="overlay-trigger-icon bg-light text-dark"
                                            data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeInUpSmall" data-hover-speed="350"><i
                                                class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"
                                        data-hover-speed="350"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
                                <span><a href="#">Illustrations</a></span>
                            </div>
                        </div>
                        <div class="portfolio-item">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="images/portfolio/4/3.jpg" alt="Mac Sunglasses">
                                </a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn"
                                        data-hover-speed="350">
                                        <a href="https://vimeo.com/89396394"
                                            class="overlay-trigger-icon bg-light text-dark"
                                            data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeInUpSmall" data-hover-speed="350"
                                            data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                        <a href="portfolio-single.html"
                                            class="overlay-trigger-icon bg-light text-dark"
                                            data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeInUpSmall" data-hover-speed="350"><i
                                                class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"
                                        data-hover-speed="350"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
                                <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
                            </div>
                        </div>
                        <div class="portfolio-item">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="images/portfolio/4/4.jpg" alt="Morning Dew">
                                </a>
                                <div class="bg-overlay" data-lightbox="gallery">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="images/portfolio/full/4.jpg"
                                            class="overlay-trigger-icon bg-light text-dark"
                                            data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"
                                            data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                        <a href="images/portfolio/full/4-1.jpg" class="d-none"
                                            data-lightbox="gallery-item"></a>
                                        <a href="portfolio-single.html"
                                            class="overlay-trigger-icon bg-light text-dark"
                                            data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i
                                                class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
                                <span><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
                            </div>
                        </div>
                        <div class="portfolio-item">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="images/portfolio/4/5.jpg" alt="Console Activity">
                                </a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="images/portfolio/full/5.jpg"
                                            class="overlay-trigger-icon bg-light text-dark"
                                            data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"
                                            data-lightbox="image" title="Image"><i
                                                class="icon-line-plus"></i></a>
                                        <a href="portfolio-single.html"
                                            class="overlay-trigger-icon bg-light text-dark"
                                            data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i
                                                class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single.html">Console Activity</a></h3>
                                <span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
                            </div>
                        </div>
                        <div class="portfolio-item">
                            <div class="portfolio-image">
                                <a href="portfolio-single-gallery.html">
                                    <img src="images/portfolio/4/6.jpg" alt="Shake It!">
                                </a>
                                <div class="bg-overlay" data-lightbox="gallery">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="images/portfolio/full/6.jpg"
                                            class="overlay-trigger-icon bg-light text-dark"
                                            data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"
                                            data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                        <a href="images/portfolio/full/6-1.jpg" class="d-none"
                                            data-lightbox="gallery-item"></a>
                                        <a href="images/portfolio/full/6-2.jpg" class="d-none"
                                            data-lightbox="gallery-item"></a>
                                        <a href="images/portfolio/full/6-3.jpg" class="d-none"
                                            data-lightbox="gallery-item"></a>
                                        <a href="portfolio-single-gallery.html"
                                            class="overlay-trigger-icon bg-light text-dark"
                                            data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i
                                                class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single-gallery.html">Shake It!</a></h3>
                                <span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
                            </div>
                        </div>
                        <div class="portfolio-item">
                            <div class="portfolio-image">
                                <a href="portfolio-single-video.html">
                                    <img src="images/portfolio/4/7.jpg" alt="Backpack Contents">
                                </a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="https://www.youtube.com/watch?v=kuceVNBTJio"
                                            class="overlay-trigger-icon bg-light text-dark"
                                            data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"
                                            data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                        <a href="portfolio-single.html"
                                            class="overlay-trigger-icon bg-light text-dark"
                                            data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i
                                                class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single-video.html">Backpack Contents</a></h3>
                                <span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
                            </div>
                        </div>
                        <div class="portfolio-item">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="images/portfolio/4/8.jpg" alt="Sunset Bulb Glow">
                                </a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="images/portfolio/full/8.jpg"
                                            class="overlay-trigger-icon bg-light text-dark"
                                            data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"
                                            data-lightbox="image" title="Image"><i
                                                class="icon-line-plus"></i></a>
                                        <a href="portfolio-single.html"
                                            class="overlay-trigger-icon bg-light text-dark"
                                            data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i
                                                class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
                                <span><a href="#">Graphics</a></span>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="section topmargin-sm mb-0">

                    <div class="container clearfix">

                        <div class="heading-block center">
                            <h3>Testimonials</h3>
                            <span>Check out some of our Client Reviews</span>
                        </div>

                        <ul class="testimonials-grid grid-1 grid-md-2 grid-lg-3">
                            <li class="grid-item">
                                <div class="testimonial">
                                    <div class="testi-image">
                                        <a href="#"><img src="images/testimonials/1.jpg"
                                                alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam
                                            quibusdam cum libero illo rerum repellendus!</p>
                                        <div class="testi-meta">
                                            John Doe
                                            <span>XYZ Inc.</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="grid-item">
                                <div class="testimonial">
                                    <div class="testi-image">
                                        <a href="#"><img src="images/testimonials/2.jpg"
                                                alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos
                                            obcaecati id culpa corporis molestias.</p>
                                        <div class="testi-meta">
                                            Collis Ta'eed
                                            <span>Envato Inc.</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="grid-item">
                                <div class="testimonial">
                                    <div class="testi-image">
                                        <a href="#"><img src="images/testimonials/7.jpg"
                                                alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Fugit officia dolor sed harum excepturi ex iusto magnam asperiores molestiae
                                            qui natus obcaecati facere sint amet.</p>
                                        <div class="testi-meta">
                                            Mary Jane
                                            <span>Google Inc.</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="grid-item">
                                <div class="testimonial">
                                    <div class="testi-image">
                                        <a href="#"><img src="images/testimonials/3.jpg"
                                                alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Similique fugit repellendus expedita excepturi iure perferendis provident
                                            quia eaque. Repellendus, vero numquam?</p>
                                        <div class="testi-meta">
                                            Steve Jobs
                                            <span>Apple Inc.</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="grid-item">
                                <div class="testimonial">
                                    <div class="testi-image">
                                        <a href="#"><img src="images/testimonials/4.jpg"
                                                alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, perspiciatis
                                            illum totam dolore deleniti labore.</p>
                                        <div class="testi-meta">
                                            Jamie Morrison
                                            <span>Adobe Inc.</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="grid-item">
                                <div class="testimonial">
                                    <div class="testi-image">
                                        <a href="#"><img src="images/testimonials/8.jpg"
                                                alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Porro dolorem saepe reiciendis nihil minus neque. Ducimus rem necessitatibus
                                            repellat laborum nemo quod.</p>
                                        <div class="testi-meta">
                                            Cyan Ta'eed
                                            <span>Tutsplus</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>

                </div>

                <div class="container clearfix">

                    <div id="oc-clients" class="owl-carousel owl-carousel-full image-carousel carousel-widget"
                        data-margin="30" data-loop="true" data-nav="false" data-autoplay="5000"
                        data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4"
                        data-items-lg="5" data-items-xl="6" style="padding: 20px 0;">

                        <div class="oc-item"><a href="http://logofury.com/"><img src="images/clients/1.png"
                                    alt="Clients"></a></div>
                        <div class="oc-item"><a href="http://logofury.com/"><img src="images/clients/2.png"
                                    alt="Clients"></a></div>
                        <div class="oc-item"><a href="http://logofury.com/"><img src="images/clients/3.png"
                                    alt="Clients"></a></div>
                        <div class="oc-item"><a href="http://logofury.com/"><img src="images/clients/4.png"
                                    alt="Clients"></a></div>
                        <div class="oc-item"><a href="http://logofury.com/"><img src="images/clients/5.png"
                                    alt="Clients"></a></div>
                        <div class="oc-item"><a href="http://logofury.com/"><img src="images/clients/6.png"
                                    alt="Clients"></a></div>
                        <div class="oc-item"><a href="http://logofury.com/"><img src="images/clients/7.png"
                                    alt="Clients"></a></div>
                        <div class="oc-item"><a href="http://logofury.com/"><img src="images/clients/8.png"
                                    alt="Clients"></a></div>
                        <div class="oc-item"><a href="http://logofury.com/"><img src="images/clients/9.png"
                                    alt="Clients"></a></div>
                        <div class="oc-item"><a href="http://logofury.com/"><img src="images/clients/10.png"
                                    alt="Clients"></a></div>

                    </div>

                </div>

                <a href="#" class="button button-full center text-end footer-stick">
                    <div class="container clearfix">
                        Canvas comes with Unlimited Customizations &amp; Options. <strong>Check Out</strong> <i
                            class="icon-caret-right" style="top:4px;"></i>
                    </div>
                </a>

            </div>
        </section><!-- #content end -->

        <!-- Footer
        ============================================= -->
        <footer id="footer" class="dark">
            <div class="container">

                <!-- Footer Widgets
                ============================================= -->
                <div class="footer-widgets-wrap">

                    <div class="row col-mb-50">
                        <div class="col-lg-8">

                            <div class="row col-mb-50">
                                <div class="col-md-4">

                                    <div class="widget clearfix">

                                        <img src="images/footer-widget-logo.png" alt="Image"
                                            class="footer-logo">

                                        <p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp;
                                            <strong>Flexible</strong> Design Standards.
                                        </p>

                                        <div
                                            style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
                                            <address>
                                                <strong>Headquarters:</strong><br>
                                                795 Folsom Ave, Suite 600<br>
                                                San Francisco, CA 94107<br>
                                            </address>
                                            <abbr title="Phone Number"><strong>Phone:</strong></abbr> (1) 8547
                                            632521<br>
                                            <abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11 4752 1433<br>
                                            <abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-4">

                                    <div class="widget widget_links clearfix">

                                        <h4>Blogroll</h4>

                                        <ul>
                                            <li><a href="https://codex.wordpress.org/">Documentation</a></li>
                                            <li><a
                                                    href="https://wordpress.org/support/forum/requests-and-feedback">Feedback</a>
                                            </li>
                                            <li><a href="https://wordpress.org/extend/plugins/">Plugins</a></li>
                                            <li><a href="https://wordpress.org/support/">Support Forums</a></li>
                                            <li><a href="https://wordpress.org/extend/themes/">Themes</a></li>
                                            <li><a href="https://wordpress.org/news/">Canvas Blog</a></li>
                                            <li><a href="https://planet.wordpress.org/">Canvas Planet</a></li>
                                        </ul>

                                    </div>

                                </div>

                                <div class="col-md-4">

                                    <div class="widget clearfix">
                                        <h4>Recent Posts</h4>

                                        <div class="posts-sm row col-mb-30" id="post-list-footer">
                                            <div class="entry col-12">
                                                <div class="grid-inner row">
                                                    <div class="col">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Lorem ipsum dolor sit amet,
                                                                    consectetur</a></h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li>10th July 2021</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="entry col-12">
                                                <div class="grid-inner row">
                                                    <div class="col">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Elit Assumenda vel amet dolorum
                                                                    quasi</a></h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li>10th July 2021</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="entry col-12">
                                                <div class="grid-inner row">
                                                    <div class="col">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Debitis nihil placeat, illum est
                                                                    nisi</a></h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li>10th July 2021</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4">

                            <div class="row col-mb-50">
                                <div class="col-md-4 col-lg-12">
                                    <div class="widget clearfix" style="margin-bottom: -20px;">

                                        <div class="row">
                                            <div class="col-lg-6 bottommargin-sm">
                                                <div class="counter counter-small"><span data-from="50"
                                                        data-to="15065421" data-refresh-interval="80"
                                                        data-speed="3000" data-comma="true"></span></div>
                                                <h5 class="mb-0">Total Downloads</h5>
                                            </div>

                                            <div class="col-lg-6 bottommargin-sm">
                                                <div class="counter counter-small"><span data-from="100"
                                                        data-to="18465" data-refresh-interval="50"
                                                        data-speed="2000" data-comma="true"></span></div>
                                                <h5 class="mb-0">Clients</h5>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-5 col-lg-12">
                                    <div class="widget subscribe-widget clearfix">
                                        <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing
                                            Offers &amp; Inside Scoops:</h5>
                                        <div class="widget-subscribe-form-result"></div>
                                        <form id="widget-subscribe-form" action="include/subscribe.php"
                                            method="post" class="mb-0">
                                            <div class="input-group mx-auto">
                                                <div class="input-group-text"><i class="icon-email2"></i></div>
                                                <input type="email" id="widget-subscribe-form-email"
                                                    name="widget-subscribe-form-email"
                                                    class="form-control required email"
                                                    placeholder="Enter your Email">
                                                <button class="btn btn-success" type="submit">Subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-md-3 col-lg-12">
                                    <div class="widget clearfix" style="margin-bottom: -20px;">

                                        <div class="row">
                                            <div class="col-6 col-md-12 col-lg-6 clearfix bottommargin-sm">
                                                <a href="#"
                                                    class="social-icon si-dark si-colored si-facebook mb-0"
                                                    style="margin-right: 10px;">
                                                    <i class="icon-facebook"></i>
                                                    <i class="icon-facebook"></i>
                                                </a>
                                                <a href="#"><small
                                                        style="display: block; margin-top: 3px;"><strong>Like
                                                            us</strong><br>on Facebook</small></a>
                                            </div>
                                            <div class="col-6 col-md-12 col-lg-6 clearfix">
                                                <a href="#" class="social-icon si-dark si-colored si-rss mb-0"
                                                    style="margin-right: 10px;">
                                                    <i class="icon-rss"></i>
                                                    <i class="icon-rss"></i>
                                                </a>
                                                <a href="#"><small
                                                        style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to
                                                        RSS Feeds</small></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div><!-- .footer-widgets-wrap end -->

            </div>

            <!-- Copyrights
            ============================================= -->
            <div id="copyrights">
                <div class="container">

                    <div class="row col-mb-30">

                        <div class="col-md-6 text-center text-md-start">
                            Copyrights &copy; 2020 All Rights Reserved by Canvas Inc.<br>
                            <div class="copyright-links"><a href="#">Terms of Use</a> / <a
                                    href="#">Privacy Policy</a></div>
                        </div>

                        <div class="col-md-6 text-center text-md-end">
                            <div class="d-flex justify-content-center justify-content-md-end">
                                <a href="#" class="social-icon si-small si-borderless si-facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-gplus">
                                    <i class="icon-gplus"></i>
                                    <i class="icon-gplus"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-pinterest">
                                    <i class="icon-pinterest"></i>
                                    <i class="icon-pinterest"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-vimeo">
                                    <i class="icon-vimeo"></i>
                                    <i class="icon-vimeo"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-github">
                                    <i class="icon-github"></i>
                                    <i class="icon-github"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-yahoo">
                                    <i class="icon-yahoo"></i>
                                    <i class="icon-yahoo"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-linkedin">
                                    <i class="icon-linkedin"></i>
                                    <i class="icon-linkedin"></i>
                                </a>
                            </div>

                            <div class="clear"></div>

                            <i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i
                                class="icon-headphones"></i> +1-11-6541-6369 <span class="middot">&middot;</span> <i
                                class="icon-skype2"></i> CanvasOnSkype
                        </div>

                    </div>

                </div>
            </div><!-- #copyrights end -->
        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts
    ============================================= -->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.min.js"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script src="js/functions.js"></script>

</body>

</html>
