<div class="col-md-5">
    <img src="{{ route('stream', ['path' => 'berita|thumbnail|big|' . $beritaEkslusif->created_at->format('Y'),'filename' =>  $beritaEkslusif->thumbnail]) }}" 
         loading="lazy" class="img-fluid rounded-start w-100" alt="{{ $beritaEkslusif->judul }}">
</div>
<div class="col-md-7 d-flex flex-column">
    <div class="card-body d-flex flex-column h-100">
        <h5 class="card-title fw-bold"><a href="{{ route('berita.show', ['slug' => $beritaEkslusif->slug]) }}">{{ $beritaEkslusif->judul }}</a></h5>

        <!-- Excerpt hanya tampil di desktop -->
        <p class="d-none d-md-block text-muted text-italic" style="text-align: justify;">
            {!! $beritaEkslusif->excrept !!}
        </p>

        <!-- Author Tetap di Bawah -->
        <div class="d-flex align-items-center mt-auto">
            <img src="https://www.tanyabimo.id/uploads/avatars/avatar_6761212733643.webp" 
                 width="40" loading="lazy" class="rounded-circle me-2" alt="Author">
            <i class='bx bx-badge-check verified-badge'></i>
            <div>
                <div>{{ $beritaEkslusif->user->name ?? 'Admin' }}</div>
                <div class="text-muted author">Author</div>
            </div>
        </div>
    </div>
</div>
