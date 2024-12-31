@extends('layouts.master2')
@section('title', 'Komunitas')
@include('layouts.sidebar')
<x-page-title title="Beranda" pagetitle="Galeri" maintitle="Komunitas" />

@section('content')
<div class="container py-5">
    <div class="row">
        <!-- Check if there are any communities available -->
        @forelse($komunitasList as $item)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow-lg border-0 rounded-3 overflow-hidden h-100">
                <!-- Link to community details -->
                <a href="{{ route('komunitas.detail', $item->kd_komunitas) }}" class="stretched-link"></a>
                
                <div class="img1 image-anime overflow-hidden position-relative">
                    <img src="{{ $item->logo }}"
                         class="card-img-top" 
                         style="object-fit: contain; height: 200px; width: 100%; border-bottom: 1px solid #ddd;" 
                         alt="{{ $item->nm_komunitas }}">
                </div>
                
                <div class="card-body p-4 text-center">
                    <h5 class="card-title fw-bold text-dark mb-3" style="font-size: 1.25rem; line-height: 1.4;">{{ $item->nm_komunitas }}</h5>
                    <p class="card-text text-muted mb-3" style="font-size: 1rem; line-height: 1.6;">{{ Str::limit($item->desk_komunitas, 100) }}</p>
                </div>

                <div class="card-footer bg-transparent border-0 text-center">
                    <a href="{{ route('komunitas.detail', $item->kd_komunitas) }}" class="btn header-btn1 w-100">
                        Lihat Detail
                    </a>
                </div>
            </div>
        </div>
        @empty
        <p class="col-12 text-center">Tidak ada komunitas yang ditemukan.</p>
        @endforelse
    </div>
</div>
@endsection
