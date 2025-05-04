@extends('web.layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Layanan Publik</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Layanan Publik</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Blog Start -->
    <div class="page-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- FAQs Client Slider Start -->
                    <div class="faqs-client-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <!-- Client Slide Start -->
                                <div class="swiper-slide">
                                    <div class="project-detail-box mb-0">
                                        <!-- Project Detail Header Start -->
                                        <div class="project-detail-header">
                                            <div class="icon-box">
                                                <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                            </div>
                                            <div class="ms-2 project-detail-title">
                                                <h3>DISKOMINFO</h3>
                                            </div>
                                        </div>
                                        <!-- Project Detail Header End -->
                                    </div>
                                </div>
                                <!-- Client Slide End -->

                                <!-- Client Slide Start -->
                                <div class="swiper-slide">
                                    <div class="project-detail-box mb-0">
                                        <!-- Project Detail Header Start -->
                                        <div class="project-detail-header">
                                            <div class="icon-box">
                                                <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                            </div>
                                            <div class="ms-2 project-detail-title">
                                                <h3>DINSOS</h3>
                                            </div>
                                        </div>
                                        <!-- Project Detail Header End -->
                                    </div>
                                </div>
                                <!-- Client Slide End -->

                                <!-- Client Slide Start -->
                                <div class="swiper-slide">
                                    <div class="project-detail-box mb-0">
                                        <!-- Project Detail Header Start -->
                                        <div class="project-detail-header">
                                            <div class="icon-box">
                                                <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                            </div>
                                            <div class="ms-2 project-detail-title">
                                                <h3>DISDUKCAPIL</h3>
                                            </div>
                                        </div>
                                        <!-- Project Detail Header End -->
                                    </div>
                                </div>
                                <!-- Client Slide End -->

                                <!-- Client Slide Start -->
                                <div class="swiper-slide">
                                    <div class="project-detail-box mb-0">
                                        <!-- Project Detail Header Start -->
                                        <div class="project-detail-header">
                                            <div class="icon-box">
                                                <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                            </div>
                                            <div class="ms-2 project-detail-title">
                                                <h3>INSPEKTORAT</h3>
                                            </div>
                                        </div>
                                        <!-- Project Detail Header End -->
                                    </div>
                                </div>
                                <!-- Client Slide End -->

                                <!-- Client Slide Start -->
                                <div class="swiper-slide">
                                    <div class="project-detail-box mb-0">
                                        <!-- Project Detail Header Start -->
                                        <div class="project-detail-header">
                                            <div class="icon-box">
                                                <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                            </div>
                                            <div class="ms-2 project-detail-title">
                                                <h3>BAPENDA</h3>
                                            </div>
                                        </div>
                                        <!-- Project Detail Header End -->
                                    </div>
                                </div>
                                <!-- Client Slide End -->

                                <!-- Client Slide Start -->
                                <div class="swiper-slide">
                                    <div class="project-detail-box mb-0">
                                        <!-- Project Detail Header Start -->
                                        <div class="project-detail-header">
                                            <div class="icon-box">
                                                <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                            </div>
                                            <div class="ms-2 project-detail-title">
                                                <h3>DISHUB</h3>
                                            </div>
                                        </div>
                                        <!-- Project Detail Header End -->
                                    </div>
                                </div>
                                <!-- Client Slide End -->

                                <!-- Client Slide Start -->
                                <div class="swiper-slide">
                                    <div class="project-detail-box mb-0">
                                        <!-- Project Detail Header Start -->
                                        <div class="project-detail-header">
                                            <div class="icon-box">
                                                <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                            </div>
                                            <div class="ms-2 project-detail-title">
                                                <h3>DINKES</h3>
                                            </div>
                                        </div>
                                        <!-- Project Detail Header End -->
                                    </div>
                                </div>
                                <!-- Client Slide End -->

                                <!-- Client Slide Start -->
                                <div class="swiper-slide">
                                    <div class="project-detail-box mb-0">
                                        <!-- Project Detail Header Start -->
                                        <div class="project-detail-header">
                                            <div class="icon-box">
                                                <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                            </div>
                                            <div class="ms-2 project-detail-title">
                                                <h3>DISPORA</h3>
                                            </div>
                                        </div>
                                        <!-- Project Detail Header End -->
                                    </div>
                                </div>
                                <!-- Client Slide End -->

                            </div>
                        </div>
                    </div>
                    <!-- FAQs Client Slider End -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <!-- Service Sidebar Start -->
                    <div class="service-sidebar">
                        <!-- Sidebar Cta Box Start -->
                        <div class="sidebar-cta-box wow fadeInUp mb-4" data-wow-delay="0.25s">
                            <!-- Cta Content Start -->
                            <div class="sidebar-cta-content">
                                <h3>Cari Layanan</h3>
                            </div>
                            <!-- Cta Content End -->

                            <div class="input-group">
                                <input type="text" name="search" class="tuba-form-control form-control"
                                    placeholder="Cari layanan...">
                                <button class="tuba-btn-default" type="submit">Cari</button>
                            </div>
                        </div>
                        <!-- Sidebar Cta Box End -->

                        <!-- Service Categories List Start -->
                        <div class="service-catagery-list wow fadeInUp">
                            <h3>Kategori</h3>
                            <ul>
                                <li><a href="#">Semua</a></li>
                                <li><a href="#">Umum</a></li>
                                <li><a href="#">Kepegawaian</a></li>
                            </ul>
                        </div>
                        <!-- Service Categories List End -->
                    </div>
                    <!-- Service Sidebar End -->
                </div>

                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6 my-3">
                            <!-- Approach item Start -->
                            <div class="bg-gray approach-item approach-box-3 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="approach-header">
                                    <!-- Approach Body Start -->
                                    <div class="approach-body">
                                        <!-- Approach Content Start -->
                                        <div class="approach-content">
                                            <h3>Pengajuan Web Desa</h3>
                                        </div>
                                        <!-- Approach Content End -->

                                        <!-- Approach Tags Start -->
                                        <div class="approach-tags">
                                            <a href="#">DISKOMINFO</a>
                                        </div>
                                        <!-- Approach Tags End -->
                                    </div>
                                    <!-- Approach Body End -->

                                    <!-- Approach Btn Start -->
                                    <div class="approach-btn">
                                        <a href="#" class="readmore-btn"><img
                                                src="{{ asset('img/icon-arrow.svg') }}" alt=""></a>
                                    </div>
                                    <!-- Approach Btn End -->
                                </div>
                            </div>
                            <!-- Approach item End -->
                        </div>

                        <div class="col-md-6 my-3">
                            <!-- Approach item Start -->
                            <div class="bg-gray approach-item approach-box-3 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="approach-header">
                                    <!-- Approach Body Start -->
                                    <div class="approach-body">
                                        <!-- Approach Content Start -->
                                        <div class="approach-content">
                                            <h3>Permohonan Pembuatan KTP</h3>
                                        </div>
                                        <!-- Approach Content End -->

                                        <!-- Approach Tags Start -->
                                        <div class="approach-tags">
                                            <a href="#">DISDUKCAPIL</a>
                                        </div>
                                        <!-- Approach Tags End -->
                                    </div>
                                    <!-- Approach Body End -->

                                    <!-- Approach Btn Start -->
                                    <div class="approach-btn">
                                        <a href="#" class="readmore-btn"><img
                                                src="{{ asset('img/icon-arrow.svg') }}" alt=""></a>
                                    </div>
                                    <!-- Approach Btn End -->
                                </div>
                            </div>
                            <!-- Approach item End -->
                        </div>

                        <div class="col-md-6 my-3">
                            <!-- Approach item Start -->
                            <div class="bg-gray approach-item approach-box-3 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="approach-header">
                                    <!-- Approach Body Start -->
                                    <div class="approach-body">
                                        <!-- Approach Content Start -->
                                        <div class="approach-content">
                                            <h3>Permohonan Pembuatan KK</h3>
                                        </div>
                                        <!-- Approach Content End -->

                                        <!-- Approach Tags Start -->
                                        <div class="approach-tags">
                                            <a href="#">DISDUKCAPIL</a>
                                        </div>
                                        <!-- Approach Tags End -->
                                    </div>
                                    <!-- Approach Body End -->

                                    <!-- Approach Btn Start -->
                                    <div class="approach-btn">
                                        <a href="#" class="readmore-btn"><img
                                                src="{{ asset('img/icon-arrow.svg') }}" alt=""></a>
                                    </div>
                                    <!-- Approach Btn End -->
                                </div>
                            </div>
                            <!-- Approach item End -->
                        </div>

                        <div class="col-md-6 my-3">
                            <!-- Approach item Start -->
                            <div class="bg-gray approach-item approach-box-3 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="approach-header">
                                    <!-- Approach Body Start -->
                                    <div class="approach-body">
                                        <!-- Approach Content Start -->
                                        <div class="approach-content">
                                            <h3>Mutasi Penduduk</h3>
                                        </div>
                                        <!-- Approach Content End -->

                                        <!-- Approach Tags Start -->
                                        <div class="approach-tags">
                                            <a href="#">DISDUKCAPIL</a>
                                        </div>
                                        <!-- Approach Tags End -->
                                    </div>
                                    <!-- Approach Body End -->

                                    <!-- Approach Btn Start -->
                                    <div class="approach-btn">
                                        <a href="#" class="readmore-btn"><img
                                                src="{{ asset('img/icon-arrow.svg') }}" alt=""></a>
                                    </div>
                                    <!-- Approach Btn End -->
                                </div>
                            </div>
                            <!-- Approach item End -->
                        </div>

                        <div class="col-md-6 my-3">
                            <!-- Approach item Start -->
                            <div class="bg-gray approach-item approach-box-3 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="approach-header">
                                    <!-- Approach Body Start -->
                                    <div class="approach-body">
                                        <!-- Approach Content Start -->
                                        <div class="approach-content">
                                            <h3>Kutipan Akta Kelahiran</h3>
                                        </div>
                                        <!-- Approach Content End -->

                                        <!-- Approach Tags Start -->
                                        <div class="approach-tags">
                                            <a href="#">DISDUKCAPIL</a>
                                        </div>
                                        <!-- Approach Tags End -->
                                    </div>
                                    <!-- Approach Body End -->

                                    <!-- Approach Btn Start -->
                                    <div class="approach-btn">
                                        <a href="#" class="readmore-btn"><img
                                                src="{{ asset('img/icon-arrow.svg') }}" alt=""></a>
                                    </div>
                                    <!-- Approach Btn End -->
                                </div>
                            </div>
                            <!-- Approach item End -->
                        </div>

                        <div class="col-md-6 my-3">
                            <!-- Approach item Start -->
                            <div class="bg-gray approach-item approach-box-3 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="approach-header">
                                    <!-- Approach Body Start -->
                                    <div class="approach-body">
                                        <!-- Approach Content Start -->
                                        <div class="approach-content">
                                            <h3>Kutipan Akta Kematian</h3>
                                        </div>
                                        <!-- Approach Content End -->

                                        <!-- Approach Tags Start -->
                                        <div class="approach-tags">
                                            <a href="#">DISDUKCAPIL</a>
                                        </div>
                                        <!-- Approach Tags End -->
                                    </div>
                                    <!-- Approach Body End -->

                                    <!-- Approach Btn Start -->
                                    <div class="approach-btn">
                                        <a href="#" class="readmore-btn"><img
                                                src="{{ asset('img/icon-arrow.svg') }}" alt=""></a>
                                    </div>
                                    <!-- Approach Btn End -->
                                </div>
                            </div>
                            <!-- Approach item End -->
                        </div>

                        <div class="col-md-6 my-3">
                            <!-- Approach item Start -->
                            <div class="bg-gray approach-item approach-box-3 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="approach-header">
                                    <!-- Approach Body Start -->
                                    <div class="approach-body">
                                        <!-- Approach Content Start -->
                                        <div class="approach-content">
                                            <h3>Kutipan Akta Perceraian</h3>
                                        </div>
                                        <!-- Approach Content End -->

                                        <!-- Approach Tags Start -->
                                        <div class="approach-tags">
                                            <a href="#">DISDUKCAPIL</a>
                                        </div>
                                        <!-- Approach Tags End -->
                                    </div>
                                    <!-- Approach Body End -->

                                    <!-- Approach Btn Start -->
                                    <div class="approach-btn">
                                        <a href="#" class="readmore-btn"><img
                                                src="{{ asset('img/icon-arrow.svg') }}" alt=""></a>
                                    </div>
                                    <!-- Approach Btn End -->
                                </div>
                            </div>
                            <!-- Approach item End -->
                        </div>

                        <div class="col-md-6 my-3">
                            <!-- Approach item Start -->
                            <div class="bg-gray approach-item approach-box-3 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="approach-header">
                                    <!-- Approach Body Start -->
                                    <div class="approach-body">
                                        <!-- Approach Content Start -->
                                        <div class="approach-content">
                                            <h3>Kutipan Akta Perkawinan</h3>
                                        </div>
                                        <!-- Approach Content End -->

                                        <!-- Approach Tags Start -->
                                        <div class="approach-tags">
                                            <a href="#">DISDUKCAPIL</a>
                                        </div>
                                        <!-- Approach Tags End -->
                                    </div>
                                    <!-- Approach Body End -->

                                    <!-- Approach Btn Start -->
                                    <div class="approach-btn">
                                        <a href="#" class="readmore-btn"><img
                                                src="{{ asset('img/icon-arrow.svg') }}" alt=""></a>
                                    </div>
                                    <!-- Approach Btn End -->
                                </div>
                            </div>
                            <!-- Approach item End -->
                        </div>

                        <div class="col-md-6 my-3">
                            <!-- Approach item Start -->
                            <div class="bg-gray approach-item approach-box-3 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="approach-header">
                                    <!-- Approach Body Start -->
                                    <div class="approach-body">
                                        <!-- Approach Content Start -->
                                        <div class="approach-content">
                                            <h3>Kartu Identitas Anak (KIA)</h3>
                                        </div>
                                        <!-- Approach Content End -->

                                        <!-- Approach Tags Start -->
                                        <div class="approach-tags">
                                            <a href="#">DISDUKCAPIL</a>
                                        </div>
                                        <!-- Approach Tags End -->
                                    </div>
                                    <!-- Approach Body End -->

                                    <!-- Approach Btn Start -->
                                    <div class="approach-btn">
                                        <a href="#" class="readmore-btn"><img
                                                src="{{ asset('img/icon-arrow.svg') }}" alt=""></a>
                                    </div>
                                    <!-- Approach Btn End -->
                                </div>
                            </div>
                            <!-- Approach item End -->
                        </div>

                        <div class="col-md-6 my-3">
                            <!-- Approach item Start -->
                            <div class="bg-gray approach-item approach-box-3 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="approach-header">
                                    <!-- Approach Body Start -->
                                    <div class="approach-body">
                                        <!-- Approach Content Start -->
                                        <div class="approach-content">
                                            <h3>Alat Bantu Disabilitas</h3>
                                        </div>
                                        <!-- Approach Content End -->

                                        <!-- Approach Tags Start -->
                                        <div class="approach-tags">
                                            <a href="#">DINSOS</a>
                                        </div>
                                        <!-- Approach Tags End -->
                                    </div>
                                    <!-- Approach Body End -->

                                    <!-- Approach Btn Start -->
                                    <div class="approach-btn">
                                        <a href="#" class="readmore-btn"><img
                                                src="{{ asset('img/icon-arrow.svg') }}" alt=""></a>
                                    </div>
                                    <!-- Approach Btn End -->
                                </div>
                            </div>
                            <!-- Approach item End -->
                        </div>

                        <div class="col-lg-12">
                            <!-- Page Pagination Start -->
                            <div class="page-pagination wow fadeInUp" data-wow-delay="0.5s">
                                <ul class="pagination">
                                    <li><a href="#"><i class="fa-solid fa-arrow-left-long"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa-solid fa-arrow-right-long"></i></a></li>
                                </ul>
                            </div>
                            <!-- Page Pagination End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Blog End -->
@endsection
