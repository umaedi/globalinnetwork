@extends('web.layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-3" data-cursor="-opaque">{{ $title }}</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('berita') }}">kebijakan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ Str::limit($title, 30, '...') }}
                            </li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Page Blog Start -->
<div class="page-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                    <!-- Post Single Content Start -->
                    <div class="post-content">
                        <!-- Post Entry Start -->
                        <div class="post-entry">
                            <h3>Persyaratan Layanan Portal Informasi Kabupaten Tulang Bawang</h3>
                            1. Pengantar

Selamat datang di portal informasi Kabupaten Tulang Bawang ("Portal"). Layanan ini dikelola oleh Dinas Komunikasi dan Informatika Kabupaten Tulang Bawang. Dengan mengakses dan menggunakan layanan ini, Anda dianggap telah membaca, memahami, dan menyetujui seluruh ketentuan yang tercantum dalam Persyaratan Layanan ini. Jika Anda tidak setuju dengan salah satu ketentuan, silakan berhenti menggunakan layanan kami.

2. Penggunaan Layanan

Layanan ini disediakan untuk memberikan informasi terkini tentang Kabupaten Tulang Bawang, termasuk berita, pengumuman, dan panduan layanan publik.

Anda dilarang menggunakan layanan ini untuk tujuan ilegal, melanggar hukum, atau menyebarkan konten yang bersifat merugikan, menghina, atau memfitnah.

Kami berhak menghentikan akses Anda ke layanan jika ditemukan pelanggaran terhadap ketentuan ini.

3. Hak Kekayaan Intelektual

Semua konten yang tersedia di Portal, termasuk teks, gambar, video, dan logo, adalah milik Dinas Komunikasi dan Informatika Kabupaten Tulang Bawang atau pihak yang bekerja sama dengan kami.

Anda tidak diperkenankan menggandakan, menyebarluaskan, atau memodifikasi konten tanpa izin tertulis dari kami.

4. Tautan ke Situs Eksternal

Portal ini mungkin menyertakan tautan ke situs eksternal untuk memberikan informasi tambahan. Kami tidak bertanggung jawab atas konten, kebijakan privasi, atau layanan yang disediakan oleh situs-situs tersebut.

5. Pembatasan Tanggung Jawab

Kami berusaha untuk menyajikan informasi yang akurat dan terkini. Namun, kami tidak menjamin bahwa seluruh informasi bebas dari kesalahan atau selalu mutakhir.

Kami tidak bertanggung jawab atas kerugian yang timbul akibat penggunaan informasi dari Portal ini.

6. Penyelesaian Sengketa

Jika terjadi perselisihan antara pengguna dan pengelola Portal terkait layanan ini, kami mendorong penyelesaian melalui musyawarah untuk mufakat. Jika tidak tercapai kesepakatan, perselisihan akan diselesaikan sesuai dengan hukum yang berlaku di Republik Indonesia.

7. Perubahan Ketentuan

Kami berhak mengubah atau memperbarui Persyaratan Layanan ini sewaktu-waktu tanpa pemberitahuan sebelumnya. Perubahan akan berlaku segera setelah diunggah ke Portal. Anda disarankan untuk meninjau halaman ini secara berkala.

8. Kontak Kami

Jika Anda memiliki pertanyaan atau membutuhkan informasi lebih lanjut mengenai Persyaratan Layanan ini, Anda dapat menghubungi:

Dinas Komunikasi dan Informatika Kabupaten Tulang Bawang
Email: diskominfo@tulangbawang.go.id
                        </div>
                        <!-- Post Entry End -->
                    </div>
                    <!-- Post Single Content End -->
                </div>

                <div class="col-lg-4">
                    <!-- Service Sidebar Start -->
                    <div class="service-sidebar">
                        <!-- Sidebar Cta Box Start -->
                        <div class="sidebar-cta-box wow fadeInUp mb-4" data-wow-delay="0.25s">
                            <!-- Cta Content Start -->
                            <div class="sidebar-cta-content">
                                <h3>Cari Berita</h3>
                            </div>
                            <!-- Cta Content End -->

                            <div class="input-group">
                                <input type="text" name="search" class="tuba-form-control form-control"
                                    placeholder="Cari informasi...">
                                <button class="tuba-btn-default" type="submit">Cari</button>
                            </div>
                        </div>
                        <!-- Sidebar Cta Box End -->

                        <!-- Service Categories List Start -->
                        <div class="service-catagery-list wow fadeInUp">
                            <h3>Kategori</h3>
                            <ul>
                                <li><a href="#">Semua</a></li>
                                @foreach ($categories as $item)
                                    <li><a href="#">{{ $item->nama_kategori }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Service Categories List End -->
                    </div>
                    <!-- Service Sidebar End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Blog End -->
@endsection
