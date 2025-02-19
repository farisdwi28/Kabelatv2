@extends('layouts.master')
@section('title', 'Join Komunitas')

@section('content')

    {{-- Updated Page Title Section --}}
    <div class="about-header-area"
        style="background-image: url({{ URL::asset('build/img/bg/header1.jpg') }}); background-repeat: no-repeat; background-size: cover; background-position: center; margin: -24px -24px  -24px;">
        <img src="{{ URL::asset('build/img/elements/elements1.png') }}" alt="" class="elements1 aniamtion-key-1">
        <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt="" class="star2 keyframe5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="about-inner-header heading9 text-center">
                        <h1>Join Komunitas</h1>
                        <a href="index">Beranda</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Alert Container -->
    @if (session('success') || session('error'))
        <div style="position: fixed; top: 20px; right: 20px; z-index: 9999; min-width: 300px; max-width: 400px;">
            @if (session('success'))
                <div
                    style="background: linear-gradient(135deg, #064e3b, #149f6c); 
                            color: white; 
                            padding: 20px; 
                            border-radius: 10px; 
                            box-shadow: 0 5px 15px rgba(0,0,0,0.15); 
                            margin-bottom: 10px; 
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

            @if (session('error'))
                <div
                    style="background: linear-gradient(135deg,  #7b1f1f, #e63946); 
                            color: white; 
                            padding: 20px; 
                            border-radius: 10px; 
                            box-shadow: 0 5px 15px rgba(0,0,0,0.15); 
                            margin-bottom: 10px; 
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

    <!--===== JOIN KOMUNITAS AREA STARTS =======-->
    <div class="case-single-section-area py-5">
        <div class="container">
            @if ($komunitas)
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="case-single-header heading2">
                            <h2 class="fw-semi-bold" style="margin-bottom: 20px; font-size: 2.5rem; color: #333;">
                                {{ strtoupper($komunitas->nm_komunitas) }}
                            </h2>
                            <p class="text-black" style="font-size: 1.2rem; line-height: 1.6; color: #555;">
                                {{ $komunitas->desk_komunitas }}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 text-center">
                        <img src="{{ $komunitas->logo }}" class="img-fluid rounded-circle"
                            style="width: 100%; max-width: 350px; height: auto;" alt="{{ $komunitas->nm_komunitas }}">
                    </div>
                </div>

                <div class="text-center mt-5">
                    @auth
                        @if ($isMember)
                            <div class="alert alert-success" role="alert">
                                Anda sudah menjadi anggota komunitas ini.
                            </div>
                        @else
                            <form action="{{ route('komunitas.join', $komunitas->kd_komunitas) }}" method="POST">
                                @csrf
                                <button type="submit" class="header-btn1">Gabung Komunitas</button>
                            </form>
                        @endif
                    @else
                        <a href="{{ route('login') }}?redirect_to={{ route('komunitas.detail', $komunitas->kd_komunitas) }}"
                            class="header-btn1">
                            Login untuk Gabung Komunitas
                        </a>
                    @endauth
                </div>
            @else
                <p class="text-center">Komunitas tidak ditemukan.</p>
            @endif
        </div>
    </div>
@endsection
