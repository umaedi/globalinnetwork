<header class="main-header" style="background: #114A43;">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="/">
                    <img lazy="loading" src="{{ asset('img/logo/favicon.png') }}" alt="Logo" width="40px">
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <!-- Menampilkan menu yang terlihat untuk desktop -->
                            <li class="nav-item">
                                <a class="nav-link" href="/berita">berita</a>
                            </li>
                            @foreach ($visibleMenus as $menu)
                                @if ($menu->submenu->isEmpty())
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ $menu->link }}">{{ $menu->nama_menu }}</a>
                                    </li>
                                @else
                                    <li class="nav-item submenu"><a class="nav-link" href="{{ $menu->link }}">
                                            {{ $menu->nama_menu }}</a>
                                        <ul>
                                            @foreach ($menu->submenu as $submenu)
                                                <li><a href="{{ $submenu->link }}">{{ $submenu->nama_submenu }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endif
                            @endforeach

                            <!-- Menu "Lainnya" hanya untuk desktop -->
                            @if ($extraMenus->isNotEmpty())
                                <li class="nav-item dropdown-toggle desktop-only">
                                    <a href="javascript:void(0)" class="nav-link" id="toggle-more-menu">Lainnya ▼</a>
                                    <ul class="extra-menu" id="extra-menu">
                                        @foreach ($extraMenus as $menu)
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="{{ $menu->link }}">{{ $menu->nama_menu }}</a>
                                                @if ($menu->submenu->isNotEmpty())
                                                    <ul class="submenu-items">
                                                        @foreach ($menu->submenu as $submenu)
                                                            <li><a
                                                                    href="{{ $submenu->link }}">{{ $submenu->nama_submenu }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endif

                            <!-- Menampilkan semua menu untuk mobile dan tablet -->
                            <ul class="navbar-nav d-lg-none">
                                @foreach ($menus as $index => $menu)
                                    <!-- Menambahkan indeks -->
                                    @if ($index >= 6)
                                        <!-- Menampilkan menu setelah indeks ke-6 -->
                                        <li class="nav-item">
                                            <a class="nav-link no-padding"
                                                href="{{ $menu->link }}">{{ $menu->nama_menu }}</a>
                                            @if ($menu->submenu->isNotEmpty())
                                                <ul class="submenu">
                                                    @foreach ($menu->submenu as $submenu)
                                                        <li>
                                                            <a class="no-padding"
                                                                href="{{ $submenu->link }}">{{ $submenu->nama_submenu }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endif
                                @endforeach
                            </ul>

                            <!-- Start  Code Mobile Button -->
                            <li class="d-inline-flex mobile-only">
                                @if (auth()->user()->role === 'admin' || auth()->user()->role === 'author')
                                <a href="/cms/dashboard" class="btn-default btn-signup">CMS</a>
                                @elseif(auth()->user()->role === 'user')
                                <a href="/login" class="btn-default btn-signup">{{ auth()->user()->name }}</a>
                                @else
                                <a href="/login" class="btn-default btn-signup">{{ auth()->user()->name }}</a>
                                @endif
                            </li>
                            <!-- End Code Mobile Button -->
                        </ul>

                    </div>
                </div>

                <!-- Start Code Desktop Button -->
                <div class="header-btn d-inline-flex desktop-only">
                    @if (auth()->user()->role === 'admin' || auth()->user()->role === 'author')
                    <a href="/cms/dashboard" class="btn-default btn-signup">CMS</a>
                    @elseif(auth()->user()->role === 'user')
                    <a href="/login" class="btn-default btn-signup">{{ auth()->user()->name }}</a>
                    @else
                    <a href="/login" class="btn-default btn-signup">{{ auth()->user()->name }}</a>
                    @endif
                   
                </div>
                <!-- End Code Desktop Button -->
                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
