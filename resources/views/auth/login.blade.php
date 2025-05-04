@extends('cms.layouts.auth')
@section('content')
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register -->
        @if (session('error'))
          <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <!-- /Logo -->
            <h4 class="mb-2">Hallo selamat datang 👋</h4>
            <p class="mb-4">Silakan login menggunakan kredensial Anda</p>

            <form class="mb-3" action="/login" method="POST">
              @csrf
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" autofocus/>
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Password</label>
                  <a href="#">
                    <small>Forgot Password?</small>
                  </a>
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password"/>
                </div>
              </div>
              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="showPassword" />
                  <label class="form-check-label" for="showPassword"> Tampilkan password</label>
                </div>
              </div>
              <div class="mb-3">
                <div id="loadingSubmit" class="row d-none">
                  <button class="btn btn-primary btn-block btn-lg" type="button" disabled>
                      <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Tunggu sebentar yah...
                  </button>
              </div>
                <button id="btnLogin" class="btn btn-primary d-grid w-100" type="submit">Login</button>
              </div>
            </form>
            <a href="/auth/google" class="btn btn-outline-primary w-100">Login dengn Google</a>
          </div>
        </div>
        <!-- /Register -->
      </div>
    </div>
  </div>
@endsection
@push('js')
    <script type="text/javascript">
      $('#showPassword').on('change', function() {
            var passwordField = $('#password');
            var passwordFieldType = passwordField.attr('type');
            if ($(this).is(':checked')) {
                passwordField.attr('type', 'text'); 
            } else {
                passwordField.attr('type', 'password'); 
            }
      });

      $('#btnLogin').click(function() {
        $('#btnLogin').addClass('d-none');
        $('#loadingSubmit').removeClass('d-none');
      });
    </script>
@endpush
