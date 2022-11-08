<nav class="primary-menu">
    <ul class="menu-container">
        @foreach ($menus as $menu)
            <li class="menu-item">
                <a class="menu-link" href="web{{ $menu->url_redirect }}/s">
                    <div>{{ $menu->titulo }}</div>
                </a>
                @if (sizeof($menu->getHijos) != 0)
                    <ul class="sub-menu-container">
                        @foreach ($menu->getHijos as $sub_menu)
                            <li class="menu-item">
                                <a class="menu-link" href="web{{ $sub_menu->url_redirect }}/">
                                    <div>{{ $sub_menu->titulo }}</div>
                                </a>
                                @if (sizeof($sub_menu->getHijos) != 0)
                                    <ul class="sub-menu-container">
                                        @foreach ($sub_menu->getHijos as $sub_menu)
                                            <li class="menu-item">
                                                <a class="menu-link" href="web{{ $sub_menu->url_redirect }}">
                                                    <div>{{ $sub_menu->titulo }}</div>
                                                </a>
                                                @if (sizeof($sub_menu->getHijos) != 0)
                                                    <ul class="sub-menu-container">
                                                        @foreach ($sub_menu->getHijos as $sub_menu)
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="web{{ $sub_menu->url_redirect }}">
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
