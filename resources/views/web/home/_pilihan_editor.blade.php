<style>
    .pilihan-editor{
        font-size: 16px;
        display: -webkit-box;
        -webkit-line-clamp: 2; /* Maksimal 2 baris */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>
<div class="editor-slider">
    @forelse ($pilihanEditor as $item)
        <div class="card card border-0 shadow-sm editor-card">
            <img src="{{ route('stream', ['path' => 'berita|thumbnail|medium|' . $item->created_at->format('Y'),'filename' =>  $item->thumbnail]) }}" loading="lazy" class="card-img-top" alt="{{ $item->judul }}">
            <div class="card-body">
                <h5 class="card-title pilihan-editor"><a href="{{ route('berita.show', ['slug' => $item->slug]) }}">{{ $item->judul }}</a></h5>
                <hr>
                <div class="d-flex align-items-center">
                    <img src="{{ $item->user->avatar }}" loading="lazy" width="40" class="rounded-circle avatar" alt="Avatar">
                    <svg class="verified-badge ms-1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" style="fill: #3498db;transform: ;msFilter:;"><path d="M4.035 15.479A3.976 3.976 0 0 0 4 16c0 2.378 2.138 4.284 4.521 3.964C9.214 21.198 10.534 22 12 22s2.786-.802 3.479-2.036C17.857 20.284 20 18.378 20 16c0-.173-.012-.347-.035-.521C21.198 14.786 22 13.465 22 12s-.802-2.786-2.035-3.479C19.988 8.347 20 8.173 20 8c0-2.378-2.143-4.288-4.521-3.964C14.786 2.802 13.466 2 12 2s-2.786.802-3.479 2.036C6.138 3.712 4 5.622 4 8c0 .173.012.347.035.521C2.802 9.214 2 10.535 2 12s.802 2.786 2.035 3.479zm1.442-5.403 1.102-.293-.434-1.053A1.932 1.932 0 0 1 6 8c0-1.103.897-2 2-2 .247 0 .499.05.73.145l1.054.434.293-1.102a1.99 1.99 0 0 1 3.846 0l.293 1.102 1.054-.434C15.501 6.05 15.753 6 16 6c1.103 0 2 .897 2 2 0 .247-.05.5-.145.73l-.434 1.053 1.102.293a1.993 1.993 0 0 1 0 3.848l-1.102.293.434 1.053c.095.23.145.483.145.73 0 1.103-.897 2-2 2-.247 0-.499-.05-.73-.145l-1.054-.434-.293 1.102a1.99 1.99 0 0 1-3.846 0l-.293-1.102-1.054.434A1.935 1.935 0 0 1 8 18c-1.103 0-2-.897-2-2 0-.247.05-.5.145-.73l.434-1.053-1.102-.293a1.993 1.993 0 0 1 0-3.848z"></path><path d="m15.742 10.71-1.408-1.42-3.331 3.299-1.296-1.296-1.414 1.414 2.704 2.704z"></path></svg>
                    <div>
                        <div>{{ $item->user->name ?? 'Admin'}}</div>
                        <div class="text-muted author">Author</div>
                    </div>
                    <div class="ms-auto text-muted"><small>{{ \Carbon\Carbon::parse($item->created_at)->locale('id_ID')->translatedFormat('d M Y') }}
                    </small></div>
                </div>
            </div>
        </div>
    @empty
        <h3>Data not found!</h3>
    @endforelse
</div>