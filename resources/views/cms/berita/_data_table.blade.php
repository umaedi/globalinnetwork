<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Judul berita</th>
        <th scope="col">Subdomain</th>
        <th scope="col">Kategori</th>
        <th scope="col">Penulis</th>
        <th scope="col">Status</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($table as $key =>  $tb)
        <tr>
            <th scope="row">{{ $table->firstItem() + $key }}</th>
            <td>{{ $tb->judul }}</td>
                @if($tb->subdomain !== 'globalinnetwork')
            <td><a href="https://{{ $tb->subdomain }}.globalinnetwork.com">{{ $tb->subdomain ?? '-' }}</a></td>
            @else
                <td><a href="https://globalinnetwork.com">{{ $tb->subdomain ?? '-' }}</a></td>
            @endif
            <td>{{ $tb->category->nama_kategori ?? '-' }}</td>
            <td>{{ $tb->user->name ?? 'Admin' }}</td>
            <td><span class="badge {{ $tb->status == 'publish' ? 'bg-primary' : 'bg-warning' }}">{{ $tb->status }}</span>
            </td>
            <td style="width: 185px">
                @if ($tb->subdomain !== 'globalinnetwork')
                <a href="https://{{ $tb->subdomain }}.globalinnetwork.com/berita/{{ $tb->slug }}" target="_blank" class="badge bg-primary"><i class='bx bx-show'></i></a>
                @else
                <a href="/berita/{{ $tb->slug }}" target="_blank" class="badge bg-primary"><i class='bx bx-show'></i></a>
                @endif
                <a href="/cms/berita/edit/{{ $tb->id }}" class="badge bg-warning"><i class='bx bxs-edit'></i></a>
                <span class="badge bg-danger" onclick="hapusBerita('{{ $tb->id }}')"><i
                        class='bx bxs-x-circle'></i></span>
               <a href="{{ route('cms-sub_berita.create', ['berita_id' => $tb->id]) }}"><span class="badge bg-info"><i class='bx bx-share-alt'></i></span></a> 
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="6">
                <div class="mt-2 text-center">
                    <div class="pt-3 pb-3">
                        <div class="empty">
                            <div class="empty-img">
                                <svg style="width: 96px; height: 96px" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-database-off" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M12.983 8.978c3.955 -.182 7.017 -1.446 7.017 -2.978c0 -1.657 -3.582 -3 -8 -3c-1.661 0 -3.204 .19 -4.483 .515m-2.783 1.228c-.471 .382 -.734 .808 -.734 1.257c0 1.22 1.944 2.271 4.734 2.74">
                                    </path>
                                    <path
                                        d="M4 6v6c0 1.657 3.582 3 8 3c.986 0 1.93 -.067 2.802 -.19m3.187 -.82c1.251 -.53 2.011 -1.228 2.011 -1.99v-6">
                                    </path>
                                    <path d="M4 12v6c0 1.657 3.582 3 8 3c3.217 0 5.991 -.712 7.261 -1.74m.739 -3.26v-4">
                                    </path>
                                    <line x1="3" y1="3" x2="21" y2="21"></line>
                                </svg>
                            </div>
                            <p class="empty-title">Tidak ada data yang tersedia</p>
                            <div class="empty-action">
                                <button onclick="loadData()" class="btn btn-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-refresh"
                                        width="18" height="18" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4"></path>
                                        <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4"></path>
                                    </svg>
                                    Refresh
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    @endforelse
    </tbody>
  </table>
{{ $table->links('components.pagination') }}
