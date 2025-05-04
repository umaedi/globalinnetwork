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
        <div id="about" class="w-full">
            <div class="max-w-5xl mx-auto ">
                <h1 class="fw-bold">Global In Network: Membangun Jaringan Berita Modern dan Multimedia</h1>
                <p>
                    Global In Network adalah bagian dari Management Global Group (MGG), sebuah jaringan berita yang dinamis dan inovatif. Kami menggabungkan kekuatan dari beberapa perusahaan pers ternama di bawah naungan MGG, yang bergerak di berbagai bidang industri media dan hiburan.
                </p>
        
                <p>
                    Sebagai platform yang serba bisa, Global In Network tidak hanya berfokus pada media cetak dan digital, tetapi juga memimpin di sektor streaming multimedia. Dengan keahlian dalam produksi audio visual, pembuatan iklan, film, pengembangan aplikasi digital, hingga solusi kreatif berbasis teknologi, kami hadir sebagai jawaban atas kebutuhan kontemporer.
                </p>
        
                <h2 class="fw-bold">Layanan Unggulan Kami:</h2>
                <ul class="list-disc list-inside text-gray-700 text-justify mb-6">
                    <li><span class="font-bold">Media Berita:</span> Kami menyediakan berbagai platform berita online dan cetak, serta majalah yang menjangkau pembaca di seluruh Indonesia, terutama di wilayah Lampung. Setiap konten yang kami sajikan dihasilkan dari riset mendalam dan kualitas jurnalisme terbaik.</li>
                    <li><span class="font-bold">Multimedia &amp; Produksi Konten:</span> Dari iklan komersial hingga produksi film, kami memiliki tim kreatif yang handal dalam menghasilkan karya berkualitas tinggi untuk kebutuhan berbagai perusahaan.</li>
                    <li><span class="font-bold">Streaming &amp; Digital Entertainment:</span> Menyajikan layanan hiburan melalui platform digital dan streaming yang dapat diakses oleh audiens global, kami berkomitmen untuk menjadi pemain utama di industri hiburan digital.</li>
                    <li><span class="font-bold">Pengembangan Aplikasi Digital:</span> Dengan tim teknologi yang inovatif, kami menawarkan solusi pengembangan aplikasi yang disesuaikan dengan kebutuhan bisnis. Kami menciptakan aplikasi berbasis berita, hiburan, dan lainnya yang mudah diakses dan dirancang untuk menghadirkan pengalaman pengguna terbaik.</li>
                </ul>
        
                <h2 class="fw-bold">Keunggulan Kami:</h2>
                <ul class="list-disc list-inside text-gray-700 text-justify mb-6">
                    <li>Jaringan yang tersebar luas di seluruh Indonesia, menjadikan kami salah satu sumber informasi terpercaya yang meliputi berita lokal hingga internasional.</li>
                    <li>Kombinasi unik antara jurnalisme yang kredibel, kreativitas dalam produksi konten multimedia, inovasi teknologi digital, dan aplikasi yang memudahkan akses informasi.</li>
                </ul>
        
                <p class="text-gray-700 text-justify mb-6">
                    Kami juga bangga dengan integritas yang kami jaga dalam internal maupun eksternal. Setiap anggota, baik internal karyawan maupun mitra eksternal, memiliki ID card khusus yang memastikan akses eksklusif ke berbagai layanan dan konten.
                </p>
        
                <h2 class="fw-bold">Visi Kami:</h2>
                <p class="text-gray-700 text-justify">
                    Menjadi pionir dalam industri media yang menghubungkan informasi dan hiburan dengan teknologi terkini, serta membawa dampak positif bagi masyarakat di Indonesia dan dunia.
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <h3 class="fw-bold">Alamat Kami</h3>
        <p>Jalur II Komplek Perkantoran Pemda Lama Gunung Sakti Gang PP.Bahari Al-Islam Sekretariat Global Group, Kecamatan Menggala Kabupaten Tulang Bawang-Lampung.</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d509123.1680933552!2d105.228835!3d-4.498955!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNMKwMjknNTYuMiJTIDEwNcKwMTMnNDMuOCJF!5e0!3m2!1sen!2sus!4v1719625926173!5m2!1sen!2sus" width="100%" height="200px" style="border:0;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="row mt-3">
        <h3 class="fw-bold">Kontak Kami</h3>
        <p><span class="fw-bold">Email: </span>pt.mediaglobalart@gmail.com</p>
        <p><span class="fw-bold">Tlp: </span>081369264097 atau 085279911631</p>
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
