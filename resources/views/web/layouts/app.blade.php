<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
    <meta name="theme-color" content="#0d6efd"/>
    <meta name="title" content="@yield('page_title', 'Globalinnetwork | Berita terupdate')" />
    <meta name="description" content="@yield('page_description', 'Menyajikan berita terupdate dan terpercaya')">
    <meta name="keywords" content="Berita viral, trending, nasional, daerah">
    <meta name="author" content="Devkh | GitHub: https://github.com/umaedi">
    <meta name="google-site-verification" content="#" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta itemprop="name" content="@yield('page_title', 'Globalinnetwork')" />
    <meta name="description" content="@yield('page_description', 'Menyajikan berita terupdate dan terpercaya')">
    <meta itemprop="image" content="@yield('page_image', asset('globalinnetwork.png'))" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@" />
    <meta name="twitter:title" content="@yield('page_title', 'Globalinnetwork')" />
    <meta name="twitter:description" content="@yield('page_description', 'Menyajikan berita terupdate dan terpercaya')" />
    <meta name="twitter:creator" content="@" />
    {{-- Twitter Summary card images must be at least 120x120px --}}
    <meta name="twitter:image" content="@yield('page_image', asset('globalinnetwork.png'))" />
    {{-- Twitter summary card with large image must be at least 280x150px --}}
    <meta name="twitter:image:src" content="@yield('page_image', asset('globalinnetwork.png'))" />
    <meta property="og:title" content="@yield('page_title', 'Globalinnetwork')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:image" content="@yield('page_image', asset('globalinnetwork.png'))" />
    <meta property="og:description" content="@yield('page_description', 'Menyajikan berita terupdate dan terpercaya')" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <link  href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9223619218253905" crossorigin="anonymous"></script>
    {{-- <link  href="{{ asset('assets/css/main-bootstrap.css') }}" rel="stylesheet"> --}}
    @stack('css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Notifikasi Popup -->
    <div class="notification-popup" id="notifPopup">
        <div class="popup-header">
            <img src="{{ asset('assets/img/berita/icon_aplikasi_globalinnetwork-removebg-preview.png') }}" loading="eager" alt="logo" width="100%">
            <p class="m-0 mb-2">Nyalakan notifikasi untuk mendapatkan update berita terkini dari GlobalNetwork.</p>
        </div>
        <div class="popup-actions">
            <button class="btn btn-outline btn-primary" id="closePopup">TIDAK</button>
            <button class="btn btn-danger" id="requestNotification">YA</button>
        </div>
    </div>
    <nav>
        <div class="bg-primary text-white">
          <div class="container">
            <div class="d-flex justify-content-between">
                <span><small class="author">{{ \Carbon\Carbon::parse(now())->locale('id_ID')->isoFormat('dddd, D MMMM YYYY') }}</small></span>
                <span><small class="author">Pasang iklan? hubngi: <a href="https://wa.me/6281369264097" class="text-white">081369264097</a></small></span>
            </div>
          </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <div class="container navbar-text">
                <div class="d-flex justify-content-between align-items-center ">
                    <div class="d-flex align-items-center gap-2">
                        <img src="{{ asset('assets/img/logo/logo-global-innetwork.png') }}" alt="logo" width="30px" lazy="loading">
                        @php
                            $subdomain = explode('.', request()->getHost())[0];
                        @endphp
                        <a class="navbar-brand fw-bold text-center text-uppercase" href="/">{{ $subdomain }}</a>
                    </div>
                    @auth
                        @if (auth()->user()->role === 'admin' || auth()->user()->role === 'author')
                        <a href="/cms/dashboard" class="btn-default btn-signup">CMS</a>
                        @elseif(auth()->user()->role === 'user')
                        <img src="{{ auth()->user()->avatar }}" alt="" class="avatar">
                        @endif
                        @else
                        <a href="/login" class="d-lg-none btn btn-primary btn-sm"><i class='bx bx-log-in-circle' style="color: #fff"></i></a>
                    @endauth
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @foreach ($menus as $item)
                    <li class="nav-item"><a class="nav-link" href="{{ $item->link }}">{{ $item->nama_menu }}</a></li>
                    @endforeach
                </ul>
            </div>
            @auth
                @if (auth()->user()->role === 'admin' || auth()->user()->role === 'author')
                <a href="/cms/dashboard" class="btn-default btn-signup">CMS</a>
                @elseif(auth()->user()->role === 'user')
                <img src="{{ auth()->user()->avatar }}" alt="" class="avatar">
                @endif
                @else
                <a href="/login" class="d-none d-sm-inline btn btn-primary"><i class='bx bx-log-in-circle'></i></a>
            @endauth
        </div>
    </nav>
    @yield('content')

    <div style=" background-color: rgb(248 250 252); padding: 50px;">
        <section class="container mt-4">
            <div class="mt-3 text-center">
                <img src="{{ asset('assets/img/berita/icon_aplikasi_globalinnetwork-removebg-preview.png') }}" width="100px" alt="">
                <h3 class="fw-bold text-center text-primary">Media global network</h3>
            </div>
            <div class="d-flex flex-wrap gap-2 justify-content-center">
                @forelse ($subdomains as $subdomain)
                <a href="https://{{ $subdomain->nama_subdomain }}.globalinnetwork.com"><span class="shadow-sm p-2 rounded">{{ $subdomain->nama_subdomain }}</span></a>
                @empty
                    <p>Submenu belum tersedia</p>
                @endforelse
            </div>
            
        </section>
    </div>

    <footer class="bg-primary text-white">
        <div class="container">
           
            <div class="text-center">
                <p class="mb-0">© 2025 Devkh. Semua Hak Dilindungi.</p>
            </div>
        </div>
    </footer>

    <section>
        <div class="fixed-bottom bg-white py-2 d-md-none">
            <div class="d-flex justify-content-around">
              <div class="{{ Request::is('/') ? 'active' : '' }} flex-grow-1 text-center">
                <a href="/" class="d-flex flex-column align-items-center text-decoration-none">
                  <i class="bx bx-home d-block icon-navigasi"></i>
                  Beranda
                </a>
              </div>
              <div class="flex-grow-1 text-center">
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="getKategori()" class="d-flex flex-column align-items-center text-decoration-none">
                  <i class="bx bx-category icon-navigasi"></i>
                  Kategori
                </a>
              </div>
              <div class="flex-grow-1 text-center {{ Request::is('struktur') ? 'active' : '' }}">
                <a href="/redaksi"class="d-flex flex-column align-items-center text-decoration-none">
                  <i class="bx bx-group icon-navigasi"></i>
                  Redaksi
                </a>
              </div>
              <div class="flex-grow-1 text-center {{ Request::is('tentang') ? 'active' : '' }}">
                <a href="{{ route('tentang-kami') }}"class="d-flex flex-column align-items-center text-decoration-none">
                  <i class="bx bx-buildings icon-navigasi"></i>
                  Tentang
                </a>
              </div>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade modal-bottom" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">List kategori</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="container">
                                <div class="d-flex flex-wrap gap-2" id="kategoriNav">
                                    <div class="justify-content-center spinner-border text-primary" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script type="text/javascript">
        async function transAjax(data) {
            html = null;
            data.headers = {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            await $.ajax(data).done(function(res) {
                    html = res;
                })
                .fail(function() {
                    return false;
                })
            return html
        }

        async function getKategori() {
            var param = {
            url: "/kategori",
            method: "GET",
            data: {
                load_type: 'kategori_nav'
            }
        }

        await transAjax(param).then((result) => {
            let data = JSON.parse(result.metadata);
            let html = '';
                data.forEach(element => {
                    html += `<a href="/kategori/${element.slug}" <span class="badge bg-primary badge-size text-white">${element.nama_kategori}</span></a>`;
                });
            $('#kategoriNav').html(html);
            }).catch((err) => {
                console.log(err);
            });
        }

    </script>
    @stack('js')
</body>
</html>
