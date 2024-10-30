@extends('layouts.master')
@section('title', 'Profile')

@section('content')

    <x-page-title title="Beranda" pagetitle="Profile" maintitle="Profile" />

    <div class="profile-section-area sp1 py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <div class="profile-header-area heading2 text-center mb-5">
                        <h5 class="text-3xl font-bold">Profile Pengguna</h5>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="d-flex flex-column flex-md-row align-items-start justify-content-center" style="gap: 30px;">
                    <div class="text-center">
                        <div class="profile-boxarea">
                            <div class="profile-img">
                                <img id="profilePicture" src="{{ URL::asset('build/img/all-images/profile.png') }}"
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
                        <div class="profile-info-area sp1">
                            <div class="profile-header-area heading2 mb-4">
                                <h5 class="text-left text-2xl font-semibold">Info Anda</h5>
                            </div>
                            <div class="profile-box p-4 border border-gray-300 rounded-lg shadow-md">
                                <table class="table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td  class="text-black" style="font-size: 20px"><strong>Nama</strong></td>
                                            <td class="text-black" style="font-size: 18px">: Wawan Setyawan</td>
                                        </tr>
                                        <tr>
                                            <td  class="text-black" style="font-size: 20px"><strong>Tempat, Tanggal Lahir</strong></td>
                                            <td class="text-black" style="font-size: 18px">: Soreang, 14 Juni 1987</td>
                                        </tr>
                                        <tr>
                                            <td  class="text-black" style="font-size: 20px"><strong>Nomor Hp</strong></td>
                                            <td class="text-black" style="font-size: 18px">: +628123456789</td>
                                        </tr>
                                        <tr>
                                            <td  class="text-black" style="font-size: 20px"><strong>Email</strong></td>
                                            <td class="text-black" style="font-size: 18px">: wawanuhuy@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td  class="text-black" style="font-size: 20px"><strong>Jenis Kelamin</strong></td>
                                            <td class="text-black" style="font-size: 18px">: Laki-laki</td>
                                        </tr>
                                        <tr>
                                            <td  class="text-black" style="font-size: 20px"><strong>Alamat Lengkap</strong></td>
                                            <td class="text-black" style="font-size: 18px">: Jl. Pasir Kaliki No.224, RT 02/RW 10, Cihuelang, Ciparay,
                                                Kab. Bandung, Jawa Barat.</td>
                                        </tr>
                                        <tr>
                                            <td  class="text-black" style="font-size: 20px"><strong>Komunitas yang Anda Ikuti</strong></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ URL::asset('build/img/all-images/bundaliterasi.png') }}"
                                                        class="profile-img-placeholder rounded-circle me-2"
                                                        style="width: 40px; height: 40px; background-color: #ddd;">
                                                    <div>
                                                        <strong class="text-black" style="font-size: 18px">Bunda Literasi</strong><br>
                                                        <small class="text-black" style="font-size: 16px">Sebagai Ketua</small>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <a href="contact" class="header-btn1" data-bs-toggle="modal"
                                data-bs-target="#editProfileModal">Edit <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-gray-100 border-b border-gray-200">
                    <h5 class="modal-title text-xl font-bold" id="editProfileModalLabel">Edit Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label for="nama" class="form-label font-semibold text-lg">Nama</label>
                                    <input type="text"
                                        class="form-control form-control-lg border border-gray-300 rounded-md p-3"
                                        id="nama" value="Wawan Setyawan">
                                </div>
                                <div class="mb-4">
                                    <label for="ttl" class="form-label font-semibold text-lg">Tempat, Tanggal
                                        Lahir</label>
                                    <input type="text"
                                        class="form-control form-control-lg border border-gray-300 rounded-md p-3"
                                        id="ttl" value="Soreang, 14 Juni 1987">
                                </div>
                                <div class="mb-4">
                                    <label for="phone" class="form-label font-semibold text-lg">Nomor Hp</label>
                                    <input type="text"
                                        class="form-control form-control-lg border border-gray-300 rounded-md p-3"
                                        id="phone" value="+628123456789">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label for="email" class="form-label font-semibold text-lg">Email</label>
                                    <input type="email"
                                        class="form-control form-control-lg border border-gray-300 rounded-md p-3"
                                        id="email" value="wawanuhuy@gmail.com">
                                </div>
                                <div class="mb-4">
                                    <label for="gender" class="form-label font-semibold text-lg">Jenis Kelamin</label>
                                    <div class="d-flex align-items-center">
                                        <div class="form-check me-3">
                                            <input class="form-check-input" type="radio" name="gender" id="male"
                                                value="Laki-laki" checked>
                                            <label class="form-check-label" for="male"
                                                style="font-weight: 500; font-size: 1.1rem;">
                                                Laki-laki
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="female"
                                                value="Perempuan">
                                            <label class="form-check-label" for="female"
                                                style="font-weight: 500; font-size: 1.1rem;">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="alamat" class="form-label font-semibold text-lg">Alamat Lengkap</label>
                                    <textarea class="form-control form-control-lg border border-gray-300 rounded-md p-3" id="alamat" rows="3">Jl. Pasir Kaliki No.224, RT 02/RW 10, Cihuelang, Ciparay, Kab. Bandung, Jawa Barat.</textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer bg-gray-100 border-t border-gray-200">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>

@endsection



