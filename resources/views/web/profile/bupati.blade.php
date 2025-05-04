@extends('web.layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Bupati</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Bupati</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Team Single Start -->
    <div class="page-team-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Team Member Details Start -->
                    <div class="team-member-details">
                        <!-- Team Member Image Start -->
                        <div class="team-member-image">
                            <figure class="image-anime">
                                <img src="{{ asset('img/bupati/pj-bupati-tuba.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- Team Member Image End -->

                        <!-- Team Member Intro Start -->
                        <div class="team-member-intro">
                            <!-- Team Member Title Start -->
                            <div class="team-member-title">
                                <h2 class="wow fadeInUp">Ir.Ferli Yuledi.,SP.,MM.,MT.</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.25s">PJ. BUPATI KABUPATEN TULANG BAWANG</p>
                            </div>
                            <!-- Team Member Title End -->
                        </div>
                        <!-- Team member Intro End -->
                    </div>
                    <!-- Team member Details End -->
                </div>

                <div class="col-lg-8">
                    <!-- Team member Content Start -->
                    <div class="team-member-content">
                        <!-- Team member Entry Start -->
                        <div class="team-member-entry">
                            <h2 class="text-anime-style-3">Tentang</h2>
                            <p class="wow fadeInUp">-</p>

                            {{-- <div class="team-member-Capabilities">
                                <h2 class="text-anime-style-3">Capaian</h2>

                                <ul class="wow fadeInUp" data-wow-delay="0.6s">
                                    <li>Advanced Financial Management and Analytical Expertise</li>
                                    <li>Mastery of Project and Program Management</li>
                                    <li>Expertise in Business Development and Market Expansion</li>
                                    <li>Data-Driven Decision Making and Digital Proficiency</li>
                                </ul>
                            </div> --}}

                        </div>
                        <!-- Team member Entry End -->
                    </div>
                    <!-- Team member Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Team Single End -->
@endsection
