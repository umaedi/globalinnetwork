@extends('web.layouts.app')
@section('content')
<section class="container my-4">
    <div class="row">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm trending">
                <div class="card-header bg-white">
                    <div class="d-flex align-items-center">
                        <span class="pip"></span>
                        <strong class="fs-5">{{ $title }}</strong>
                    </div>
                </div>
                <div class="card-body height-content" id="trending">
                    <p aria-hidden="true">
                        <span class="placeholder col-12"></span>
                    </p>
                    <a href="#" tabindex="-1" class="btn btn-danger disabled placeholder col-8" aria-hidden="true"></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white mb-3">
                    <div class="d-flex align-items-center">
                        <span class="pip"></span>
                        <strong class="fs-5">Kategori</strong>
                    </div>
                </div>
                <div class="card-body"  id="kategori">
                    <p aria-hidden="true">
                        <span class="placeholder col-12"></span>
                    </p>
                    <a href="#" tabindex="-1" class="btn btn-danger disabled placeholder col-8" aria-hidden="true"></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('js')
<script type="text/javascript">
    $(document).ready(function() {
        trending()
    });

    async function trending() {
        var param = {
            url: '{{ url()->current() }}',
            method: 'GET',
            data: {
                load_type: 'berita',
            }
        }

        await transAjax(param).then((result) => {
            $('#trending').html(result);
            kategori();
        }).catch((err) => {
            console.log(err);
        })
    }

    async function kategori() {
        var param = {
            url: '{{ url()->current() }}',
            method: 'GET',
            data: {
                load_type: 'kategori',
            }
        }

        await transAjax(param).then((result) => {
            $('#kategori').html(result);
        }).catch((err) => {
            console.log(err);
        })
    }
</script>
@endpush
