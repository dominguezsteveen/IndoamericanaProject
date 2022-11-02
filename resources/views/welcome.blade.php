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
                            data-dark-logo="images/inicio/logo_header/trainer-y-indo-1.png"><img
                                src="images/inicio/logo_header/trainer-y-indo-1.png" alt="Indo Logo"></a>
                        <a href="/" class="retina-logo"
                            data-dark-logo="images/inicio/logo_header/trainer-y-indo-1.png"><img
                                src="images/inicio/logo_header/trainer-y-indo-1.png" alt="Indo Logo"></a>
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
                                @foreach ($menus as $menu)
                                    <li class="menu-item">
                                        <a class="menu-link" href="{{ $menu->url_redirect }}">
                                            <div>{{ $menu->titulo }}</div>
                                        </a>
                                        @if (sizeof($menu->getHijos) != 0)
                                            <ul class="sub-menu-container">
                                                @foreach ($menu->getHijos as $sub_menu)
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="{{ $sub_menu->url_redirect }}">
                                                            <div>{{ $sub_menu->titulo }}</div>
                                                        </a>
                                                        @if (sizeof($sub_menu->getHijos) != 0)
                                                            <ul class="sub-menu-container">
                                                                @foreach ($sub_menu->getHijos as $sub_menu)
                                                                    <li class="menu-item">
                                                                        <a class="menu-link"
                                                                            href="{{ $sub_menu->url_redirect }}">
                                                                            <div>{{ $sub_menu->titulo }}</div>
                                                                        </a>
                                                                        @if (sizeof($sub_menu->getHijos) != 0)
                                                                            <ul class="sub-menu-container">
                                                                                @foreach ($sub_menu->getHijos as $sub_menu)
                                                                                    <li class="menu-item">
                                                                                        <a class="menu-link"
                                                                                            href="{{ $sub_menu->url_redirect }}">
                                                                                            <div>
                                                                                                {{ $sub_menu->titulo }}
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        @endif
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
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

        <section id="slider" class="slider-element swiper_wrapper vh-60">
            <div class="slider-inner">

                <div class="swiper-container swiper-parent">
                    <div class="swiper-wrapper">
                        @foreach ($imgs_slider as $img)
                            <div class="swiper-slide dark">
                                <div class="swiper-slide-bg"
                                    style="background-image: url('{{ $img->urlImg }}'); background-size: contain;background-origin: border-box">
                                </div>
                            </div>
                        @endforeach
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
                                <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="200">
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
                                <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="400">
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
                                <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="600">
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
                                <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="800">
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
                                <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="1000">
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
                                <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="1200">
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
                                <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="1400">
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
                                <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="1600">
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
                                            data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
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
                                            data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
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
                        data-margin="30" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false"
                        data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6"
                        style="padding: 20px 0;">

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

                                        <img src="images/footer-widget-logo.png" alt="Image" class="footer-logo">

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
                                                        data-to="18465" data-refresh-interval="50" data-speed="2000"
                                                        data-comma="true"></span></div>
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
