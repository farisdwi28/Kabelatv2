@extends('layouts.master')
@section('title', 'Struktur Komunitas')

@section('content')
<div class="container-fluid py-5 px-4">
    <div class="about-header-area" style="background-image: url({{ URL::asset('build/img/bg/header1.jpg') }}); background-repeat: no-repeat; background-size: cover; background-position: center; margin: -24px -24px -24px;">
        <img src="{{ URL::asset('build/img/elements/elements1.png') }}" alt="" class="elements1 aniamtion-key-1">
        <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt="" class="star2 keyframe5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="about-inner-header heading9">
                        <h1>Struktur Komunitas</h1>
                        <a href="index">Beranda <i class="fa-solid fa-angle-right"></i> <span>Struktur Komunitas</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid py-4">
        <div class="row" style="min-height: 80vh; align-items: flex-start;">
            <!-- Sidebar -->
            <aside class="col-lg-4 col-md-4 mb-4 mb-md-0">
                @include('layouts.master2')
            </aside>

            <!-- Main Content -->
            <div class="col-lg-6 col-md-8 offset-lg-0 offset-md-1 ml-lg-n8 ml-0" style="margin-left: -100px;">
                <div class="card shadow-sm border-0 rounded">
                    <div class="card-body p-4 text-center">
                        <div class="mb-4">
                            <h3 class="fw-bold">Struktur {{ $komunitas->nm_komunitas }}</h3>
                            <hr class="mt-3" style="border: 1px solid #000; margin: 5px 0 20px 0;" />
                        </div>
                        <div class="photo-area">
                            @if($komunitas->foto_struktur)
                                <img src="{{ $komunitas->foto_struktur }}" 
                                     alt="Struktur {{ $komunitas->nm_komunitas }}"
                                     class="img-fluid">
                            @else
                                <p>Struktur organisasi belum tersedia.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
@media (max-width: 768px) {
    .elements1, .star2 {
        display: none;
    }

    .ml-lg-n8 {
        margin-left: 0 !important;
    }
}
</style>
@endsection
