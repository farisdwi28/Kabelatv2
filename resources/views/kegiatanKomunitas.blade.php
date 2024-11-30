@extends('layouts.master2')
@section('title', 'FAQS')
@include('layouts.sidebar')
<x-page-title title="Beranda" pagetitle="Kegiatan" maintitle="Komunitas Komunitas" />

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow-lg border-0 rounded-3 overflow-hidden h-100">
                <a href="detailKegiatan" class="stretched-link"></a> 
                <div class="img1 image-anime">
                    <img src="{{ URL::asset('build/img/all-images/komunitas1.png') }}" class="card-img-top" alt="Bunda Literasi">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold text-dark mb-3">Bunda Literasi</h5>
                    <p class="card-text text-muted mb-3">Pelatihan Literasi Digital untuk Orang Tua</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
