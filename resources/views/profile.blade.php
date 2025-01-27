@extends('layouts.master')
@section('title', 'Profile')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0 rounded" style="margin-top: 150px;">
                    <div class="card-body p-4">
                        <h3 class="text-center mb-4">Edit Profile</h3>
                        @if (session('success') || session('error') || session('warning'))
                        <div style="position: fixed; top: 20px; right: 20px; z-index: 9999; min-width: 300px; max-width: 400px;">
                            @if (session('success'))
                                <div style="background: linear-gradient(135deg, #064e3b, #34d399); 
                                            color: white; 
                                            padding: 20px; 
                                            border-radius: 10px; 
                                            box-shadow: 0 5px 15px rgba(0,0,0,0.15); 
                                            margin-bottom: 10px; 
                                            border-left: 5px solid #064e3b; 
                                            display: flex; 
                                            align-items: center; 
                                            justify-content: space-between;
                                            animation: slideIn 0.5s forwards;">
                                    <div style="display: flex; align-items: center; gap: 15px;">
                                        <i class="fas fa-check-circle" style="font-size: 24px;"></i>
                                        <p style="margin: 0; font-size: 0.95rem; line-height: 1.4;">{{ session('success') }}</p>
                                    </div>
                                    <button onclick="this.parentElement.remove()" 
                                            style="background: transparent; 
                                                   border: none; 
                                                   color: white; 
                                                   font-size: 20px; 
                                                   cursor: pointer; 
                                                   opacity: 0.8; 
                                                   padding: 0; 
                                                   margin-left: 15px;">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            @endif
                    
                            @if (session('warning'))
                                <div style="background: linear-gradient(135deg, #b0ad0c, #b0ad0c); 
                                            color: white; 
                                            padding: 20px; 
                                            border-radius: 10px; 
                                            box-shadow: 0 5px 15px rgba(180, 83, 9, 0.2); 
                                            margin-bottom: 10px; 
                                            display: flex; 
                                            align-items: center; 
                                            justify-content: space-between;
                                            animation: slideIn 0.5s forwards;">
                                    <div style="display: flex; align-items: center; gap: 15px;">
                                        <i class="fas fa-exclamation-triangle" style="font-size: 24px;"></i>
                                        <p style="margin: 0; font-size: 0.95rem; line-height: 1.4;">{{ session('warning') }}</p>
                                    </div>
                                    <button onclick="this.parentElement.remove()" 
                                            style="background: transparent; 
                                                   border: none; 
                                                   color: white; 
                                                   font-size: 20px; 
                                                   cursor: pointer; 
                                                   opacity: 0.8; 
                                                   padding: 0; 
                                                   margin-left: 15px;">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            @endif
                    
                            @if (session('error'))
                                <div style="background: linear-gradient(135deg, #dc3545, #f86d7d); 
                                            color: white; 
                                            padding: 20px; 
                                            border-radius: 10px; 
                                            box-shadow: 0 5px 15px rgba(0,0,0,0.15); 
                                            margin-bottom: 10px; 
                                            border-left: 5px solid #bd2130; 
                                            display: flex; 
                                            align-items: center; 
                                            justify-content: space-between;
                                            animation: slideIn 0.5s forwards;">
                                    <div style="display: flex; align-items: center; gap: 15px;">
                                        <i class="fas fa-exclamation-circle" style="font-size: 24px;"></i>
                                        <p style="margin: 0; font-size: 0.95rem; line-height: 1.4;">{{ session('error') }}</p>
                                    </div>
                                    <button onclick="this.parentElement.remove()" 
                                            style="background: transparent; 
                                                   border: none; 
                                                   color: white; 
                                                   font-size: 20px; 
                                                   cursor: pointer; 
                                                   opacity: 0.8; 
                                                   padding: 0; 
                                                   margin-left: 15px;">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            @endif
                        </div>
                    
                        <!-- Inline Keyframe Animation -->
                        <style>
                            @keyframes slideIn {
                                from {
                                    transform: translateX(120%);
                                    opacity: 0;
                                }
                                to {
                                    transform: translateX(0);
                                    opacity: 1;
                                }
                            }
                        </style>
                    
                        <!-- Auto-remove alerts after 5 seconds -->
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const alerts = document.querySelectorAll('[style*="animation: slideIn"]');
                                alerts.forEach(alert => {
                                    setTimeout(() => {
                                        alert.style.animation = 'slideOut 0.9s forwards';
                                        setTimeout(() => {
                                            alert.remove();
                                        }, 500);
                                    }, 5000);
                                });
                            });
                        </script>
                    @endif
                        <div class="text-center mb-4">
                            <img id="profilePreview"
                                src="{{ $penduduk->foto_pen ? asset('storage/images/profiles/' . $penduduk->foto_pen) : asset('default-avatar.png') }}"
                                alt="Profile Photo" class="rounded-circle img-thumbnail"
                                style="width: 120px; height: 120px; object-fit: cover;">
                        </div>

                        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 text-center">
                                <label for="profile_photo" class="header-btn1">
                                    Ubah Foto Profil
                                </label>
                                <input type="file" id="profile_photo" name="profile_photo" class="form-control d-none"
                                    accept="image/*">
                            </div>

                            <!-- Rest of the form fields remain the same -->

                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name', $user->name) }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror"
                                    id="username" name="username" value="{{ old('username', $user->username) }}" required>
                                @error('username')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ old('email', $user->email) }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password Baru</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password">
                                <small class="text-muted">*Kosongkan jika tidak ingin mengubah password</small>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="password_confirmation"
                                    name="password_confirmation">
                            </div>

                            <div class="text-center">
                                <button type="submit" class="header-btn1">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // Alert System
            function showAlert(message, type = 'error') {
                // Get or create the container
                let containerDiv = document.querySelector('.alert-container');
                if (!containerDiv) {
                    containerDiv = document.createElement('div');
                    containerDiv.classList.add('alert-container');
                    containerDiv.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
            min-width: 300px;
            max-width: 400px;
            pointer-events: none;
        `;
                    document.body.appendChild(containerDiv);
                }

                // Create alert element
                const alertDiv = document.createElement('div');
                const isSuccess = type === 'success';
                const bgColor = isSuccess ? 'linear-gradient(135deg, #28a745, #20c997)' :
                    'linear-gradient(135deg, #dc3545, #f86d7d)';
                const borderColor = isSuccess ? '#1e7e34' : '#bd2130';
                const icon = isSuccess ? 'fa-check-circle' : 'fa-exclamation-circle';

                alertDiv.style.cssText = `
        background: ${bgColor};
        color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.15);
        margin-bottom: 10px;
        border-left: 5px solid ${borderColor};
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: absolute;
        top: 0;
        right: 0;
        width: 100%;
        pointer-events: auto;
        opacity: 0;
        transform: translateX(120%);
    `;

                alertDiv.innerHTML = `
        <div style="display: flex; align-items: center; gap: 15px;">
            <i class="fas ${icon}" style="font-size: 24px;"></i>
            <p style="margin: 0; font-size: 0.95rem; line-height: 1.4;">${message}</p>
        </div>
        <button onclick="this.parentElement.remove()" 
                style="background: transparent; 
                       border: none;
                       color: white;
                       font-size: 20px;
                       cursor: pointer;
                       opacity: 0.8;
                       padding: 0;
                       margin-left: 15px;">
            <i class="fas fa-times"></i>
        </button>
    `;

                containerDiv.appendChild(alertDiv);

                requestAnimationFrame(() => {
                    alertDiv.style.transition = 'all 0.5s ease-in-out';
                    alertDiv.style.transform = 'translateX(0)';
                    alertDiv.style.opacity = '1';
                });

                setTimeout(() => {
                    alertDiv.style.transform = 'translateX(120%)';
                    alertDiv.style.opacity = '0';
                    setTimeout(() => {
                        alertDiv.remove();
                        if (containerDiv.children.length === 0) {
                            containerDiv.remove();
                        }
                    }, 500);
                }, 5000);
            }

            // Show alerts from session if they exist
            document.addEventListener('DOMContentLoaded', function() {
                // Check for success message
                @if (session('success'))
                    showAlert('{{ session('success') }}', 'success');
                @endif

                // Check for error message
                @if (session('error'))
                    showAlert('{{ session('error') }}', 'error');
                @endif

                // Profile photo preview functionality
                const profilePhotoInput = document.getElementById('profile_photo');
                const profilePreview = document.getElementById('profilePreview');

                profilePhotoInput.addEventListener('change', function(e) {
                    const file = e.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            profilePreview.src = e.target.result;
                        }
                        reader.readAsDataURL(file);
                    }
                });
            });

            // Add the necessary styles
            const styleSheet = document.createElement('style');
            styleSheet.textContent = `
    @keyframes slideIn {
        from {
            transform: translateX(120%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes slideOut {
        from {
            transform: translateX(0);
            opacity: 1;
        }
        to {
            transform: translateX(120%);
            opacity: 0;
        }
    }

    .alert-container {
        pointer-events: none;
    }

    .alert-container > div {
        pointer-events: auto;
    }
`;
            document.head.appendChild(styleSheet);
        </script>
    @endpush
@endsection
