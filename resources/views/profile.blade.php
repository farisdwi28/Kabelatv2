@extends('layouts.master')
@section('title', 'Profile')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded">
                <div class="card-body p-4">
                    <h3 class="text-center mb-4">Edit Profile</h3>
                    <div class="text-center mb-4">
                        <img id="profilePreview" src="{{ $user->profile_photo_url ? asset('storage/' . $user->profile_photo_url) : asset('default-avatar.png') }}" alt="Profile Photo"
                            class="rounded-circle img-thumbnail" style="width: 120px; height: 120px; object-fit: cover;">
                    </div>
                    <form id="editProfileForm" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 text-center">
                            <label for="profile_photo" class="form-label btn btn-outline-primary">
                                Ubah Foto Profil
                            </label>
                            <input type="file" id="profile_photo" name="profile_photo" class="form-control d-none" accept="image/*">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" id="username" name="username" class="form-control" value="{{ $user->username }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password Baru</label>
                            <input type="password" id="password" name="password" class="form-control">
                            <small class="text-muted">Kosongkan jika tidak ingin mengubah password</small>
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary px-4">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#editProfileForm').on('submit', function (e) {
        e.preventDefault();

        const formData = new FormData(this);

        Swal.fire({
            title: 'Memperbarui...',
            text: 'Menunggu proses update profil...',
            showConfirmButton: false,
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading();
            }
        });

        $.ajax({
            url: '{{ route("profile.update") }}',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                Swal.close();

                if (response.status === 'success') {
                    $('#name').val(response.user.name);
                    $('#username').val(response.user.username);
                    $('#email').val(response.user.email); // Update email field

                    if (response.user.profile_photo_url) {
                        $('#profilePreview').attr('src', '{{ asset('storage') }}/' + response.user.profile_photo_url);
                    }

                    Swal.fire({
                        icon: 'success',
                        title: 'Profil berhasil diperbarui!',
                        text: response.message,
                    });
                }
            },
            error: function (xhr) {
                Swal.close(); // Close loading on error as well

                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    let errorMessage = '';
                    for (let key in errors) {
                        errorMessage += errors[key][0] + '<br>';
                    }
                    Swal.fire({
                        icon: 'error',
                        title: 'Error Validasi',
                        html: errorMessage,
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Terjadi kesalahan.', // Generic error message
                    });
                }
            },
        });
    });

    // Preview image before upload
    $('#profile_photo').change(function() {
        let reader = new FileReader();
        reader.onload = (e) => {
            $('#profilePreview').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    });
</script>

@endsection