@extends('layouts.master')
@section('title', 'Case Study')

@section('content')
    <x-page-title title="Beranda" pagetitle="Program Dispusip" maintitle="Detail Program Dispusip" />

    <div class="case-single-section-area">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-17 p-0 position-relative">
                    <img src="{{ $program->sampul_program }}" alt="Sampul Program" class="img-fluid" style="width: 100%; height: 450px; object-fit: cover;">
                    <div class="case-single-header heading2 position-absolute w-100 d-flex flex-column justify-content-center align-items-start" style="top: 0; height: 100%; padding: 150px 150px; background: rgba(0, 0, 0, 0.5);">
                        <h2 class="text-light" style="font-size: 2.8rem; font-weight: bold; margin-bottom: 10px;">{{ $program->nm_program }}</h2>
                        <h4 class="text-light" style="font-size: 1.3rem; margin-bottom: 5px;">Tanggal Dibuat: {{ $program->tanggal_dibuat }}</h4>
                        <p class="text-light" style="font-size: 1.2rem;">Status: {{ ucfirst($program->status_program) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="case-lista-area sp1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="case-pera-area heading2">
                        <h2 class="text-2xl">Tentang Program</h2>
                        <div style="margin-top: 40px; margin-bottom: 80px;">
                            <p class="text-black" style="font-size: 22px;">{{ $program->tentang_program }}</p>
                        </div>
                        <h2 class="text-2xl">Tujuan</h2>
                        <div style="margin-top: 40px;">
                            <p class="text-black" style="font-size: 22px;">{{ $program->tujuan_program }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
