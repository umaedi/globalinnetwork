@extends('web.layouts.app')
@push('css')
    <style>
        .text-break {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
@endpush
@section('content')
<section class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <div class="mb-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/" class="text-muted text-decoration-none">Beranda</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $post->category->nama_kategori }}</li>
                    </ol>
                </nav>
                @section('page_title', $post->judul)
                <h3 class="fw-bold">{{ $post->judul }}</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow-sm mb-3">
                        @section('page_image', route('stream', ['path' => 'berita|thumbnail|medium|'.$post->created_at->format('Y'), 'filename' => $post->thumbnail]))
                        <picture>
                            <img src="{{ route('stream', ['path' => 'berita|thumbnail|big|'.$post->created_at->format('Y'), 'filename' => $post->thumbnail]) }}" lazy="loading" class="card-img-top" alt="Berita">
                        </picture>
                        <small class="text-muted text-center">{{ $post->caption_thumbnail }}</small>
                        @section('page_description', $post->caption_thumbnail ?? $post->judul)
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <img src="{{ $post->user->avatar }}" width="40" class="rounded-circle avatar" alt="">
                                <i class='bx bx-badge-check verified-badge'></i>
                                <div>
                                    <div>{{ $post->user->name }}</div>
                                    <div class="text-muted author">{{ $post->user->role }}</div>
                                </div>
                                <span class="ms-auto bx-icon-size">
                                    <a href="//api.whatsapp.com/send?text={{ urlencode(url($post->slug)) }}"><i class='bx bxl-whatsapp'></i></a>
                                    <a href="//www.facebook.com/sharer.php?u={{ urlencode(url($post->slug)) }}"><i class='bx bxl-facebook-circle'></i></a>
                                    <a href="https://t.me/share/url?url={{ urlencode(url($post->slug)) }}"><i class='bx bxl-telegram' ></i></a>
                                    <a href="#komentar"><i class='bx bx-comment-dots text-danger'></i></a>
                                </span>
                            </div>
                            <hr>
                            <article class="konten">
                                {!! $post->body !!}
                            </article>
                        </div>
                    </div>
                    <div class="card border-0 shadow-sm mb-5" id="komentar">
                        <div class="card-header"><strong>Komentar</strong></div>
                        <div class="card-body text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" style="fill: #0d6efd;"><path d="M20 2H4c-1.103 0-2 .897-2 2v18l5.333-4H20c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zm0 14H6.667L4 18V4h16v12z"></path><circle cx="15" cy="10" r="2"></circle><circle cx="9" cy="10" r="2"></circle></svg>
                            <div>
                                <strong>Belum ada komentar</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Trending topik -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm mb-5 trending">
                <div class="card-header bg-white">
                    <div class="d-flex align-items-center">
                        <span class="pip"></span>
                        <strong class="fs-5">Trending topik</strong>
                    </div>
                </div>
                <div class="card-body" id="trending">
                    <p aria-hidden="true">
                        <span class="placeholder col-12"></span>
                      </p>
                      <a href="#" tabindex="-1" class="btn btn-danger disabled placeholder col-8" aria-hidden="true"></a>
                </div>
            </div>

            <!-- Kategori -->
    
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white mb-3">
                    <div class="d-flex align-items-center">
                        <span class="pip"></span>
                        <strong class="fs-5">Kategori</strong>
                    </div>
                </div>
                <div class="card-body"  id="kategori">
                    <p aria-hidden="true">
                        <span class="placeholder col-12"></span>
                      </p>
                      <a href="#" tabindex="-1" class="btn btn-danger disabled placeholder col-8" aria-hidden="true"></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('js')
<script type="text/javascript">
    $(document).ready(function() {
        trending()
    });

    async function trending() {
        var param = {
            url: '{{ url()->current() }}',
            method: 'GET',
            data: {
                load_type: 'trending',
            }
        }

        await transAjax(param).then((result) => {
            $('#trending').html(result);
            kategori();
        }).catch((err) => {
            console.log(err);
        })
    }

    async function kategori() {
        var param = {
            url: '{{ url()->current() }}',
            method: 'GET',
            data: {
                load_type: 'kategori',
            }
        }

        await transAjax(param).then((result) => {
            $('#kategori').html(result);
        }).catch((err) => {
            console.log(err);
        })
    }
</script>
@endpush
