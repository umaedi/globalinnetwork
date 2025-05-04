@extends('web.layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Logo</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Logo</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Approach Section Start -->
    <div class="about-approach">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <figure class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('img/logo/logo.png') }}" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!-- About Approach Section End -->
@endsection
