@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="container-fluid p-0">
    <div class="row no-gutters" style="height: 100vh; background-image: url('{{ asset('build/img/bg/login-background.jpg') }}'); background-size: cover; background-position: center;">
        <!-- Kolom Kiri: Form Login -->
        <div class="col-lg-6 d-flex justify-content-center align-items-center">
            <div class="card rounded-4 shadow-sm border-0 p-4" style="background-color: rgba(255, 255, 255, 0.8);">
                <div class="text-center mb-4">
                    <img src="{{ asset('build/img/logo/kabelat.png') }}" alt="Logo Kabelat" style="max-width: 120px;">
                    <h4 class="fw-bold">Selamat Datang!</h4>
                    <p class="mb-4 text-dark">Selamat datang di Dinas Perpustakaan dan Kearsipan Kab. Bandung</p>
                </div>

                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="login" class="form-label">Username atau Email</label>
                        <input type="text" name="login" id="login" class="form-control @error('login') is-invalid @enderror" value="{{ old('login') }}" required>
                        @error('login')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password-input" class="form-label">Password</label>
                        <div class="input-group" id="show_hide_password">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                            <a href="javascript:;" class="btn1 input-group-text bg-transparent"><i class="fa-solid fa-eye"></i></a>
                        </div>
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="remember" id="auth-remember-check">
                        <label class="form-check-label" for="auth-remember-check">Ingat Saya</label>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark">Masuk</button>
                    </div>

                    <div class="mt-4 text-center">
                        <p class="mb-0">Belum punya akun? <a href="{{ route('verify-nik') }}" class="fw-bold text-dark text-decoration">Daftar</a></p>
                    </div>
                </form>
            </div>
        </div>

        <!-- Kolom Kanan: Gambar -->
        <div class="col-lg-6 d-flex justify-content-center align-items-center">
            <img src="{{ asset('build/img/logo/img.png') }}" class="img-fluid" alt="Gambar Kabelat" style="max-width: 100%; max-height: 100%; object-fit: contain;">
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
  // Toggle password visibility 
  document.querySelectorAll('#toggleNikVisibility').forEach(button => {
      button.addEventListener('click', function() {
          const input = this.closest('.input-group').querySelector('input');
          const icon = this.querySelector('i');
          
          if (input.type === 'password') {
              input.type = 'text';
              icon.classList.remove('fa-eye');
              icon.classList.add('fa-eye-slash');
          } else {
              input.type = 'password'; 
              icon.classList.remove('fa-eye-slash');
              icon.classList.add('fa-eye');
          }
      });
  });
</script>
@endpush
