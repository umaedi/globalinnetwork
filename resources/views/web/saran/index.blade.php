@extends('web.layouts.app')

@push('css')
@endpush

@section('content')
<link href="https://fonts.cdnfonts.com/css/inter" rel="stylesheet">

    <div class="container">
        <div class="header-saran">
            <h3 class="text-center mt-5">Saran dan Aduan <i class="fas fa-comment-dots fa-2x text-center"
                    style="color:#114A43;"></i></h3>
            <p class="text-center">Kami sangat menghargai setiap saran dan aduan yang Anda berikan. Silahkan tinggalkan saran
                atau aduan Anda di bawah ini.</p>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-container-saran">
                    <h5 class="text-center mb-2">Tinggalkan Saran atau Aduan</h5>
                    <form>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label class="form-label">Nama Anda</label>
                                <input type="text" class="form-control mb-2" placeholder="Masukkan Nama Anda" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">KTP/Passport</label>
                                <input type="text" class="form-control" placeholder="Masukkan KTP/Passport" required>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label class="form-label">E-mail</label>
                                <input type="email" class="form-control" placeholder="Masukkan e-mail anda" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">No Handphone</label>
                                <input type="number" class="form-control" placeholder="Masukkan no Handphone" required>
                            </div>
                        </div>
                        <h5 class="text-center mt-4 mb-2">Pilih Jenis Saran/aduan/pertanyaan Serta Pelayanan yang dituju
                        </h5>
                        <div class="mb-3">
                            <label class="form-label">Jenis Saran/Aduan</label>
                            <select class="form-select" required>
                                <option selected disabled>Pilih Jenis</option>
                                <option>Saran</option>
                                <option>Aduan</option>
                                <option>Pertanyaan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pelayanan yang Ditujukan</label>
                            <select class="form-select" required>
                                <option selected>Pendaftaran RSUD Menegala</option>
                                <option>Instalansi Gawat Darurat</option>
                                <option>Poli Rawat Jalan</option>
                                <option>Instalansi Rawat Inap</option>
                                <option>Manajemen RSUD Menggala</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Komentar</label>
                            <textarea class="form-control" rows="4" placeholder="Tulis komentar Anda di sini..." required></textarea>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn-default-saran me-2">
                                <!-- Save Icon (SVG) -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-6" width="20" height="20">
                                    <path fill-rule="evenodd"
                                        d="M6 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3H6Zm1.5 1.5a.75.75 0 0 0-.75.75V16.5a.75.75 0 0 0 1.085.67L12 15.089l4.165 2.083a.75.75 0 0 0 1.085-.671V5.25a.75.75 0 0 0-.75-.75h-9Z"
                                        clip-rule="evenodd" />
                                </svg>
                                Simpan
                            </button>
                            <button type="reset" class="btn-default-saran btn-custom"
                                style="color:white;background-color: var(--bs-body-color);">
                                <!-- Cancel Icon (SVG) -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-x-circle" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM6.854 4.146a.5.5 0 0 1 .708 0L8 5.793l.438-.438a.5.5 0 0 1 .708.707L8.707 6.5l.438.438a.5.5 0 0 1-.707.707L8 7.207l-.438.438a.5.5 0 0 1-.708-.707L7.293 6.5l-.438-.438a.5.5 0 0 1 0-.708z" />
                                </svg>
                                Batal
                            </button>
                        </div>

                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-saran mb-3 text-center">
                    <img src="{{ asset('img/img_saran.jpg') }}">
                </div>
                <div class="sidebar-saran mb-5 mt-3">
                    <h6>Jumlah Pesan</h6>
                    <p><i class="bi bi-chevron-right"></i> aduan (1 - menunggu)</p>
                    <hr>
                    <h6>Latest posts</h6>
                    <div class="d-flex align-items-center">
                        <img src="https://sprint.co.id/wp-content/uploads/2025/01/profile.png"
                            class="rounded-circle me-2 profile-icon-saran" alt="User">
                        <div>
                            <strong>Aliquid sunt illum - (aduan)</strong>
                            <p class="mb-0">Et deleniti sunt cu</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
