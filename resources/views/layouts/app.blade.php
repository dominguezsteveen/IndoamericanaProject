<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Indoamericana | Escuela de formación</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
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
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen">

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

        <!-- Page Heading -->
        @if (isset($header))
            <!-- Header
        ============================================= -->
            <header id="header" class="header-size-sm dark">
                <div class="container py-3">
                    <div class="header-row flex-column flex-lg-row justify-content-center">

                        <!-- Logo
                    ============================================= -->
                        <div id="logo" class="w-full">
                            <a href="/" class="standard-logo"
                                data-dark-logo="images/web/inicio/logo_header/trainer-y-indo-1.webp"><img
                                    src="images/web/inicio/logo_header/trainer-y-indo-1.webp" alt="Indo Logo"></a>
                            <a href="/" class="retina-logo"
                                data-dark-logo="images/web/inicio/logo_header/trainer-y-indo-1.webp"><img
                                    src="images/web/inicio/logo_header/trainer-y-indo-1.webp" alt="Indo Logo"></a>
                        </div><!-- #logo end -->

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
                            {{ $header }}

                            <form class="top-search-form" action="search.html" method="get">
                                <input type="text" name="q" class="form-control" value=""
                                    placeholder="Type &amp; Hit Enter.." autocomplete="off">
                            </form>
                        </div>
                    </div>
                </div>

                <div class="header-wrap-clone"></div>
            </header><!-- #header end -->
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

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
                                    href="#">Privacy
                                    Policy</a></div>
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
    </div>

    @stack('modals')

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
    @livewireScripts
</body>

</html>
