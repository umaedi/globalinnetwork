 @isset($search)
     <h3 class="mb-5">Hasil Pencarian dari "{{ $search }}"</h3>
 @endisset

 <div class="baru-news-section">
     @forelse ($posts as $item)
         <a href="/berita/{{ $item->slug }}" class="text-dark">
             <div class="baru-news-item">
                 <img lazy="loading"
                     src="{{ route('stream', ['path' => 'berita|thumbnail|utama|'.$item->created_at->format('Y'), 'filename' => $item->thumbnail]) }}"
                     alt="{{ $item->judul }}" class="baru-editor-image">
                 <div class="baru-news-content">
                     <div class="d-flex justify-content-start align-items-center">
                         <span
                             class="badge bg-kustom me-2">{{ $item->category->nama_kategori ?? 'tanpa kategori' }}</span>
                         <div class="text-start me-3">
                             <i class="fa fa-eye"></i> {{ $item->views }}
                         </div>

                     </div>

                     <div class="baru-news-title text-break">{{ $item->judul }}</div>

                     <div class="d-flex align-items-center mb-2">
                         <span class="text-muted me-2">{{ $item->user->name ?? 'Admin' }}</span>
                         <span class="text-muted">
                             <i class="far fa-clock me-1"></i>
                             @if ($item->created_at->isToday())
                                 {{ $item->created_at->locale('id')->diffForHumans() }}
                             @else
                                 {{ \Carbon\Carbon::parse($item->created_at)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}
                             @endif

                         </span>
                     </div>

                 </div>

             </div>
         </a>

     @empty
         {{-- <div class="col-md-6">
         <div class="blog-item wow fadeInUp">
             <h5>Data Tidak Ditemukan</h5>
         </div>
     </div> --}}

         <div class="d-flex justify-content-center align-items-center">
             <div class="col-md-6 text-center">
                 <div class="blog-item wow fadeInUp">
                     <img src="/img/nodata.png" alt="Data Tidak Ditemukan" class="img-fluid"
                         style="max-width: 100%; height: auto;">
                     <h5>Data Tidak Ditemukan</h5>
                     <p>Silakan coba dengan kata kunci lain atau periksa kembali data Anda.</p>
                 </div>
             </div>
         </div>
     @endforelse
 </div>
 {{-- {{ $posts->links('components.pagination') }} --}}
