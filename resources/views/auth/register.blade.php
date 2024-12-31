@extends('layouts.auth')

@section('title', 'Register')

@section('content')
<div class="container-fluid p-0">
    <div class="row no-gutters" style="height: 100vh; background-image: url('{{ asset('build/img/bg/login-background.jpg') }}'); background-size: cover; background-position: center;">
        <!-- Kolom Kiri: Form Register -->
        <div class="col-lg-6 d-flex justify-content-center align-items-center">
            <div class="card rounded-4 shadow-sm border-0 p-4" style="background-color: rgba(255, 255, 255, 0.8);">
                <div class="text-center mb-4">
                    <img src="{{ asset('build/img/logo/kabelat.png') }}" alt="Logo Kabelat" style="max-width: 120px;">
                    <h4 class="fw-bold">Daftar Akun Baru</h4>
                    <p class="text-dark">Silakan lengkapi data diri Anda untuk melanjutkan.</p>
                </div>
                <div class=" text-center">
                  <p class="mb-2">Sudah Verifikasi NIK? <a href="{{ route('verify-nik') }}" class="fw-bold text-dark text-decoration">Verifikasi</a></p>
              </div>

                <!-- Check if NIK is verified -->
                @if (!session('verified_nik'))
                    <div class="alert alert-danger" role="alert">
                        Anda belum melakukan verifikasi NIK. Silakan verifikasi NIK Anda terlebih dahulu.
                        <a href="{{ url('/verify-nik') }}" class="alert-link">Verifikasi NIK</a>
                    </div>
                    <button type="button" class="btn btn-dark" disabled>Daftar</button>
                @else
                    <form action="/register" method="POST" id="registerForm">
                        @csrf
                        <div class="mb-3">
                            <label for="nik" class="form-label">NIK <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('nik') is-invalid @enderror" 
                                   name="nik" value="{{ session('verified_nik', old('nik')) }}" required readonly
                                   placeholder="NIK terverifikasi">
                            @error('nik')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                   name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                   name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" 
                                   name="username" value="{{ old('username') }}" required>
                            @error('username')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                            <div class="input-group" id="show_hide_password">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                       name="password" required>
                                <a href="javascript:;" class="btn1 input-group-text bg-transparent" id="toggleNikVisibility">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Konfirmasi Password <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="password" class="form-control" 
                                       name="password_confirmation" required>
                                <a href="javascript:;" class="btn1 input-group-text bg-transparent" id="toggleNikVisibility">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </div>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" required id="terms">
                            <label class="form-check-label text-green" for="terms">
                         <a href="#" class="text-green">  Saya setuju dengan syarat dan ketentuan</a>
                            </label>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-dark" id="submitBtn">Daftar</button>
                        </div>

                        <div class="mt-4 text-center">
                            <p class="mb-0">Sudah punya akun? <a href="{{ route('login') }}" class="fw-bold text-dark text-decoration">Masuk</a></p>
                        </div>
                    </form>
                @endif

                <!-- Pesan Status Progres -->
                <div id="progressStatus" class="d-none text-center mt-3">
                    <p id="progressMessage" class="text-dark">Sedang memverifikasi...</p>
                    <div class="progress">
                        <div id="progressBar" class="progress-bar progress-bar-striped progress-bar-animated" style="width: 0%"></div>
                    </div>
                </div>

                <!-- Pesan Verifikasi -->
                <div id="verificationStatus" class="d-none text-center mt-3">
                    <p id="successMessage" class="text-success"></p>
                    <p id="errorMessage" class="text-danger"></p>
                </div>
            </div>
        </div>

        <!-- Kolom Kanan: Gambar -->
        <div class="col-lg-6 d-flex justify-content-center align-items-center">
            <img src="{{ asset('build/img/logo/img.png') }}" class="img-fluid" alt="Gambar Kabelat" style="max-width: 100%; max-height: 100%; object-fit: contain;">
        </div>
    </div>
</div>
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
  
  // Form submission handling
  document.getElementById('registerForm').addEventListener('submit', function(event) {
      event.preventDefault();
      
      // Show progress
      const progressStatus = document.getElementById('progressStatus');
      const submitBtn = document.getElementById('submitBtn');
      progressStatus.classList.remove('d-none');
      submitBtn.disabled = true;
  
      // Submit form
      const formData = new FormData(this);
      
      fetch('/register', {
          method: 'POST',
          headers: {
              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
              'Accept': 'application/json'
          },
          body: formData
      })
      .then(response => response.json())
      .then(data => {
          if (data.status === 'success') {
              // Show success message
              const successMessage = document.getElementById('successMessage');
              successMessage.textContent = 'Registrasi berhasil! Mengalihkan...';
              document.getElementById('verificationStatus').classList.remove('d-none');
              
              // Redirect after delay
              setTimeout(() => {
                window.location.href = data.redirect;
              }, 2000);
          } else {
              throw new Error(data.message || 'Terjadi kesalahan');
          }
      })
      .catch(error => {
          // Show error message
          const errorMessage = document.getElementById('errorMessage');
          errorMessage.textContent = error.message || 'Gagal melakukan registrasi';
          document.getElementById('verificationStatus').classList.remove('d-none');
          submitBtn.disabled = false;
      })
      .finally(() => {
          progressStatus.classList.add('d-none');
      });
  });
  </script>
@endpush
@endsection
