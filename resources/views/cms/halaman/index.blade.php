@extends('cms.layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">List halaman</h3>
                        <a href="/cms/halaman/create" class="btn btn-primary"><i class='bx bx-plus'></i> Buat halaman</a>
                    </div>
                    <div class="card-body">
                        <div id="dataTable"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
    <script type="text/javascript">
        var search = '';
        var page = 1;
        $(document).ready(function() {
            loadTable();

            $('#search').on('keypress', function(e) {
                if (e.which == 13) {
                    filterTable();
                    return false;
                }
            });
        });

        function filterTable() {
            search = $('#search').val();
            loadTable();
        }

        async function loadTable() {
            let param = {
                url: '{{ url()->current() }}',
                method: 'GET',
                data: {
                    load: 'table',
                    search: search,
                    page: page,
                }
            }

            await transAjax(param).then((result) => {
                $("#dataTable").html(result);
            }).catch((error) => {
                console.log(error);
            });
        }

        function loadPaginate(to) {
            page = to
            filterTable()
        }

        async function hapusHalaman(id) {
            const willDelete = await swal({
                title: "Yakin?",
                text: "Beneran nih mau dihapus?",
                icon: "warning",
                dangerMode: true,
            });

            if (willDelete) {
                let param = {
                    url: '/cms/halaman/hapus/' + id,
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
