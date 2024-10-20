@extends('layouts.master')
@section('title', 'Profile')

@section('content')

    <x-page-title title="Beranda" pagetitle="Profile" maintitle="Profile" />

    <div class="profile-section-area sp1 bg2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <div class="profile-header-area heading2 text-center mb-5">
                        <h5>Profile Pengguna</h5>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="d-flex align-items-start" style="gap: 30px;">
                    <div class="text-center">
                        <div class="profile-boxarea">
                            <div class="profile-img">
                                <img id="profilePicture" src="{{ URL::asset('build/img/all-images/foto.png') }}" 
                                     alt="Foto Profile" class="img-fluid rounded-circle" style="width: 200px; height: 200px;">
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
                                <table class="table">
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
                                                    <img src="{{ URL::asset('build/img/all-images/bundaliterasi.png') }}" class="profile-img-placeholder rounded-circle me-2" 
                                                         style="width: 40px; height: 40px; background-color: #ddd;"></div>
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
                            <div class="text-start mt-4"> <!-- Changed to text-start for left alignment -->
                                <button class="header-btn1">Edit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('uploadBtn').onclick = function() {
            document.getElementById('profileImageInput').click();
        };

        document.getElementById('profileImageInput').onchange = function(event) {
            const [file] = event.target.files;
            if (file) {
                document.getElementById('profilePicture').src = URL.createObjectURL(file);
            }
        };
    </script>
@endsection
