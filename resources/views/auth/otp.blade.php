@extends('cms.layouts.auth')
@push('css')
<style>
    .otp-input {
        width: 50px;
        height: 50px;
        text-align: center;
        font-size: 24px;
        margin: 0 5px;
    }
    .otp-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
@endpush
@section('content')
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner py-4">
        @if (session('message'))
        <div class="alert alert-danger">{{ session('message') }}</div>
        @endif
        <div class="card">
          <div class="card-body">
            <h3 class="text-center">OTP</h3>
            <p class="mb-4 text-center">Silakan masukan enam digit kode OTP yang dikirim ke aplikasi SIAP TUBA</p>
            <form id="otp-form" class="text-center" action="verify-otp" method="POST">
              @csrf
                <div class="otp-container">
                    <input type="text" name="otp[]" class="form-control otp-input" maxlength="1" pattern="\d*" required>
                    <input type="text" name="otp[]" class="form-control otp-input" maxlength="1" pattern="\d*" required>
                    <input type="text" name="otp[]" class="form-control otp-input" maxlength="1" pattern="\d*" required>
                    <input type="text" name="otp[]" class="form-control otp-input" maxlength="1" pattern="\d*" required>
                    <input type="text" name="otp[]" class="form-control otp-input" maxlength="1" pattern="\d*" required>
                    <input type="text" name="otp[]" class="form-control otp-input" maxlength="1" pattern="\d*" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Verifikasi</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    // Focus otomatis ke kolom berikutnya
    const inputs = document.querySelectorAll('.otp-input');
    inputs.forEach((input, index) => {
        input.addEventListener('input', (e) => {
            if (e.target.value.length === 1 && index < inputs.length - 1) {
                inputs[index + 1].focus();
            }
        });

        input.addEventListener('keydown', (e) => {
            if (e.key === 'Backspace' && index > 0 && e.target.value === '') {
                inputs[index - 1].focus();
            }
        });
    });
</script>
@endsection