<div class="row">
    <div class="col-md-6 mb-3">
        @if ($media['media_type'] === 'IMAGE')
            <figure>
                <img src="{{ $media['media_url'] }}" alt="" lazy="loading" class="rounded">
            </figure>
        @elseif ($media['media_type'] === 'VIDEO')
            <video class="d-block w-100" controls width="100%">
                <source src="{{ $media['media_url'] }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        @else
            <figure>
                <img src="{{ $media['media_url'] }}" alt="" lazy="loading" class="rounded">
            </figure>
        @endif
    </div>
    <div class="col-md-6">
        <a href="https://www.instagram.com/mediacenterpemkabtulangbawang/" target="_blank" style="color: #114A43">
            <div class="d-flex align-items-center">
                <img src="{{ asset('img/logo/logo.png') }}" alt="" width="30px" class="me-2">
                <p class="mb-0 fw-bold">MEDIA CENTER PEMKAB TUBA</p>
            </div>
        </a>
        <!-- Container untuk deskripsi -->
        <div class="mt-3 description-container">
            <p>
                {!! $media['caption'] ?? '' !!}
            </p>
        </div>
        <a href="https://wa.me/?text={{ urlencode('Cek postingan ini di Instagram: ' . $media['permalink']) }}"
            target="_blank" class="btn btn-sm mt-3" style="background-color: #114A43; color: #fff">Bagikan ke
            WhatsApp</a>
    </div>
</div>
