@extends('cms.layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-xl">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="mb-0">List berita</h3>
            <a href="/cms/berita/create" class="btn btn-primary"><i class='bx bx-plus'></i> Buat berita</a>
          </div>
          <div class="card-body table-responsive" id="dataTable">
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@push('js')
<script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
    <script type="text/javascript">
        let page = 1;
        $(document).ready(function() {
            loadTable();
        });

        async function loadTable()
        {
            let param = {
                url: '{{ url()->current() }}',
                method: 'GET',
                data: {
                    load: 'table',
                    page: page,
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

        function loadPaginate(to)
        {
          page = to;
          loadTable();
        }
    </script>
@endpush