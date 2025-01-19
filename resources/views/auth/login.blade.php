@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <div class="container-fluid p-0">
        <div class="row no-gutters"
            style="height: 100vh; background-image: url('{{ asset('build/img/bg/login-background.jpg') }}'); background-size: cover; background-position: center;">
            <!-- Kolom Kiri: Form Login -->
            <div class="col-lg-6 d-flex justify-content-center align-items-center">
                <div class="card rounded-4 shadow-sm border-0 p-4" style="background-color: rgba(255, 255, 255, 0.8);">
                    <div class="text-center mb-4">
                        <img src="{{ asset('build/img/logo/kabelat.png') }}" alt="Logo Kabelat" style="max-width: 120px;">
                        <h4 class="fw-bold">Selamat Datang!</h4>
                        <p class="mb-4 text-dark">Selamat datang di Kampung Bedas Literat Kab. Bandung</p>
                    </div>

                    <form action="{{ route('login') }}" method="post">
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
                            <label for="password-input" class="form-label">Password</label>
                            <div class="input-group" id="show_hide_password">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" required>
                                <a href="javascript:;" class="btn1 input-group-text bg-transparent"><i
                                        class="fa-solid fa-eye"></i></a>
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
                            <p class="mb-0">Belum punya akun? <a href="{{ route('verify-nik') }}"
                                    class="fw-bold text-dark text-decoration">Daftar</a></p>
                        </div>
                        <div class="mt-3 text-center">
                            <p class="mb-0">Lupa password? <a href="#" class="fw-bold text-dark text-decoration"
                                    id="forgotPasswordLink">Reset</a></p>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Kolom Kanan: Gambar -->
            <div class="col-lg-6 d-flex justify-content-center align-items-center">
                <img src="{{ asset('build/img/logo/img.png') }}" class="img-fluid" alt="Gambar Kabelat"
                    style="max-width: 100%; max-height: 100%; object-fit: contain;">
            </div>
        </div>
    </div>

    <!-- Modal Verifikasi NIK -->
    <!-- Modal Verify NIK -->
    <div class="modal fade" id="verifyNikModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header justify-content-center border-0 py-1">
                    <h4 class="modal-title fw-semibold text-center">Verifikasi Identitas</h4>
                </div>
                <div class="modal-body px-3 py-3">
                    <form id="verifyNikForm">
                        @csrf
                        <div class="mb-3">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" name="nik" id="nik" class="form-control" required maxlength="16"
                                placeholder="Masukkan NIK Anda">
                            <div id="nikError" class="invalid-feedback"></div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-center py-2">
                    <button type="button" class="btn btn-danger me-2" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-success" id="verifyNikBtn">Verifikasi</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Konfirmasi Data -->
    <div class="modal fade" id="confirmDataModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header justify-content-center border-0 py-1">
                    <h4 class="modal-title fw-semibold text-center">Apakah data berikut ini benar?</h4>
                </div>
                <div class="modal-body px-3">
                    <table class="table table-borderless">
                        <tr>
                            <td>NIK</td>
                            <td>:</td>
                            <td id="modalNik"></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td id="modalNama"></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer justify-content-center py-2">
                    <button type="button" class="btn btn-danger me-2" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-success" id="confirmDataBtn">Ya, Data Benar</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inisialisasi modal yang dibutuhkan
            const verifyNikModal = new bootstrap.Modal(document.getElementById('verifyNikModal'));
            const confirmDataModal = new bootstrap.Modal(document.getElementById('confirmDataModal'));

            // Link Lupa Password
            document.getElementById('forgotPasswordLink').addEventListener('click', function(e) {
                e.preventDefault();
                verifyNikModal.show();
            });

            // Verifikasi NIK
            document.getElementById('verifyNikBtn').addEventListener('click', function() {
                const nik = document.getElementById('nik').value;
                const nikError = document.getElementById('nikError');
                const nikInput = document.getElementById('nik');

                // Reset error state
                nikError.textContent = '';
                nikInput.classList.remove('is-invalid');

                // Membuat FormData object
                const formData = new FormData();
                formData.append('nik', nik);

                fetch('{{ route('password.verify-nik') }}', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        },
                        body: formData
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                if (data.success) {
                    // Masking NIK (show only first 4 digits and asterisks)
                    var maskedNik = data.user.nik.substring(0, 4) + '**** **** ****';
                    document.getElementById('modalNik').textContent = maskedNik;

                    // Masking Name (show first 3 chars + *** and last 3 chars)
                    // var firstName = data.user.name.split(' ')[0]; // Assuming the first name is before the space
                    // var lastName = data.user.name.split(' ')[1] || ''; // Assuming the last name is after the space
                    // var maskedFirstName = firstName.substring(0, 3) + '***'; // First 3 chars + asterisks
                    // var maskedLastName = lastName.substring(0, 3) + '***'; // First 3 chars + asterisks
                    // var maskedName = maskedFirstName + ' ' + maskedLastName; // Combine names
                    var fullName = data.user.name; // Nama lengkap tanpa pemaskingan
                    document.getElementById('modalNama').textContent = fullName;

                    // document.getElementById('modalNama').textContent = maskedName;

                    // Hide the NIK modal and show the confirmation modal
                    verifyNikModal.hide();
                    confirmDataModal.show();
                          } else {
                            nikError.textContent = data.message;
                            nikInput.classList.add('is-invalid');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        nikError.textContent = 'Terjadi kesalahan. Silakan coba lagi.';
                        nikInput.classList.add('is-invalid');
                    });
            });



            // Konfirmasi Data - redirect to forgot-password page
            document.getElementById('confirmDataBtn').addEventListener('click', function() {
                confirmDataModal.hide();
                window.location.href =
                    '{{ route('password.reset') }}'; // Adjust the route name according to your application
            });

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
        });
    </script>
@endpush
