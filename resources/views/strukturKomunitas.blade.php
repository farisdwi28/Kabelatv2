@extends('layouts.master2')
@section('title', 'FAQS')
@include('layouts.sidebar')
<x-page-title title="Beranda" pagetitle="Struktur" maintitle="Struktur Komunitas" />
@section('content')

<div class="contact-inner-section-area sp1 py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="contact-form-area p-5 bg-white rounded shadow text-center">
                    <div class="mb-4">
                        <h3 class="fw-bold">Struktur Komunitas Bunda Literasi</h3>
                        <hr class="mt-3" style="border: 1px solid #000; margin: 5px 0 20px 0;" />
                    </div>
                    <div class="photo-area">
                            <img src="{{ URL::asset('build/img/all-images/struktur.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
