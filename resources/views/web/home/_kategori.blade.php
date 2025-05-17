@forelse ($kategori as $item)
<a href="/kategori/{{ $item->slug }}">
<div class="d-flex align-items-center justify-content-between gap-3">
        <p>{{ $item->nama_kategori }}</p>
        <span class="badge bg-primary">{{ $item->posts_count }}</span>
    </div>
</a>
@empty
    
@endforelse