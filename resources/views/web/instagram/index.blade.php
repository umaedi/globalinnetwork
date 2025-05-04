@forelse ($feeds as $item)
<div class="col-6 col-lg-3 col-md-3 mb-3 post-ig" onclick="showPostingan('{{ $item['id'] }}')">
    <div class="why-choose-item wow fadeInUp">
        <div class="tuba-why-choose-image">
            @if ($item['media_type'] === 'IMAGE')
                <figure class="d-block w-100" style="height: 230px; object-fit: cover;">
                    <img src="{{ $item['media_url'] ?? '' }}" lazy="loading" alt="postingan instagram tuba">
                </figure>
            @elseif ($item['media_type'] === 'VIDEO')
                <video class="d-block w-100" style="height: 230px; object-fit: cover;">
                    <source src="{{ $item['media_url'] ?? ''}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            @else
            <figure>
                <img src="{{ $item['media_url'] ?? '' }}" lazy="loading" alt="postingan instagram tuba">
            </figure>
            @endif
        </div>
    </div>
</div>
@empty
    <p>Data not found</p>
@endforelse
<script type="text/javascript">
    async function showPostingan(id) {
        $('#modal-ig').modal('show');
        var param = {
            method: 'GET',
            url: '/api/instagram/{{ \request()->subdomain }}/show/'+id,
            data: {
                load: 'table',
            }
        }

        await transAjax(param).then((result) => {
            $('#modal-content').html(result)
        }).catch((err) => {
            console.log('error');
        });
    }
</script>