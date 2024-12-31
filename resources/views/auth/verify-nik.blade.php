@extends('layouts.auth')

@section('title', 'Verifikasi NIK')

@section('content')
    <div class="container-fluid p-0">
        <div class="row no-gutters"
            style="height: 100vh; background-image: url('{{ asset('build/img/bg/login-background.jpg') }}'); background-size: cover; background-position: center;">
            <!-- Form -->
            <div class="col-lg-6 d-flex justify-content-center align-items-center">
                <div class="card rounded-4 shadow-sm border-0 p-4" style="background-color: rgba(255, 255, 255, 0.8);">
                    <div class="text-center mb-4">
                        <img src="{{ asset('build/img/logo/kabelat.png') }}" alt="Logo Kabelat" style="max-width: 120px;">
                        <h4 class="fw-bold mt-3">Verifikasi NIK</h4>
                        <p class="mb-10 text-dark">Masukkan NIK anda untuk menunjukan masyarakat Kab. Bandung</p>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex justify-content-center mb-3">
                            <span id="progressIcon" class="fa-solid fa-spinner fa-spin"></span>
                        </div>
                        <p id="progressText" class="text-center">Verifikasi NIK sedang diproses...</p>
                    </div>

                    <form id="verifyNikForm">
                        @csrf
                        <div class="mb-3">
                            <label for="nik" class="form-label">NIK <span class="text-danger">*</span></label>
                            <div class="input-group" id="show_hide_nik">
                                <input type="text" class="form-control" id="nik" name="nik" required
                                    placeholder="Masukkan NIK 16 digit">
                                <a href="javascript:;" class="btn1 input-group-text bg-transparent"
                                    id="toggleNikVisibility">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </div>
                            <div class="alert alert-danger mt-2 d-none" id="nikError">
                                <i class="fa-solid fa-exclamation-circle me-2"></i>
                                <span class="error-message"></span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark w-100">Verifikasi</button>
                        <div class="mt-4 text-center">
                            <p class="mb-0">Sudah punya akun? <a href="{{ route('login') }}"
                                    class="fw-bold text-dark text-decoration">Masuk</a></p>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Image -->
            <div class="col-lg-6 d-flex justify-content-center align-items-center">
                <img src="{{ asset('build/img/logo/img.png') }}" class="img-fluid" alt="Gambar Kabelat">
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header justify-content-center border-0 py-1">
                    <h4 class="modal-title fw-semibold text-center" id="confirmModalLabel">Apakah benar ini anda?</h4>
                </div>
                <div class="modal-body px-2 py-2">
                    <div class="px-3">
                        <div class="row mb-2">
                            <div class="col-4 text-start"><strong>NIK</strong></div>
                            <div class="col-1 text-center">:</div>
                            <div class="col-7"><span id="showNik"></span></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 text-start"><strong>Nama</strong></div>
                            <div class="col-1 text-center">:</div>
                            <div class="col-7"><span id="showName"></span></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 text-start"><strong>Jenis Kelamin</strong></div>
                            <div class="col-1 text-center">:</div>
                            <div class="col-7"><span id="showGender"></span></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 text-start"><strong>Alamat</strong></div>
                            <div class="col-1 text-center">:</div>
                            <div class="col-7"><span id="showAddress"></span></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center py-1">
                    <button type="button" class="btn btn-danger me-2" data-bs-dismiss="modal">Tidak</button>
                    <a href="{{ route('register') }}" class="btn btn-success">Ya</a>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                // Toggle visibility of NIK input field
                $('#toggleNikVisibility').on('click', function() {
                    var nikField = $('#nik');
                    var icon = $(this).find('i');

                    if (nikField.attr('type') === 'password') {
                        nikField.attr('type', 'text');
                        icon.removeClass('fa-eye').addClass('fa-eye-slash');
                    } else {
                        nikField.attr('type', 'password');
                        icon.removeClass('fa-eye-slash').addClass('fa-eye');
                    }
                });

                $('#verifyNikForm').on('submit', function(e) {
                    e.preventDefault();

                    var nik = $('#nik').val();
                    var token = $('meta[name="csrf-token"]').attr('content');

                    // Reset error state and icon
                    $('#nikError').addClass('d-none');
                    $('#nik').removeClass('is-invalid');

                    // Reset icon and text to "Processing"
                    $('#progressIcon').removeClass('fa-check-circle fa-times-circle text-success text-danger')
                        .addClass('fa-spinner fa-spin');
                    $('#progressText').text('Verifikasi NIK sedang diproses...');

                    $.ajax({
                        url: '/verify-nik',
                        type: 'POST',
                        data: {
                            nik: nik,
                            _token: token
                        },
                        headers: {
                            'Accept': 'application/json'
                        },
                        success: function(data) {
                            if (data.status === 'success') {
                                $('#progressIcon').removeClass('fa-spinner fa-spin')
                                    .addClass('fa-check-circle text-success');
                                $('#progressText').text(
                                    'Verifikasi NIK berhasil, lanjut ke registrasi...');

                                // Masking data
                                var maskedNik = data.member.no_ktp.substring(0, 4) +
                                    '**** **** ****';
                                $('#showNik').text(maskedNik);
                                var firstName = data.member.nm_pen.split(' ')[
                                0]; // Assuming the first name is before space
                                var lastName = data.member.nm_pen.split(' ')[1] ||
                                ''; // Assuming the last name is after the space
                                var maskedFirstName = firstName.substring(0, 3) +
                                '***'; // First 3 chars + asterisks
                                var maskedLastName = lastName.substring(0, 3) +
                                '***'; // First 3 chars + asterisks
                                var maskedName = maskedFirstName + ' ' +
                                maskedLastName; // Combine names
                                $('#showName').text(maskedName);

                                var maskedAddress = data.member.alamat.substring(0, 10) + '...';
                                var maskedVillage = data.member.desa.substring(0, 5) + '...';
                                var maskedDistrict = data.member.kecamatan.substring(0, 5) + '...';
                                $('#showAddress').text(maskedAddress + ', ' + maskedVillage + ', ' +
                                    maskedDistrict);
                                $('#showGender').text(data.member.jk);

                                // Show modal
                                $('#confirmModal').modal('show');
                            } else {
                                $('#progressIcon').removeClass('fa-spinner fa-spin')
                                    .addClass('fa-times-circle text-danger');
                                $('#progressText').text('Silakan masukkan NIK yang sesuai');

                                $('#nik').addClass('is-invalid');
                                $('#nikError').removeClass('d-none');
                                $('#nikError .error-message').text(
                                    'NIK yang Anda masukkan tidak terdaftar di Kabupaten Bandung.'
                                );
                            }
                        },
                        error: function(xhr, status, error) {
                            $('#nik').addClass('is-invalid');
                            $('#nikError').removeClass('d-none');
                            $('#nikError .error-message').text(xhr.responseJSON?.message ||
                                'Terjadi kesalahan sistem');
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
