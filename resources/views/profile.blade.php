@extends('layouts.master')
@section('title', 'Profile')

@section('content')

    <x-page-title title="Beranda" pagetitle="Profile" maintitle="Profile" />

    <div class="profile-section-area sp1 bg2 py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <div class="profile-header-area heading2 text-center mb-5">
                        <h5>Profile Pengguna</h5>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="d-flex flex-column flex-md-row align-items-start justify-content-center" style="gap: 30px;">
                    <div class="text-center">
                        <div class="profile-boxarea">
                            <div class="profile-img">
                                <img id="profilePicture" src="{{ URL::asset('build/img/all-images/foto.png') }}" 
                                     alt="Foto Profile" class="img-fluid rounded-circle" 
                                     style="width: 200px; height: 200px; object-fit: cover;">
                            </div>
                            <div class="mt-3">
                                <button class="header-btn1" id="uploadBtn">Upload Foto Baru</button>
                                <input type="file" id="profileImageInput" style="display:none;" accept="image/*">
                            </div>
                        </div>
                    </div>
                    <div class="flex-grow-1">
                        <div class="profile-info-area sp1 bg2">
                            <div class="profile-header-area heading2 mb-4">
                                <h5 class="text-left">Info Anda</h5>
                            </div>
                            <div class="profile-box p-4" style="border: 1px solid #ccc; border-radius: 8px;">
                                <table class="table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td><strong>Nama</strong></td>
                                            <td>: Wawan Setyawan</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Tempat, Tanggal Lahir</strong></td>
                                            <td>: Soreang, 14 Juni 1987</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Nomor Hp</strong></td>
                                            <td>: +628123456789</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Email</strong></td>
                                            <td>: wawanuhuy@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Jenis Kelamin</strong></td>
                                            <td>: Laki-laki</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Alamat Lengkap</strong></td>
                                            <td>: Jl. Pasir Kaliki No.224, RT 02/RW 10, Cihuelang, Ciparay, Kab. Bandung, Jawa Barat.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Komunitas yang anda ikuti</strong></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ URL::asset('build/img/all-images/bundaliterasi.png') }}" 
                                                         class="profile-img-placeholder rounded-circle me-2" 
                                                         style="width: 40px; height: 40px; background-color: #ddd;">
                                                    <div>
                                                        <strong>Bunda Literasi</strong><br>
                                                        <small>Sebagai Ketua</small>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <button type="button" class="header-btn1 mt-3" data-bs-toggle="modal" data-bs-target="#editProfileModal">
                                Edit <span><i class="fa-solid fa-arrow-right"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #f0f0f0; border-bottom: 1px solid #e0e0e0;">
                    <h5 class="modal-title" id="editProfileModalLabel" style="font-size: 1.5rem; font-weight: bold;">Edit Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="padding: 20px 40px;">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label for="nama" class="form-label" style="font-weight: 600;">Nama</label>
                                    <input type="text" class="form-control form-control-lg" id="nama" value="Wawan Setyawan" 
                                           style="border: 1px solid #ddd; border-radius: 8px; padding: 10px;">
                                </div>
                                <div class="mb-4">
                                    <label for="ttl" class="form-label" style="font-weight: 600;">Tempat, Tanggal Lahir</label>
                                    <input type="text" class="form-control form-control-lg" id="ttl" value="Soreang, 14 Juni 1987" 
                                           style="border: 1px solid #ddd; border-radius: 8px; padding: 10px;">
                                </div>
                                <div class="mb-4">
                                    <label for="phone" class="form-label" style="font-weight: 600;">Nomor Hp</label>
                                    <input type="text" class="form-control form-control-lg" id="phone" value="+628123456789" 
                                           style="border: 1px solid #ddd; border-radius: 8px; padding: 10px;">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label for="email" class="form-label" style="font-weight: 600;">Email</label>
                                    <input type="email" class="form-control form-control-lg" id="email" value="wawanuhuy@gmail.com" 
                                           style="border: 1px solid #ddd; border-radius: 8px; padding: 10px;">
                                </div>
                                <div class="mb-4">
                                    <label for="gender" class="form-label" style="font-weight: 600;">Jenis Kelamin</label>
                                    <div class="d-flex align-items-center">
                                        <div class="form-check me-3">
                                            <input class="form-check-input" type="radio" name="gender" id="male" value="Laki-laki" checked>
                                            <label class="form-check-label" for="male" style="font-weight: 500;">
                                                Laki-laki
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="female" value="Perempuan">
                                            <label class="form-check-label" for="female" style="font-weight: 500;">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="alamat" class="form-label" style="font-weight: 600;">Alamat Lengkap</label>
                                    <textarea class="form-control form-control-lg" id="alamat" rows="3" 
                                              style="border: 1px solid #ddd; border-radius: 8px; padding: 10px;">Jl. Pasir Kaliki No.224, RT 02/RW 10, Cihuelang, Ciparay, Kab. Bandung, Jawa Barat.</textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer" style="background-color: #f0f0f0; border-top: 1px solid #e0e0e0;">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" 
                            style="padding: 10px 20px; border-radius: 6px; background-color: #6c757d; color: white;">Tutup</button>
                    <button type="button" class="btn btn-primary" 
                            style="padding: 10px 20px; border-radius: 6px; background-color: #007bff; color: white;">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('uploadBtn').addEventListener('click', function() {
            document.getElementById('profileImageInput').click();
        });
    
        document.getElementById('profileImageInput').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('profilePicture').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
    
@endsection
