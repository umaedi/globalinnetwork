<style>
    .judu-berita {
        display: -webkit-box;
        -webkit-line-clamp: 2; /* Maksimal 2 baris */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        font-weight: 600;
    }
    .excrept {
        display: -webkit-box;
        -webkit-line-clamp: 3; /* Maksimal 2 baris */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .judu-post-lainnya {
        display: -webkit-box;
        -webkit-line-clamp: 3; /* Maksimal 2 baris */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        font-weight: 600;
    }

    .anak-kategori img{
        width: 80px;
        height: 6rem;
        object-fit: cover
    }

    .date-view {
        font-size: 12px;
        color: rgba(var(--bs-primary-rgb))
    }
</style>
@forelse ($categories as $category)
<div class="col-md-6">
    <div class="card border-0 shadow-sm mb-3">
        <div class="card-body">
            @php
                $bigPost = $category->posts->first();
                $otherPosts = $category->posts->slice(1);
            @endphp

            @if ($bigPost)
            <div class="mb-3">
                <img src="{{ route('stream', ['path' => 'berita|thumbnail|medium|' . $bigPost->created_at->format('Y'),'filename' =>  $bigPost->thumbnail]) }}" loading="lazy" class="card-img-top" alt="{{ $bigPost->judul }}">
                <div class="card-body">
                    <div class="d-flex mb-1 gap-3">
                        <span class="badge bg-primary">{{ $category->nama_kategori }}</span>
                        <span class="text-muted text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M13 7h-2v5.414l3.293 3.293 1.414-1.414L13 11.586z"></path></svg>
                            {{ \Carbon\Carbon::parse($bigPost->created_at)->locale('id_ID')->isoFormat('dddd, D MMMM YYYY') }}</span>
                    </div>
                    <h5 class="card-title judu-berita"><a href="{{ route('berita.show', ['slug' => $bigPost->slug]) }}">{{ $bigPost->judul }}</a></h5>
                    <p class="excrept">{{ $bigPost->excrept }}</p>
                    <div class="d-flex align-items-center">
                        <img src="#" lazy="loading" width="40" class="rounded-circle avatar" alt="">
                        <svg class="verified-badge ms-1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" style="fill: #3498db;transform: ;msFilter:;"><path d="M4.035 15.479A3.976 3.976 0 0 0 4 16c0 2.378 2.138 4.284 4.521 3.964C9.214 21.198 10.534 22 12 22s2.786-.802 3.479-2.036C17.857 20.284 20 18.378 20 16c0-.173-.012-.347-.035-.521C21.198 14.786 22 13.465 22 12s-.802-2.786-2.035-3.479C19.988 8.347 20 8.173 20 8c0-2.378-2.143-4.288-4.521-3.964C14.786 2.802 13.466 2 12 2s-2.786.802-3.479 2.036C6.138 3.712 4 5.622 4 8c0 .173.012.347.035.521C2.802 9.214 2 10.535 2 12s.802 2.786 2.035 3.479zm1.442-5.403 1.102-.293-.434-1.053A1.932 1.932 0 0 1 6 8c0-1.103.897-2 2-2 .247 0 .499.05.73.145l1.054.434.293-1.102a1.99 1.99 0 0 1 3.846 0l.293 1.102 1.054-.434C15.501 6.05 15.753 6 16 6c1.103 0 2 .897 2 2 0 .247-.05.5-.145.73l-.434 1.053 1.102.293a1.993 1.993 0 0 1 0 3.848l-1.102.293.434 1.053c.095.23.145.483.145.73 0 1.103-.897 2-2 2-.247 0-.499-.05-.73-.145l-1.054-.434-.293 1.102a1.99 1.99 0 0 1-3.846 0l-.293-1.102-1.054.434A1.935 1.935 0 0 1 8 18c-1.103 0-2-.897-2-2 0-.247.05-.5.145-.73l.434-1.053-1.102-.293a1.993 1.993 0 0 1 0-3.848z"></path><path d="m15.742 10.71-1.408-1.42-3.331 3.299-1.296-1.296-1.414 1.414 2.704 2.704z"></path></svg>
                        <div>
                            <div>{{ $bigPost->user->name ?? 'Admin' }}</div>
                            <div class="text-muted author">Author</div>
                        </div>
                        <div class="ms-auto"><a href="{{ route('berita.show', ['slug' => $bigPost->slug]) }}" class="text-primary">Readmore</a></div>
                    </div>
                </div>
                <hr>
            </div>
            @endif
            
            @foreach ($otherPosts as $post)
            <div class="anak-kategori d-flex align-items-center gap-3 mb-3">
                <img src="{{ route('stream', ['path' => 'berita|thumbnail|medium|' . $post->created_at->format('Y'),'filename' =>  $post->thumbnail]) }}" loading="lazy" class="anak-kategori rounded" alt="{{ $post->judul }}" width="80">
                <div class="d-flex flex-column">
                    <p class="mb-1 judu-post-lainnya"><a href="{{ route('berita.show', ['slug' => $post->slug]) }}">{{ $post->judul}}</a></p>
                    <div class="d-flex gap-2 text-muted">
                        <small class="date-view"><i class='bx bx-time-five'></i> {{ \Carbon\Carbon::parse($post->created_at)->locale('id_ID')->isoFormat('dddd, D MMMM YYYY') }}</small>
                        <small class="date-view"><i class='bx bx-happy-heart-eyes'></i> {{ $post->views }}</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@empty
    <p class="text-center">Belum ada berita.</p>
@endforelse