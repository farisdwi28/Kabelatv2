@extends('layouts.master')
@section('title', 'Detail Kegiatan')

@section('content')
<x-page-title title="Beranda" maintitle="Detail Kegiatan" />

<div class="case-single-section-area py-5">
    <div class="container">
        <div class="row">
            <!-- Informasi Utama -->
            <div class="col-lg-6 mb-4">
                <div class="bg-white p-4 rounded shadow-sm">
                    <h2 class="mb-3" style="font-weight: bold; color: #333;">{{ $activity->nm_keg }}</h2>
                    <p class="text-muted" style="font-size: 16px; line-height: 1.8;">
                        {!! nl2br(e($activity->desk_keg)) !!}
                    </p>
                    <div class="mt-4">
                        <ul class="list-unstyled" style="font-size: 16px;">
                            <li class="mb-2">
                                <strong>Tanggal:</strong> 
                                {{ \Carbon\Carbon::parse($activity->tgl_mulai)->format('d M Y') }} - 
                                {{ \Carbon\Carbon::parse($activity->tgl_berakhir)->format('d M Y') }}
                            </li>
                            <li class="mb-2"><strong>Lokasi:</strong> {{ $activity->lokasi_keg }}</li>
                            @if($activity->kecamatan)
                            <li class="mb-2"><strong>Kecamatan:</strong> {{ $activity->kecamatan }}</li>
                            @endif
                            @if($activity->kelurahan)
                            <li class="mb-2"><strong>Kelurahan:</strong> {{ $activity->kelurahan }}</li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Gambar Utama dan Carousel -->
            <div class="col-lg-6">
                <!-- Cek apakah ada lebih dari satu foto -->
                @if($activity->photos->count() > 1)
                    <!-- Carousel dengan Gambar Utama -->
                    <div id="carouselExampleDark" class="carousel slide carousel-dark" data-bs-ride="carousel" data-bs-wrap="true">
                        <div class="carousel-indicators">
                            <!-- Indikator Slide -->
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            @foreach($activity->photos->skip(1) as $key => $photo)
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{ $key + 1 }}" aria-label="Slide {{ $key + 2 }}"></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            <!-- Gambar Utama -->
                            <div class="carousel-item active">
                                <img src="{{ $activity->getMainPhotoUrl() }}" 
                                     alt="Foto {{ $activity->nm_keg }}" 
                                     class="d-block w-100 rounded shadow-sm" 
                                     style="max-height: 400px; object-fit: cover;"
                                     onerror="this.onerror=null; this.src='{{ asset('build/img/all-images/komunitas1.png') }}';">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>{{ $activity->nm_keg }}</h5>
                                </div>
                            </div>
                            
                            <!-- Gambar Tambahan -->
                            @foreach($activity->photos->skip(1) as $photo)
                                <div class="carousel-item">
                                    <img src="{{ $photo->getPhotoUrl() }}" 
                                         class="d-block w-100 rounded shadow-sm"
                                         alt="Foto tambahan {{ $activity->nm_keg }}" 
                                         style="height: 300px; object-fit: cover;"
                                         onerror="this.onerror=null; this.src='{{ asset('build/img/all-images/komunitas2.png') }}';">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>{{ $activity->nm_keg }}</h5>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Tombol Navigasi Carousel (Back dan Next) -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                @else
                    <!-- Jika hanya ada 1 foto, tampilkan gambar tanpa efek carousel -->
                    <img src="{{ $activity->getMainPhotoUrl() }}" 
                         alt="Foto {{ $activity->nm_keg }}" 
                         class="d-block w-100 rounded shadow-sm" 
                         style="max-height: 400px; object-fit: cover;"
                         onerror="this.onerror=null; this.src='{{ asset('build/img/all-images/komunitas1.png') }}';">
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
