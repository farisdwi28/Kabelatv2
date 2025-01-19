@extends('layouts.master')
@section('title', 'Struktur Komunitas')

@section('content')
{{-- <x-page-title title="Beranda" pagetitle="Struktur" maintitle="Struktur Komunitas" /> --}}
<div class="container-fluid py-5 px-4">
    {{-- Updated Page Title Section --}}
    <div class="about-header-area" style="background-image: url({{ URL::asset('build/img/bg/header1.jpg') }}); background-repeat: no-repeat; background-size: cover; background-position: center; margin: -24px -24px  -24px;">
        <img src="{{ URL::asset('build/img/elements/elements1.png') }}" alt="" class="elements1 aniamtion-key-1">
        <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt="" class="star2 keyframe5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="about-inner-header heading9 text-center">
                        <h1>Struktur Komunitas</h1>
                        <a href="index">Beranda <i class="fa-solid fa-angle-right"></i> <span>Struktur Komunitas</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container-fluid py-4">
    <div class="row" style="min-height: 80vh; align-items: flex-start;">
        {{-- Sidebar --}}
        <aside class="col-lg-4 col-md-4" style="padding-right: 0;">
            @include('layouts.master2')
        </aside>

        {{-- Main Content --}}
        <div class="col-lg-6 col-md-8"  style="padding-left: 0; margin-left: -100px;">
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
                                 class="img-fluid"
                                 style="max-width: 100%; height: auto;">
                        @else
                            <p>Struktur organisasi belum tersedia.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
