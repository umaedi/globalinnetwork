  
<footer class="main-footer bg-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <!-- About Footer Start -->
                <div class="about-footer">
                    <!-- Footer Logo Start -->
                    <div class="footer-logo">
                        <img src="{{ asset('img/logo/favicon.png') }}" lazy="loading" alt="">
                        <div class="footer-links mt-3">
                            <h3>{{ $pengaturan->nama_opd ?? '-' }}</h3>
                            <span class="text-white">{{ $pengaturan->alamat ?? '-' }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <!-- Footer Links Start -->
                <div class="footer-links">
                    <h3>Pintasan</h3>
                    <ul>
                        <li><a href="#">Berita</a></li>
                        @foreach ($menus as $menu)
                        <li><a href="{{ $menu->link }}">{{ $menu->nama_menu }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- Footer Links End -->
            </div>

            <div class="col-md-3">
                <!-- Footer Links Start -->
                <div class="footer-links">
                    <h3>Kebijakan</h3>
                    <ul>
                        <li><a href="#">Persyaratan Layanan</a></li>
                        <li><a href="#">Kebijakan Privasi</a></li>
                    </ul>
                </div>
                <!-- Footer Links End -->
            </div>
            
            <div class="col-md-3">
                <div class="footer-links">
                    <h3>Kontak</h3>
                    <ul>
                        <li><a href="#">{{ $pengaturan->no_tlp ?? '-'}}</a></li>
                        <li><a href="#" class="text-lowercase">{{ $pengaturan->email ?? '-' }}</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Footer Copyright Section Start -->
        <div class="footer-copyright">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <!-- Footer Copyright Start -->
                    <div class="footer-copyright-text">
                        <p>Copyright © {{ date('Y') }} All Rights Reserved.</p>
                    </div>
                    <!-- Footer Copyright End -->
                </div>

                <div class="col-lg-6 col-md-6">
                    <!-- Footer Social Link Start -->
                    <div class="footer-social-links">
                        <ul>
                            <li><a href="{{ $pengaturan->facebook ?? '-' }}"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="{{ $pengaturan->instagram ?? '-' }}"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="{{ $pengaturan->youtube ?? '-' }}"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <!-- Footer Social Link End -->
                </div>
            </div>
        </div>
        <!-- Footer Copyright Section End -->
    </div>
</footer>   