@extends('cms.layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Buat submenu</h5>
        </div>
        <div class="card-body">
            <form id="formMenu">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="nama_submenu">Nama submenu</label>
                            <input type="text" id="nama_submenu" name="nama_submenu" class="form-control">
                            <small class="mt-1 d-block text-danger"id="error-nama_submenu"></small>
                            <input type="hidden" name="menu_id" value="{{ $menu_id }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="link">Link</label>
                            <input type="text" id="link" name="link" class="form-control">
                            <small class="mt-1 d-block text-danger"id="error-link"></small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="on">Aktif</option>
                                <option value="off">Tidak aktif</option>
                            </select>
                            <small class="mt-1 d-block text-danger"id="error-status"></small>
                        </div>
                    </div>
                </div>
                <button id="btnLoading" class="btn btn-primary d-none" type="button" disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Tunggu sebentar yaah...
                </button>
                <button id="btnSubmit" type="submit" class="btn btn-primary"><i class='bx bx-paper-plane'></i> Simpan</button>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card mb-4">
              <div class="card-header">
                <h5 class="mb-0">List submenu</h5>
              </div>
              <div class="card-body">
                <table class="table table-bordered table-responsive">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama submenu</th>
                        <th scope="col">Link</th>
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
        let id_submenu = "";
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
        
        $("#formMenu").submit(async function(e) {
            e.preventDefault();
            loadingsubmit(true,'btnSubmit', 'btnLoading');

            if(id_submenu) {
               var _url = '/cms/submenu/update/'+id_submenu;
            }else {
                var _url = '/cms/submenu/store';
            }

            let param = {
                url: _url,
                method: 'POST',
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false
            }

            await transAjax(param).then((result) => {
                loadingsubmit(false,'btnSubmit', 'btnLoading');
                swal({
                title: 'Success',
                text: result.message,
                icon: 'success',
                timer: 3000,
                });
                loadTable();
                $('#nama_submenu').val('');
                $('#link').val('');
            }).catch((err) => {
                loadingsubmit(false,'btnSubmit', 'btnLoading');
                swal({
                    title: "Opps!",
                    text: err.responseJSON.message,
                    icon: 'error',
                });
                if (err.responseJSON && err.responseJSON.errors) {
                let errors = err.responseJSON.errors;
                    $.each(errors, function(key, value) {
                        let errorElement = $('#error-' + key);
                        if (errorElement.length) {
                            errorElement.html(value[0]);
                        }
                    });
                    } else {
                        loadingsubmit(false,'btnSubmit', 'btnLoading');
                        swal({
                        text: "Internal Server Error!",
                        icon: 'error',
                    });
                }
            });
        });

        // updateKategori ada di views/cms/kategori/_data_table baris ke 7
        function updateSubmenu(id, nama_submenu, link)
        {
            id_submenu = id;
            $('#nama_submenu').val(nama_submenu);
            $('#link').val(link);
            $('#btnSubmit').html("<i class='bx bx-paper-plane'></i> Simpan perubahan");
        }

        async function hapusSubmenu(id)
        {
            const willDelete = await swal({
            title: "Yakin?",
            text: "Beneran nih mau dihapus?",
            icon: "warning",
            dangerMode: true,
            });

            if (willDelete) {
                let param = {
                url: '/cms/submenu/hapus/'+id,
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