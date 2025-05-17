<style>
    .judul-berita {
        display: -webkit-box;
        -webkit-line-clamp: 3; /* Maksimal 2 baris */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        font-weight: 600;
    }

    .thumbnail {
        width: 10rem;
        height: 10rem;
        object-fit: cover;
        border-radius: 6px;
    }
</style>    
@forelse ($posts as $item)
<div class="d-flex gap-3 list-berita">
    <img class="thumbnail" src="{{ route('stream', ['path' => 'berita|thumbnail|small|'. $item->created_at->format('Y'), 'filename' => $item->thumbnail]) }}" class="rounded ms-3" alt="gambar">
    <div class="flex-grow-1">
        <a href="{{ route('berita.show', ['slug' => $item->slug]) }}">
            <h6 class="fw-bold judul-berita">{{ $item->judul }}</h6>
        </a>
        <p class="excrept">{!! Str::limit($item->body, 200, '...') !!}</p>
        <div class="d-flex align-items-center text-muted">
            <img src="{{ asset('favicon.png') }}" width="15px" class="rounded-circle me-1" alt="logo">
            <span class="small fw-semibold">GlobalNetwork</span>
            <i class='bx bx-badge-check text-primary ms-1'></i>
        </div>
    </div>
</div>
<hr>
@empty
    <h3>Data not found</h3>
@endforelse
{{ $posts->links('components.pagination') }}