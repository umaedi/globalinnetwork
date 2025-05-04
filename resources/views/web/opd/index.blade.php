@extends('web.layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">OPD</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">OPD</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Project Start -->
    <div class="page-project">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!-- Choose Our Work Nav start -->
                    <div class="project-nav wow fadeInUp" data-wow-delay="0.25s">
                        <ul>
                            <li><a href="#" class="active-btn" data-filter="*">Semua</a></li>
                            <li><a href="#" data-filter=".dinas">Dinas</a></li>
                            <li><a href="#" data-filter=".bagian">Bagian</a></li>
                        </ul>
                    </div>
                    <!-- Choose Our Work Nav End -->
                </div>

                <div class="col-lg-12">
                    <!-- Work Item Boxes start -->
                    <div class="row project-item-boxes">
                        <div class="col-md-4 project-item-box my-2 dinas">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>DISDUKCAPIL</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 dinas">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>DPMPTSP</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 dinas">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>DISKOMINFO</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 dinas">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>DISDIK</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 dinas">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>DISPARBUD</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 dinas">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>DINAS PERIKANAN</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 dinas">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>DINAS PERDAGANGAN</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 dinas">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>DINAS PUPR</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 dinas">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>DINAS KETAHANAN PANGAN</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 dinas">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>DINAS LINGKUNGAN HIDUP</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 dinas">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>DINAS PMK</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 dinas">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>DINAS PERHUBUNGAN</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 dinas">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>DISPORA</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 dinas">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>DINAS KOPERASI DAN UMKM</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 dinas">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>DINAS PERTANIAN</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 dinas">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>DINAS TENAGA KERJA DAN TRASMIGRASI</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 dinas">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>DISPURSIP</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 dinas">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>Dinas Perumahan Rakyat dan Kawasan Permukiman	</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 dinas">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>DINSOS</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 dinas">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>DINKES</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 dinas">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>DINAS PPKB</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 dinas">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>DINAS DPPPA</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 dinas">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>INSPEKTORAT</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 dinas">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>DPRD</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 dinas">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>Badan Pendapatan Daerah</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 dinas">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>Badan Kepegawaian, Pendidikan dan Pelatihan</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 dinas">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>Badan Penanggulangan Bencana Daerah</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 dinas">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>Badan Perencanaan Pembangunan Daerah</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 dinas">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>Badan Pengelolaan Keuangan dan Aset Daerah</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 dinas">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>Badan Kesatuan Bangsa dan Politik</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 bagian">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>BAG. UMUM</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 bagian">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>BAG. HUKUM</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 bagian">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>BAG. KERJASAMA</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 bagian">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>BAG. KESEJAHTERAAN SOSIAL</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 bagian">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>BAG. ORGANISASI</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 bagian">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>BAG. PERENCANAAN DAN KEUANGAN</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 bagian">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>BAG. PEREKONOMIAN</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 bagian">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>BAG. PEMERINTAH DAN OTONOMI DAERAH</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 bagian">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>BAG. PROTOKOL</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 bagian">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>BAG. SUMBER DAYA ALAM</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 bagian">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>BAG. PENGADAAN BARANG DAN JASA</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 project-item-box my-2 bagian">
                            <a href="javascript:void(0)" class="openSidebarBtn" onclick="openSidebar(event)">
                                <div class="bg-gray ms-0  process-step-item wow fadeInUp">
                                    <div class="step-item-number">
                                        <img src="{{ asset('img/logo/favicon.png') }}" alt="">
                                    </div>
                                    <div class="step-item-content">
                                        <h3>BAG. ADMINISTRASI DAN PEMBANGUNAN</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <!-- Work Item Boxes End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Project End -->

    <div id="sidebar" class="sidebar">
        <a href="javascript:void(0)" class="close-btn" id="closeSidebarBtn">&times;</a>
        <div class="container text-white">
            <h5 class="text-white mb-3">Dinas Komunikasi Dan Informatika</h5>
            <div class="mb-3">
                <p class="mb-0">Kepala Dinas: </p>
                <p class="mb-0">Sek. Dinas: </p>
            </div>
            <div class="mb-3">
                <h6 class="text-white">Kontak</h6>
                <p class="mb-0">Telp. (0726) 21416</p>
                <p class="mb-0">Email. kominfo@tulangbawangkab.go.id</p>
            </div>
            <div class="mb-3">
                <h6 class="text-white">Alamat</h6>
                <p>JL. Cemara Kompleks. perkantoran Pemda Menggala Kab. Tulang Bawang, Menggala Sel., Kec. Menggala, Kab.
                    Tulang Bawang, Lampung</p>
            </div>
            <a href="#" class="btn-default btn-signup">
                <span class="fs-6 text-black">Kunjungi Website</span>
            </a>
        </div>
    </div>
@endsection
@push('js')
    <script>
        function openSidebar(event) {
            document.getElementById('sidebar').classList.add('open-sidebar');
            document.addEventListener('click', outsideClickListener);
            event.stopPropagation();
        }

        function closeSidebar() {
            document.getElementById('sidebar').classList.remove('open-sidebar');
            document.removeEventListener('click', outsideClickListener);
        }

        function outsideClickListener(event) {
            const sidebar = document.getElementById('sidebar');
            if (!sidebar.contains(event.target) && !event.target.classList.contains('openSidebarBtn')) {
                closeSidebar();
            }
        }

        document.addEventListener('DOMContentLoaded', (event) => {
            document.getElementById('closeSidebarBtn').onclick = function() {
                closeSidebar();
            };
        });

        if ($(".project-item-boxes").length) {

            /* Init Isotope */
            var $menuitem = $(".project-item-boxes").isotope({
                itemSelector: ".project-item-box",
                // layoutMode: "masonry",
                // masonry: {
                // 	// use outer width of grid-sizer for columnWidth
                // 	columnWidth: 1,
                // }
            });

            /* Filter items on click */
            var $menudisesnav = $(".project-nav li a");
            $menudisesnav.on('click', function(e) {

                var filterValue = $(this).attr('data-filter');
                $menuitem.isotope({
                    filter: filterValue
                });

                $menudisesnav.removeClass("active-btn");
                $(this).addClass("active-btn");
                e.preventDefault();
            });
            $menuitem.isotope({
                filter: "*"
            });
        }
    </script>
@endpush
