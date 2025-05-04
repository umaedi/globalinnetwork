@extends('web.layouts.app')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Helpdesk</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">helpdesk</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="contact-us bg-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Contact Information Start -->
                        <div class="contact-information">
                            <!-- Contact Item Start -->
                            <div class="contact-info-item wow fadeInUp">
                                <div class="icon-box">
                                    <img src="{{ asset('img/icon-phone.svg') }}" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h3>Kontak</h3>
                                    <p>Telp. (0726) 7575156</p>
                                    <p>Fax. (0726) 7575156</p>
                                </div>
                            </div>
                            <!-- Contact Item End -->

                            <!-- Contact Item Start -->
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
                                <div class="icon-box">
                                    <img src="{{ asset('img/icon-email.svg') }}" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h3>Email</h3>
                                    <p>humastuba@yahoo.com</p>
                                    <p>kominfo@tulangbawangkab.go.id</p>
                                </div>
                            </div>
                            <!-- Contact Item End -->

                            <!-- Contact Item Start -->
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="icon-box">
                                    <img src="{{ asset('img/icon-location.svg') }}" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h3>Alamat</h3>
                                    <p>Jl. Cemara Lk. Gunung Sakti Kec. Menggala Selatan Kab. Tulang Bawang Propinsi Lampung
                                    </p>
                                </div>
                            </div>
                            <!-- Contact Item End -->
                        </div>
                        <!-- Contact Information End -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Us Form Start -->
        <div class="contact-us-form">
            <div class="container">
                <div class="row section-row align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Kontak Kami</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Hubungi Kami Lebih Dekat</h2>
                        </div>
                        <!-- Section Title End -->
                    </div>

                    <div class="col-lg-6 col-md-4">
                        <!-- Section Button Start -->
                        <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                            <a href="#" class="btn-default contact-btn">(0726) 7575156</a>
                        </div>
                        <!-- Section Button End -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <!-- Google Map Start -->
                        <div class="google-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d5831.841451457248!2d105.22045793002421!3d-4.495454493033037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1spemda%20tulang%20bawang!5e0!3m2!1sid!2sid!4v1731987615128!5m2!1sid!2sid"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <!-- Google Map End -->
                    </div>

                    <div class="col-lg-6">
                        <!-- Case Study Detail Box Start -->
                        <div class="case-study-detail-box wow fadeInUp">
                            <h3 class="mb-3">Buat Pengaduan</h3>

                            <!-- Case Study Detail Content Start -->
                            <div class="case-study-deatil-content">
                                <a href="https://www.lapor.go.id/instansi/pemerintah-kabupaten-tulang-bawang">
                                    <h3>SP4N LAPOR! TULANG BAWANG</h3>
                                    <p>Layanan pengaduan daerah</p>
                                </a>
                            </div>
                            <!-- Case Study Detail Item Start -->

                            <!-- Case Study Detail Content Start -->
                            <div class="case-study-deatil-content">
                                <a href="https://csirt.tulangbawangkab.go.id">
                                    <h3>CSIRT TULANG BAWANG</h3>
                                    <p>Layanan pengaduan siber</p>
                                </a>
                            </div>
                            <!-- Case Study Detail Item Start -->
                        </div>
                        <!-- Case Study Detail Box Start -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact InfUs Form End -->
    </div>
    <!-- Page Contact Us End -->
@endsection
