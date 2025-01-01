@extends('layouts.master')
@section('title', 'Join Komunitas')

@section('content')

    <x-page-title title="Beranda" pagetitle="Join Komunitas" maintitle="Join Komunitas" />

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
                        <form action="{{ route('komunitas.join', $komunitas->kd_komunitas) }}" method="POST">
                            @csrf
                            <button type="submit" class="header-btn1">Gabung Komunitas</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}?redirect_to={{ route('komunitas.detail', $komunitas->kd_komunitas) }}" class="header-btn1">
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
