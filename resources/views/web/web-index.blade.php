<x-app-layout>
    <x-slot name="header">
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
                                                        <a class="menu-link" href="{{ $sub_menu->url_redirect }}">
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
    </x-slot>

    <section id="slider" class="slider-element h-auto" style="background-color: #03204C;">
        <div class="slider-inner">

            <div class="owl-carousel carousel-widget" data-margin="0" data-items="1" data-pagi="false" data-loop="true"
                data-animate-in="slideInRight" data-speed="450" data-animate-out="slideOutLeft" data-autoplay="5000">
                @foreach ($imgs_slider as $img)
                    <a href="#"><img src="{{ $img->urlImg }}" alt="Slider" style="object-fit: cover"></a>
                @endforeach
            </div>

        </div>
    </section>

    <!-- Content
        ============================================= -->
    <section id="content" class="container clearfix">
        <ul class="testimonials-grid grid-1 grid-md-2 grid-lg-3">
            @foreach ($programs as $program)
                <li class="grid-item">
                    <div class="">
                        <div class="programa-titulo">
                            {{ $program->titulo }}
                        </div>
                        <div class="programa-img">
                            <a href="web/programas-academicos/{{ $program->urlRedirect }}"><img
                                    src="{{ $program->img }}" alt="img_post"></a>
                        </div>
                        <div class="programa-content">
                            <p>{{ $program->descripcion }}</p>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </section>
    <div class="line"></div>
    @foreach ($sections as $section)
        <section id="content" class="container clearfix">

            <!-- Single Post
            ============================================= -->
            <div class="entry clearfix">

                <!-- Entry Image
                ============================================= -->
                <div class="entry-image">
                    <a href="{{ $section->urlRedirect }}"><img src="{{ $section->img }}"
                            alt="{{ $section->urlRedirect }}" style="margin: auto"></a>
                </div><!-- .entry-image end -->

                <!-- Entry Title
                ============================================= -->
                <div class="entry-title">
                    <h1 style="text-align: center; color: #1C4360; font-style: italic">{{ $section->titulo }}</h1>
                </div><!-- .entry-title end -->


                <!-- Entry Content
                ============================================= -->
                <div class="entry-content mt-0">
                        {!! $section->content !!}
                </div><!-- .entry end -->

            </div><!-- .postcontent end -->
        </section>
        <div class="line"></div>
    @endforeach
    <!-- #content end -->

</x-app-layout>
