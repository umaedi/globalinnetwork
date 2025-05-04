@extends('cms.layouts.app')
@push('css')
    <style>
      .scrolbar {
        max-height: 350px;
        overflow-y: auto;
      }
    </style>
@endpush
@section('content')
<div class="container-xxl container-p-y">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h3 class="mb-0">List berita</h3>
          <a href="/cms/berita/create" class="btn btn-primary"><i class='bx bx-plus'></i> Buat berita</a>
        </div>
        <div class="card-body scrolbar">
          <table class="table table-bordered table-responsive">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Judul berita</th>
                <th scope="col">Kategori</th>
                <th scope="col">Penulis</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody id="dataTable">
              
            </tbody>
          </table>
        </div>
      </div>
    <div class="row mt-3">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            Statistik Pengunjung
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            Komentar terbaru
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@push('js')
<script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            loadTable();
        });

        async function loadTable()
        {
            let param = {
                url: '{{ url()->current() }}',
                method: 'GET',
                data: {
                    load: 'table'
                }
            }

            await transAjax(param).then((result) => {
                $("#dataTable").html(result);
            }).catch((error) => {
                console.log(error);
            });
        }

        async function hapusBerita(id)
        {
            const willDelete = await swal({
            title: "Yakin?",
            text: "Apakah Anda yakin untuk mengahpus data ini?",
            icon: "warning",
            dangerMode: true,
            });

            if (willDelete) {
                let param = {
                url: '/cms/berita/hapus/'+id,
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