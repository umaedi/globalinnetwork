@extends('web.layouts.app')
@section('content')
<style>

/* // Large devices (desktops, 992px and up) */
    @media (min-width: 992px) { 
        .carousel-inner {
            height: 28rem;
        }

     }
    .carousel-inner img{
        height: 28rem;
        object-fit: cover;
    }
</style>
<section class="container my-4">
    <img src="{{ asset('assets/img/banner.webp') }}" loading="eager" alt="ekslusif" class="responsive mb-3" width="100%">
</section>
<section class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($posts as $index => $item)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <a href="{{ route('berita.show', ['slug' => $item->slug]) }}">
                                    <img src="{{ route('stream', ['path' => 'berita|thumbnail|medium|' . $item->created_at->format('Y'),'filename' =>  $item->thumbnail]) }}" loading="eager" class="d-block w-100 rounded" alt="{{ $item->judul }}">
                                </a>
                                <div class="carousel-caption d-flex align-items-end justify-content-center">
                                    <a href="{{ route('berita.show', ['slug' => $item->slug]) }}">
                                        <h5 class="text-white judul-ekslusif">{{ $item->judul }}</h5>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                
            </div>
        </div>
        <div class="col-md-4" id="section-trending">
            <div class="card border-0 shadow-sm trending">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <span class="pip"></span>
                        <strong class="fs-5">Trending</strong>
                    </div>
                    <a href="#" class="text-primary text-decoration-none fw-semibold">Lihat lainnya <i class='bx bx-chevron-right'></i></a>
                </div>
                <div class="card-body height-content" id="trending">
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container mt-4" id="section-pilihan-editor">
    <div class="card-header bg-white d-flex justify-content-between align-items-center mb-3">
        <div class="d-flex align-items-center">
            <span class="pip"></span>
            <strong class="fs-5">Pilihan editor</strong>
        </div>
        <a href="#" class="text-primary text-decoration-none fw-semibold">Lihat lainnya <i class='bx bx-chevron-right'></i></a>
    </div>
    <div id="pilihanEditor">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0" aria-hidden="true">
                    <div class="card-body">
                      <h5 class="card-title placeholder-glow">
                        <span class="placeholder col-6"></span>
                      </h5>
                      <p class="card-text placeholder-glow">
                        <span class="placeholder col-7"></span>
                        <span class="placeholder col-4"></span>
                        <span class="placeholder col-4"></span>
                        <span class="placeholder col-6"></span>
                        <span class="placeholder col-8"></span>
                      </p>
                      <a href="#" tabindex="-1" class="btn btn-danger disabled placeholder col-6"></a>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0" aria-hidden="true">
                    <div class="card-body">
                      <h5 class="card-title placeholder-glow">
                        <span class="placeholder col-6"></span>
                      </h5>
                      <p class="card-text placeholder-glow">
                        <span class="placeholder col-7"></span>
                        <span class="placeholder col-4"></span>
                        <span class="placeholder col-4"></span>
                        <span class="placeholder col-6"></span>
                        <span class="placeholder col-8"></span>
                      </p>
                      <a href="#" tabindex="-1" class="btn btn-danger disabled placeholder col-6"></a>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0" aria-hidden="true">
                    <div class="card-body">
                      <h5 class="card-title placeholder-glow">
                        <span class="placeholder col-6"></span>
                      </h5>
                      <p class="card-text placeholder-glow">
                        <span class="placeholder col-7"></span>
                        <span class="placeholder col-4"></span>
                        <span class="placeholder col-4"></span>
                        <span class="placeholder col-6"></span>
                        <span class="placeholder col-8"></span>
                      </p>
                      <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-6"></a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</section>

<section class="container mt-4" id="section-berita-terbaru">
    <div class="row">
        <div class="col-md-8">
            <div class="card-header bg-white d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <span class="pip"></span>
                    <strong class="fs-5">Berita terbaru</strong>
                </div>
                <a href="/berita" class="text-primary text-decoration-none fw-semibold">Lihat lainnya <i class='bx bx-chevron-right'></i></a>
            </div>
            <div class="row" id="beritaTerbaru">
                <div class="col-md-4">
                    <div class="card border-0" aria-hidden="true">
                        <div class="card-body">
                            <h5 class="card-title placeholder-glow">
                            <span class="placeholder col-6"></span>
                            </h5>
                            <p class="card-text placeholder-glow">
                            <span class="placeholder col-7"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-6"></span>
                            <span class="placeholder col-8"></span>
                            </p>
                            <a href="#" tabindex="-1" class="btn btn-danger disabled placeholder col-6"></a>
                        </div>
                        </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0" aria-hidden="true">
                        <div class="card-body">
                            <h5 class="card-title placeholder-glow">
                            <span class="placeholder col-6"></span>
                            </h5>
                            <p class="card-text placeholder-glow">
                            <span class="placeholder col-7"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-6"></span>
                            <span class="placeholder col-8"></span>
                            </p>
                            <a href="#" tabindex="-1" class="btn btn-danger disabled placeholder col-6"></a>
                        </div>
                        </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0" aria-hidden="true">
                        <div class="card-body">
                            <h5 class="card-title placeholder-glow">
                            <span class="placeholder col-6"></span>
                            </h5>
                            <p class="card-text placeholder-glow">
                            <span class="placeholder col-7"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-6"></span>
                            <span class="placeholder col-8"></span>
                            </p>
                            <a href="#" tabindex="-1" class="btn btn-danger disabled placeholder col-6"></a>
                        </div>
                        </div>
                </div>
            </div>
        </div>
        
        <!-- Trending topik -->
        <div class="col-md-4">
            <!-- Kategori -->
            <div class="card-header bg-white d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <span class="pip"></span>
                    <strong class="fs-5">Kategori</strong>
                </div>
                <a href="#" class="text-primary text-decoration-none fw-semibold">Lihat lainnya <i class='bx bx-chevron-right'></i></a>
            </div>
            <div class="card border-0 shadow-sm">
                <div class="card-body" id="kategori">
                   
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('js')
    <script type="text/javascript">
    $(document).ready(() => {
        trendingTopik();

        let pilihanEditorObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    getPilihanEditor();
                    pilihanEditorObserver.unobserve(entry.target);
                }
            });
        });

        let beritaTerbaruObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    getBeritaTerbaru();
                    beritaTerbaruObserver.unobserve(entry.target);
                }
            });
        });

        let pilihanEditor = document.getElementById('section-pilihan-editor');
        let beritaTerbaru = document.getElementById('section-berita-terbaru');

        pilihanEditorObserver.observe(pilihanEditor);
        beritaTerbaruObserver.observe(beritaTerbaru);
    });

    async function trendingTopik()
    {
        var param = {
            url: "{{ url()->current() }}",
            method: "GET",
            data: {
                load: 'trending-topik'
            }
        }

        await transAjax(param).then((result) => {
            $('#trending').html(result);
        }).catch((err) => {
            console.log(err);
        });
    }

    async function getPilihanEditor()
    {
        console.log('pilihan editor');
        {
            var param = {
                url: "{{ url()->current() }}",
                method: "GET",
                data: {
                    load: 'pilihan-editor'
                }
            }

            await transAjax(param).then((result) => {
                $('#pilihanEditor').html(result);
            }).catch((err) => {
                console.log(err);
            });
        }
    }

    async function getBeritaTerbaru()
    {
        console.log('berita terbaru');
         {
            var param = {
                url: "{{ url()->current() }}",
                method: "GET",
                data: {
                    load: 'berita-terbaru'
                }
            }

            await transAjax(param).then((result) => {
                $('#beritaTerbaru').html(result);
                kategori();
            }).catch((err) => {
                console.log(err);
            });
        }
    }

    async function kategori()
    {
        var param = {
            url: "{{ url()->current() }}",
            method: "GET",
            data: {
                load: 'kategori'
            }
        }

        await transAjax(param).then((result) => {
            $('#kategori').html(result);
        }).catch((err) => {
            console.log(err);
        });
    }
    </script>
@endpush