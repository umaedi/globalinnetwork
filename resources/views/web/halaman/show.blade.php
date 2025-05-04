@extends('web.layouts.app')
@push('css')
    <style>
        .service-entry img {
            border-radius: 30px
        }
    </style>
@endpush
@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                @section('page_title', $halaman->judul)
                <div class="page-header-box">
                    <h1 class="text-anime-style-3" data-cursor="-opaque">{{ $halaman->judul }}</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">home</a></li>
                            <li class="breadcrumb-item"><a href="/halaman">halaman</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ Str::limit($halaman->judul, 30, '...') }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="service-sidebar">
                    <div class="service-catagery-list wow fadeInUp">
                        <h3>Halaman lainnya</h3>
                        <ul>
                            @foreach ($halamanTerbaru as $item)
                            <li><a href="{{ $item->slug }}">{{ $item->judul }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="service-single-content">
                    <div class="service-entry">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            {!! $halaman->konten !!}
                        </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
