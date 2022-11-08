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
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/swiper.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css" />

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
                            @livewire('web.web-menu')

                            <form class="top-search-form" action="search.html" method="get">
                                <input type="text" name="q" class="form-control" value=""
                                    placeholder="Type &amp; Hit Enter.." autocomplete="off">
                            </form>
                        </div>
                    </div>
                </div>

                <div class="header-wrap-clone"></div>
            </header><!-- #header end -->

        <!-- Page Content -->
        <main>
            {{-- {{ $slot }} --}}
            @yield('content')
        </main>

        <!-- Footer
  ============================================= -->
        @livewire('web.web-footer')
        <!-- #footer end -->
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
