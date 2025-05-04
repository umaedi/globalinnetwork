@extends('cms.layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Buat kategori</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('cms-kategori-store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_kategori">Nama kategori</label>
                            <input type="hidden" name="id_kategori" id="id_kategori" value="">
                            <input type="text" id="nama_kategori" name="nama_kategori" class="form-control">
                            <small class="mt-1 d-block text-danger"id="error-nama_kategori"></small>
                        </div>
                        <button id="btnLoading" class="btn btn-primary d-none" type="button" disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Tunggu sebentar yaah...
                        </button>
                        <button id="btnSubmit" type="submit" class="btn btn-primary"><i class='bx bx-paper-plane'></i> Simpan</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header">
            <h5 class="mb-0">{{ $title }}</h5>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-responsive">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama kategori</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody id="dataTable">
                  
                </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@push('js')
<script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
<script type="text/javascript">
        let id_kategori = "";
        $(document).ready(function() {
            loadTable();
        });

        async function loadTable()
        {
            let param = {
                url: "{{ url()->current() }}",
                method: "GET",
                data: {
                    load: 'table'
                }
            }

            await transAjax(param).then((result) => {
                $("#dataTable").html(result);
            });
        }

        // updateKategori ada di views/cms/kategori/_data_table baris ke 7
        function updateKategori(id, nama_kategori)
        {
            $('#id_kategori').val(id);
            $('#nama_kategori').val(nama_kategori);
            $('#btnSubmit').html("<i class='bx bx-paper-plane'></i> Simpan perubahan");
        }

        async function hapusKategori(id)
        {
            const willDelete = await swal({
            title: "Yakin?",
            text: "Apakah Anda yakin untuk mengahpus data ini?",
            icon: "warning",
            dangerMode: true,
            });

            if (willDelete) {
                let param = {
                url: '/cms/kategori/hapus/'+id,
                method: "POST",
                processData: false,
                contentType: false,
                cache: false,
                }

                await transAjax(param).then((result) => {
                    loadTable();
                    swal("Dihapus!", "Data ini berhasil dihapus", "success");
                }).catch((error) => {
                    swal("Opps!", "Internal server error!", "warning");
                });
            }
        }
    </script>
@endpush