@extends('layouts.auth')

@section('title', 'Lupa Password')

@section('content')
    <div class="container-fluid p-0">
        <div class="row no-gutters"
            style="height: 100vh; background-image: url('{{ asset('build/img/bg/login-background.jpg') }}'); background-size: cover; background-position: center;">
            <div class="col-lg-6 d-flex justify-content-center align-items-center">
                <div class="card rounded-4 shadow-sm border-0 p-4" style="background-color: rgba(255, 255, 255, 0.8);">
                    <div class="text-center mb-4">
                        <img src="{{ asset('build/img/logo/kabelat.png') }}" alt="Logo Kabelat" style="max-width: 120px;">
                        <h4 class="fw-bold">Reset Password</h4>
                        <p class="mb-4 text-dark">Masukkan username/email dan password baru Anda</p>
                    </div>

                    {{-- Notifikasi Sukses atau Error --}}
                    <div id="alertsContainer">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                ⚠️{{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        {{-- Menampilkan error validasi --}}
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>⚠️{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                    </div>

                    <form id="resetPasswordForm" action="{{ route('password.reset') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="login" class="form-label">Username atau Email</label>
                            <input type="text" name="login" id="login"
                                class="form-control @error('login') is-invalid @enderror" value="{{ old('login') }}"
                                required>
                            @error('login')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password Baru</label>
                            <div class="input-group">
                                <input type="password" name="password" id="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    value="{{ old('password') }}" required>
                                <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                            </div>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Konfirmasi Password Baru</label>
                            <div class="input-group">
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="form-control" required>
                                <button class="btn btn-outline-secondary" type="button" id="togglePasswordConfirmation">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                            </div>
                            @error('password_confirmation')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-dark">Reset Password</button>
                            <a href="{{ route('login') }}" class="btn btn-outline-secondary">Kembali ke Login</a>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-6 d-flex justify-content-center align-items-center">
                <img src="{{ asset('build/img/logo/img.png') }}" class="img-fluid" alt="Gambar Kabelat">
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Toggle Password Visibility
            ['togglePassword', 'togglePasswordConfirmation'].forEach(id => {
                document.getElementById(id).addEventListener('click', function() {
                    const input = this.previousElementSibling;
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

            // Auto-hide alerts after 5 seconds
            const autoHideAlerts = () => {
                const alerts = document.querySelectorAll('.alert');
                alerts.forEach(alert => {
                    setTimeout(() => {
                        alert.classList.remove('show'); // Hide the alert
                        setTimeout(() => {
                            alert.remove(); // Remove alert after fade-out animation
                        }, 150); // Wait for fade-out animation to complete
                    }, 5000); // 5 seconds delay
                });
            };

            // Call the auto-hide function
            autoHideAlerts();
        });
    </script>
@endpush
