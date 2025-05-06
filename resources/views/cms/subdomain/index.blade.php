@extends('cms.layouts.app')
@push('css')
    <style>
      .scrolbar {
        max-height: 600px;
        overflow-y: auto;
      }
    </style>
@endpush
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="mb-3">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Buat domain</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('cms-subdomain-store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nama_subdomain">Nama subdomain</label>
                                <div class="input-group mb-3">
                                    <input type="text" id="nama_subdomain" name="nama_subdomain" class="form-control">
                                    <input type="hidden" id="subdomain_id" name="subdomain_id" value="">
                                    <span class="input-group-text" id="basic-addon2">.globalinnetwork.com</span>
                                  </div>
                                <small class="d-block text-danger"id="error-nama_subdomain"></small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="user_id">Pilih user</label>
                            <select name="user_id" id="user_id" class="form-control">
                                <option value="">--pilih user--</option>
                                @foreach ($users as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="active">Aktif</option>
                                    <option value="inactive">Tidak aktif</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button id="btnLoading" class="btn btn-primary d-none" type="button" disabled>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Tunggu sebentar yaah...
                    </button>
                    <button id="btnSubmit" onclick="loading(true, 'btnSubmit', 'btnLoading')" type="submit" class="btn btn-primary"><i class='bx bx-paper-plane'></i>  Submit</button>
                </form>
            </div>
        </div>
    </div>
    
    <div class="card mb-4">
        <div class="card-header">
        <h5 class="mb-0">{{ $title }}</h5>
        </div>
          <div class="card-body scrolbar">
            <table class="table table-bordered table-responsive">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama domain</th>
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
@endsection
@push('js')
<script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
<script type="text/javascript">
        let id_domain = "";
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
        function updateDomain(id, nama_domain)
        {
            id_domain = id;
            let domain = nama_domain.split('.')[0];
            $('#nama_subdomain').val(domain);
            $('#subdomain_id').val(id);
            $('#btnSubmit').html("<i class='bx bx-paper-plane'></i> Update");
        }

        async function hapusDomain(id)
        {
            const willDelete = await swal({
            title: "Yakin?",
            text: "Apakah Anda yakin untuk mengahpus data ini?",
            icon: "warning",
            dangerMode: true,
            });

            if (willDelete) {
                let param = {
                url: '/cms/subdomain/hapus/'+id,
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