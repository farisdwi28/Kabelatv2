@extends('layouts.master')
@section('title', 'Detail Kegiatan')

@section('content')
<x-page-title title="Beranda" maintitle="Detail Kegiatan" />

<style>
.carousel-item {
    transition: transform 0.6s ease-in-out;
}
.carousel-indicators {
    margin-bottom: 0;
}
.carousel-indicators [data-bs-target] {
    width: 30px;
    height: 3px;
    background-color: rgba(255, 255, 255, 0.8);
}
</style>

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
                @if($activity->photos->count() > 1)
                    <div id="carouselExampleDark" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" 
                                    aria-current="true" aria-label="Slide 1"></button>
                            @foreach($activity->photos->skip(1) as $key => $photo)
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{ $key + 1 }}" 
                                        aria-label="Slide {{ $key + 2 }}"></button>
                            @endforeach
                        </div>

                        <div class="carousel-inner rounded">
                            <div class="carousel-item active">
                                <img src="{{ asset('storage/' . $activity->photos->first()->foto_path) }}" 
                                     alt="Foto {{ $activity->nm_keg }}" 
                                     class="d-block w-100" 
                                     style="height: 400px; object-fit: cover;"
                                     onerror="this.onerror=null; this.src='{{ asset('build/img/all-images/komunitas1.png') }}';">
                            </div>
                            
                            @foreach($activity->photos->skip(1) as $photo)
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/' . $photo->foto_path) }}" 
                                         class="d-block w-100"
                                         alt="Foto tambahan {{ $activity->nm_keg }}" 
                                         style="height: 400px; object-fit: cover;"
                                         onerror="this.onerror=null; this.src='{{ asset('build/img/all-images/komunitas2.png') }}';">
                                </div>
                            @endforeach
                        </div>

                        <button class="carousel-control-prev" type="button">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const carousel = document.getElementById('carouselExampleDark');
                            const items = carousel.querySelectorAll('.carousel-item');
                            const indicators = carousel.querySelectorAll('.carousel-indicators button');
                            let currentIndex = 0;
                            const totalItems = items.length;

                            // Function to show specific slide
                            function showSlide(index) {
                                items.forEach(item => item.classList.remove('active'));
                                indicators.forEach(indicator => {
                                    indicator.classList.remove('active');
                                    indicator.removeAttribute('aria-current');
                                });
                                
                                items[index].classList.add('active');
                                indicators[index].classList.add('active');
                                indicators[index].setAttribute('aria-current', 'true');
                            }

                            // Next button click
                            carousel.querySelector('.carousel-control-next').addEventListener('click', function() {
                                currentIndex++;
                                if (currentIndex >= totalItems) {
                                    currentIndex = 0;
                                }
                                showSlide(currentIndex);
                            });

                            // Previous button click
                            carousel.querySelector('.carousel-control-prev').addEventListener('click', function() {
                                currentIndex--;
                                if (currentIndex < 0) {
                                    currentIndex = totalItems - 1;
                                }
                                showSlide(currentIndex);
                            });

                            // Indicator clicks
                            indicators.forEach((indicator, index) => {
                                indicator.addEventListener('click', () => {
                                    currentIndex = index;
                                    showSlide(currentIndex);
                                });
                            });
                        });
                    </script>
                @else
                    <img src="{{ asset('storage/' . $activity->photos->first()->foto_path) }}" 
                         alt="Foto {{ $activity->nm_keg }}" 
                         class="d-block w-100 rounded" 
                         style="height: 400px; object-fit: cover;"
                         onerror="this.onerror=null; this.src='{{ asset('build/img/all-images/komunitas1.png') }}';">
                @endif
            </div>
        </div>
    </div>
</div>
@endsection