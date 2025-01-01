@extends('layouts.master2')
@section('title', 'Struktur Komunitas')
@include('layouts.sidebar')
<x-page-title title="Beranda" pagetitle="Struktur" maintitle="Struktur Komunitas" />
@section('content')

<div class="contact-inner-section-area sp1 py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="contact-form-area p-5 bg-white rounded shadow text-center">
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