@extends('cms.layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <form id="formPengaturan">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="mb-0">Kepala OPD</h4>
                        </div>
                        <div class="card-body">
                            <img id="imgPrev"
                                src="{{ route('photo-pimpinan', ['filename' => $pengaturan->photo_kepala_opd ?? '-']) }}"
                                lazy="loading" alt="{{ $pengaturan->nama_kepala_opd ?? '-' }}" class="rounded"
                                width="100%">
                            <input type="file" class="form-control mt-3" name="photo_kepala_opd" onchange="previewImg()"
                                accept=".png, .jpg, .jpeg" id="image">
                            <div class="form-group mt-3">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" name="nama_kepala_opd"
                                    value="{{ $pengaturan->nama_kepala_opd ?? '-' }}">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Jabatan</label>
                                <select name="jabatan" id="jabatan" class="form-control">
                                    <option value="Kepala Dinas">Kepala Dinas</option>
                                    <option value="Kepala Bagian">Kepala Bagian</option>
                                    <option value="Sekretaris DPRD">Sekretaris DPRD</option>
                                    <option value="Inspektorat">Inspektur</option>
                                    <option value="Direktur">Direktur</option>
                                    <option value="Camat">Camat</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="card">
            <div class="card-body">
                <div class="form-group mt-3">
                    <label for="logo">Logo</label>
                    <img id="logoPreview" src="" lazy="loading" class="rounded" width="100%" alt="">
                    <input type="file" class="form-control" name="logo" onchange="previewLogo()" accept=".png, .jpg, .jpeg" id="logo">
                </div>
            </div>
        </div> --}}
                </div>
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="mb-0">Sambutan kepala OPD</h4>
                        </div>
                        <div class="card-body">
                            <textarea name="sambutan_kepala_opd" name="sambutan_kepala_opd" class="form-control" rows="8">{{ $pengaturan->sambutan_kepala_opd ?? '-' }}</textarea>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Nama OPD</label>
                                <input type="text" class="form-control" name="nama_opd"
                                    value="{{ $pengaturan->nama_opd ?? '-' }}">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Alamat</label>
                                <textarea type="text" class="form-control" name="alamat">{{ $pengaturan->alamat ?? '-' }}</textarea>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="email"
                                    value="{{ $pengaturan->email ?? '-' }}">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Telepon</label>
                                <input type="text" class="form-control" name="no_tlp"
                                    value="{{ $pengaturan->no_tlp ?? '-' }}">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Maps</label>
                                <input type="text" class="form-control" name="maps"
                                    value="{{ $pengaturan->maps ?? '-' }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mt-3">
                                <label for="">Facebook</label>
                                <input type="text" class="form-control" name="facebook"
                                    value="{{ $pengaturan->facebook ?? '-' }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mt-3">
                                <label for="">Instagram</label>
                                <input type="text" class="form-control" name="instagram"
                                    value="{{ $pengaturan->instagram ?? '-' }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mt-3">
                                <label for="">Youtube</label>
                                <input type="text" class="form-control" name="youtube"
                                    value="{{ $pengaturan->youtube ?? '-' }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Token Instagram</label>
                        <textarea class="form-control" id="token_ig" name="token_ig" rows="2">{{ $pengaturan->token_ig ?? '-' }}</textarea>
                    </div>
                </div>
            </div>
            <button id="btnLoading" class="btn btn-primary d-none" type="button" disabled>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Tunggu sebentar yaah...
            </button>
            <button id="btnSubmit" type="submit" class="btn btn-primary"><i class='bx bx-paper-plane'></i> Simpan
                perubahan</button>
        </form>
    </div>
@endsection
@push('js')
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
    <script type="text/javascript">
        $('#formPengaturan').submit(async function(e) {
            e.preventDefault();

            let formData = new FormData(this);
            let param = {
                url: '/cms/pengaturan/update',
                method: "POST",
                processData: false,
                contentType: false,
                data: formData
            }

            loadingsubmit(true, 'btnSubmit', 'btnLoading');
            await transAjax(param).then((result) => {
                loadingsubmit(false, 'btnSubmit', 'btnLoading');
                swal("Berhasil!", "Data berhasil disimpan", "success");
            }).catch((error) => {
                loadingsubmit(false, 'btnSubmit', 'btnLoading');
                swal("Opps!", "Internal server error!", "warning");
            });
        });

        function previewImg() {
            const imgPreview = document.querySelector('#imgPrev');
            const image = document.querySelector('#image');
            const blob = URL.createObjectURL(image.files[0]);
            imgPreview.src = blob;
        }

        // function previewLogo(){
        //     const imgPreview = document.querySelector('#logoPreview');
        //     const image = document.querySelector('#logo');
        //     const blob = URL.createObjectURL(image.files[0]);
        //     imgPreview.src = blob; 
        // }
    </script>
@endpush
