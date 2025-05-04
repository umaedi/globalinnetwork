@extends('cms.layouts.app')
@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/summernote/summernote-bs5.min.css') }}">
<script src="{{ asset('assets/summernote/summernote-bs5.min.js') }}"></script>
@endpush
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-xl">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Buat berita</h3>
            <a href="/cms/berita" class="btn btn-primary"><i class='bx bx-arrow-back'></i> Kembali</a>
          </div>
          <div class="card-body">
            <form id="submitBerita">
                @csrf
                <div class="mb-3">
                  <label class="form-label" for="judul">Judul berita</label>
                  <input type="text" name="judul" class="form-control" id="judul" value="{{ $berita->judul }}"/>
                  <small class="mt-1 d-block text-danger"id="error-judul"></small>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label" for="kategori">Kategori</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="">--pilih kategori--</option>
                                @foreach ($kategori as $item)
                                <option {{ $item->id == $berita->category_id ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                                @endforeach
                            </select>
                            <small class="mt-1 d-block text-danger"id="error-category_id"></small>
                          </div>
                    </div>
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label class="form-label" for="thumbnail">Thumbnail</label>
                            <input type="file" name="thumbnail" class="form-control" id="thumbnail" />
                            <small class="mt-1 d-block text-danger"id="error-thumbnail"></small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label" for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option {{ $berita->status == 'publish' ? 'selected' : '' }} value="publish">Publish</option>
                                <option {{ $berita->status == 'draft' ? 'selected' : '' }} value="draft">Draft</option>
                            </select>
                            <small class="mt-1 d-block text-danger"id="error-status"></small>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label class="form-label" for="thumbnail">Caption Thumbnail</label>
                            <input type="text" name="caption_thumbnail" class="form-control" id="caption_thumbnail">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="body">Konten</label>
                    <textarea id="summernote" name="body">{!! $berita->body !!}</textarea>
                    <small class="mt-1 d-block text-danger"id="error-body"></small>
                </div>
                <button id="btnLoading" class="btn btn-primary d-none" type="button" disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Tunggu sebentar yaah...
                </button>
                <button id="btnSubmit" type="submit" class="btn btn-primary"><i class='bx bx-paper-plane'></i> Submit</button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@push('js')
<script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
        placeholder: 'Menulislah, karena tanpa menulis kamu akan hilang dari pusaran sejarah',
        tabsize: 2,
        height: 350,
        callbacks: {
            onImageUpload: function(files) {
                uploadImage(files[0]);
            },

            onMediaDelete: function(target) {
                deleteImage(target[0].src);
            }
        },
      });

        function uploadImage(file) {
            let data = new FormData();
            data.append("image", file);
            $.ajax({
                url: '/cms/upload/gambar', // Endpoint untuk upload gambar
                method: 'POST',
                headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                data: data,
                processData: false,
                contentType: false,
                success: function(response) {
                    const parts = response.url.split("/");
                    const fileName = parts[parts.length - 1];
                    console.log("Image uploaded successfully. File name: ", fileName);
                    const routeUrl = `{{ route('stream', ['path' => 'berita|konten','filename' => ':filename']) }}`.replace(':filename', fileName);
                    $('#summernote').summernote('insertImage', routeUrl);
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        // Tampilkan pesan kesalahan validasi
                        let errors = xhr.responseJSON.errors;
                        alert(Object.values(errors).join('\n'));
                    } else {
                        console.error("Upload Error: ", xhr.statusText);
                    }
                }
            });
        }

        function deleteImage(imageUrl) {
            $.ajax({
                url: '/cms/hapus/gambar', // Endpoint untuk delete gambar
                method: 'POST',
                data: { image: imageUrl },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Tambahkan CSRF token
                },
                success: function(response) {
                    console.log("Image deleted successfully");
                },
                error: function(xhr, status, error) {
                    console.error("Delete Error: ", status, error);
                }
            });
        }
    });

    $('#submitBerita').submit(async function(e) {
        e.preventDefault();
        loadingsubmit(true, 'btnSubmit', 'btnLoading');

        let param = {
            url: '/cms/berita/update/{{ $berita->id }}',
            method: 'POST',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false
        }

        await transAjax(param).then((res) => {
            swal({
                title: 'Berhasil',
                text: res.message,
                icon: 'success',
                timer: 3000,
            }).then(() => {
                loadingsubmit(true, 'btnSubmit', 'btnLoading');
                window.location.href = '/cms/berita';
            });
        }).catch((err) => {
            loadingsubmit(false, 'btnSubmit', 'btnLoading');
            if (err.responseJSON && err.responseJSON.errors) {
                let errors = err.responseJSON.errors;
                $.each(errors, function(key, value) {
                    let errorElement = $('#error-' + key);
                    if (errorElement.length) {
                        errorElement.html(value[0]);
                    }
                });
            } else {
                swal({
                text: "Internal Server Error!",
                icon: 'error',
            });
            }
            swal({
                text: err.responseJSON.message,
                icon: 'error',
            });
        });
    });
</script>
@endpush