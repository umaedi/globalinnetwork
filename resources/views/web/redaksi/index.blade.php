@extends('web.layouts.app')
@push('css')
<style>
    .profile-img {
        width: 100%;
        height: auto;
        transition: opacity 0.3s ease-in-out;
    }
    .profile-card {
        text-align: center;
        cursor: pointer;
        position: relative;
    }
    .profile-card img {
        transition: transform 0.3s ease-in-out;
    }

    .gambar-kecil {
        max-height: 15rem;
        overflow: auto;
    }

    .nametag {
        background: #0d6efd;
        margin-top: -20px;
        border-bottom-left-radius: 6px;
        border-bottom-right-radius: 6px;
        padding-top: 15px;
        padding-bottom: 5px;
    }
</style>
@endpush
@section('content')
<section class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="row" id="beritaTerbaru">
                <div class="col-md-12 text-center">
                    <img id="mainImage" src="{{ asset('assets/img/struktur/ceo-globalinnetwork.webp') }}" class="profile-img mb-3 rounded" alt="Main Profile" width="100%">
                    <div class="nametag">
                        <h4 id="mainName" class="text-primary fw-bold text-white">IM. Safril Ridho, SH</h4>
                        <p id="mainPosition" class="text-white">Pimpinan Management MGG</p>
                    </div>
                </div>
            </div>
            <div class="row mt-2 gambar-kecil">
                <div class="col-6 col-md-6 profile-card mb-3" onclick="changeProfile(this,'{{ asset('assets/img/struktur/ceo-globalinnetwork.webp') }}', 'IM. Safril Ridho, SH', 'Pimpinan Management MGG')">
                    <img src="{{ asset('assets/img/struktur/ceo-globalinnetwork.webp') }}" class="rounded profile-img" alt="Aldi" width="100%">
                </div>
                <div class="col-6 col-md-6 profile-card mb-3" onclick="changeProfile(this,'{{ asset('assets/img/struktur/hary.webp') }}', 'Harry Oktavia, SH', 'Pimpinan Umum')">
                    <img src="{{ asset('assets/img/struktur/hary.webp') }}" class="rounded profile-img" alt="Aldi" width="100%">
                </div>
                <div class="col-6 col-md-6 profile-card mb-3" onclick="changeProfile(this, '{{ asset('assets/img/struktur/fijay.webp') }}', 'Ahmad Fijayyudin', 'Redaksi')">
                    <img src="{{ asset('assets/img/struktur/fijay.webp') }}" class="rounded profile-img" alt="Antoni" width="100%">
                </div>
                <div class="col-6 col-md-6 profile-card mb-3" onclick="changeProfile(this, '{{ asset('assets/img/struktur/hamza.webp') }}', 'Hamza', 'Redaktur')">
                    <img src="{{ asset('assets/img/struktur/hamza.webp') }}" class="rounded profile-img" alt="Antoni" width="100%">
                </div>
                <div class="col-6 col-md-6 profile-card mb-3" onclick="changeProfile(this,'{{ asset('assets/img/struktur/yandri.webp') }}', 'Yandri Yuriska', 'Sekretaris / Pemasaran')">
                    <img src="{{ asset('assets/img/struktur/yandri.webp') }}" class="rounded profile-img" alt="Aldi" width="100%">
                </div>
                <div class="col-6 col-md-6 profile-card mb-3" onclick="changeProfile(this,'{{ asset('assets/img/struktur/alfan.webp') }}', 'Alfan', 'Desain Grafis')">
                    <img src="{{ asset('assets/img/struktur/alfan.webp') }}" class="rounded profile-img" alt="Aldi" width="100%">
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <h3 class="mt-4 text-primary fw-bold">Perwakilan Global In Network</h3>
            <ul class="list-group">
                <li class="list-group-item"><span class="fw-bold">Jabodetabek</span> - Lucky sun</li>
                <li class="list-group-item"><span class="fw-bold">Bandar Lampung</span> - Hamzah</li>
                <li class="list-group-item"><span class="fw-bold">Metro</span> - Hanafi MK</li>
                <li class="list-group-item"><span class="fw-bold">Pringsewu</span> - Novi Antoni &amp; Arif Wijaya</li>
                <li class="list-group-item"><span class="fw-bold">Tanggamus</span> - SAPRIYADI &amp; AJA ADI SAPUTRA</li>
                <li class="list-group-item"><span class="fw-bold">Pesisir Barat</span> - Bukhari</li>
                <li class="list-group-item"><span class="fw-bold">Lampung Barat</span> - Teuku Wahyu</li>
                <li class="list-group-item"><span class="fw-bold">Tulang Bawang</span> - Abrianto</li>
                <li class="list-group-item"><span class="fw-bold">Tulang Bawang Barat</span> - Gusar Prasta YoGa</li>
                <li class="list-group-item"><span class="fw-bold">Mesuji</span> - Agus B</li>
                <li class="list-group-item"><span class="fw-bold">Pesawaran</span> - Ahmad V</li>
                <li class="list-group-item"><span class="fw-bold">Waykanan</span> - HERYADI</li>
                <li class="list-group-item"><span class="fw-bold">Lampung Selatan</span> - Andre.T</li>
                <li class="list-group-item"><span class="fw-bold">Lampung Timur</span> - Eko Wahyuntoro</li>
                <li class="list-group-item"><span class="fw-bold">Lampung Tengah</span> - Budi Pangetoni</li>
                <li class="list-group-item"><span class="fw-bold">Lampung Utara</span> - Jauhari</li>
                <li class="list-group-item"><span class="fw-bold">Korwil Jatim</span> - Catur Teguh</li>
                <li class="list-group-item"><span class="fw-bold">Jember</span> - Holyyadi</li>
                <li class="list-group-item"><span class="fw-bold">Banyuwangi</span> - Agus</li>
                <li class="list-group-item"><span class="fw-bold">Bondowoso</span> - Eko</li>
                <li class="list-group-item"><span class="fw-bold">Jakarta</span> - Lucky Sun</li>
                <li class="list-group-item"><span class="fw-bold">Banten</span> - Holis</li>
            </ul>
        </div>
    </div>
</section>
@endsection
@push('js')
<script type="text/javascript">
    function changeProfile(element, imageSrc, name, position) {
    const mainImage = document.getElementById('mainImage');
    const mainName = document.getElementById('mainName');
    const mainPosition = document.getElementById('mainPosition');

    const img = element.querySelector("img");

    // Tambah animasi naik ke atas
    img.style.transform = "translateY(-25px) scale(1)";

    setTimeout(() => {
        // Kembali ke posisi awal setelah naik
        img.style.transform = "translateY(0) scale(1)";

        // Ubah gambar utama setelah animasi selesai
        mainImage.src = imageSrc;
        mainName.textContent = name;
        mainPosition.textContent = position;
    }, 500);
}

</script>
@endpush
