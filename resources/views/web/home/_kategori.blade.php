@forelse ($kategori as $item)
<div class="d-flex align-items-center justify-content-between gap-3">
    <a href="/kategori/{{ $item->slug }}">
        <p>{{ $item->nama_kategori }}</p>
        <span class="badge bg-primary">{{ $item->posts_count }}</span>
    </a>
</div>
@empty
    
@endforelse