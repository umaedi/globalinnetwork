@extends('cms.layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="mb-3">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Tambah akun user</h5>
            </div>
            <form action="/cms/user/store" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Masukan nama user">
                                <input type="hidden" name="id_data" id="id_data">
                                <small class="mt-1 d-block text-danger"id="error-name"></small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Masukan email">
                                <small class="mt-1 d-block text-danger"id="error-email"></small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" id="password" name="password" placeholder="Masukan password">
                                <small class="mt-1 d-block text-danger"id="error-password"></small>
                            </div>
                        </div>
                    </div>
                    <button id="btn_loading" class="btn btn-primary d-none" type="button" disabled>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Tunggu sebentar yaah...
                    </button>
                    <button id="btn_submit" onclick="loading(true, 'btn_submit', 'btn_loading')" type="submit" class="btn btn-primary"><i class='bx bx-paper-plane'></i>  Submit</button>
                </div>
            </form>
        </div>
    </div>
    
    <div class="card mb-4">
        <div class="card-header">
        <h5 class="mb-0">{{ $title }}</h5>
        </div>
          <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama user</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
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
@endsection
@push('js')
<script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
<script type="text/javascript">
        let id_domain = "";
        $(document).ready(function() {
            loadTable();
            
        });

        $('#search-input').on('keypress', async function(e) {
            if(e.which == 13) {
                $('#user').html('<option value="">mencari data...</option>');
                let param = {
                    url: "{{ url()->current() }}",
                    method: "GET",
                    data: {
                        search: $('#search-input').val()
                    }
                }

                await transAjax(param).then((result) => {
                    let data = result;
                    if(data.length > 0) {
                        var html = "";
                            data.forEach(user => {
                            html += `<option value="${user.id}">${user.name + ' (' + user.email + ')'}</option>`
                        });
                    }else {
                        html += `<option value="">user tidak ditemukan</option>`
                    }
                    $('#user').html(html);
                }).catch((error) => {
                    $('#user').html('<option value="">Internal server error!</option>');
                });
                return false;
            }
        });

        async function loadTable()
        {
            let param = {
                url: "{{ url()->current() }}",
                method: "GET",
                data: {
                    load: 'table',
                }
            }

            await transAjax(param).then((result) => {
                $("#dataTable").html(result);
            });
        }

        // updateKategori ada di views/cms/kategori/_data_table baris ke 7
        function updateUser(id, name, email)
        {
            $('#id_data').val(id);
            $('#name').val(name);
            $('#email').val(email);
            $('#btnSubmit').html("<i class='bx bx-paper-plane'></i> Update");
        }

        async function destroy(id)
        {
            const willDelete = await swal({
            title: "Yakin?",
            text: "Apakah Anda yakin untuk mengahpus data ini?",
            icon: "warning",
            dangerMode: true,
            });

            if (willDelete) {
                let param = {
                url: '/cms/user/destroy/'+id,
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