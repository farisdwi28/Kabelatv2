@extends('layouts.master')
@section('title', 'Indeks Berita')

@section('content')

    <x-page-title title="Beranda" pagetitle="Indeks Berita" maintitle="Baca Berita" />

    <!--===== BLOG AREA STARTS =======-->
    <div class="service2-section-area sp6 bg-light">
        <div class="container">
            <div class="row">
                <!-- Left Column - Featured News -->
                <div class="col-lg-7">
                    @foreach($featuredNews->take(2) as $berita) <!-- Mengambil dua berita pertama untuk berita utama -->
                        <div class="images-content-area" data-aos="zoom-in" data-aos-duration="1000" style="margin-bottom: 30px;">
                            <div class="img1 position-relative">
                                <img src="{{ $berita->foto_berita ?? URL::asset('build/img/all-images/default-news.png') }}" 
                                     alt="{{ $berita->judul_berita }}" style="width: 100%; height: 300px; object-fit: cover;">
                                <!-- Gradient Overlay for Style -->
                                <div class="overlay-gradient"></div>
                            </div>
                            <div class="content-area position-absolute bottom-0 start-0 p-3 text-white">
                                <h5>{{ \Carbon\Carbon::parse($berita->tanggal_dibuat)->format('d M Y') }}</h5>
                                <a href="{{ route('berita.show', $berita->kd_info) }}" class="text text-anime-style-3">
                                    {{ $berita->judul_berita }}
                                </a>
                                <div class="btn-area mt-2">
                                    <a href="{{ route('berita.show', $berita->kd_info) }}" class="header-btn1">
                                        Lihat Selengkapnya <span><i class="fa-solid fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                            <div class="arrow-area">
                                <a href="{{ route('berita.show', $berita->kd_info) }}" class="text-dark"><i class="fa-solid fa-arrow-right fa-lg"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Right Column - Sidebar News -->
                <div class="col-lg-5">
                    <div class="service-all-boxes">
                        <div class="row">
                            @foreach($featuredNews->skip(2)->take(2) as $berita) <!-- Mengambil dua berita untuk sidebar jika ada cukup berita -->
                                <div class="col-lg-12 col-md-6 mb-4">
                                    <div class="service2-auhtor-boxarea" data-aos="zoom-out" data-aos-duration="1000">
                                        <div class="arrow">
                                            <a href="{{ route('berita.show', $berita->kd_info) }}">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                        <div class="content-area">
                                            <h5>{{ \Carbon\Carbon::parse($berita->tanggal_dibuat)->format('d M Y') }}</h5>
                                            <a href="{{ route('berita.show', $berita->kd_info) }}">
                                                {{ $berita->judul_berita }}
                                            </a>
                                            <p>{{ Str::limit($berita->isi_berita, 100) }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <!-- Sidebar tambahan untuk berita yang belum tampil -->
                            @if($featuredNews->count() > 4)
                                @foreach($featuredNews->skip(4) as $berita) <!-- Mengambil berita lainnya -->
                                    <div class="col-lg-12 col-md-6 mb-4">
                                        <div class="service2-auhtor-boxarea" data-aos="zoom-out" data-aos-duration="1000">
                                            <div class="arrow">
                                                <a href="{{ route('berita.show', $berita->kd_info) }}">
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </a>
                                            </div>
                                            <div class="content-area">
                                                <h5>{{ \Carbon\Carbon::parse($berita->tanggal_dibuat)->format('d M Y') }}</h5>
                                                <a href="{{ route('berita.show', $berita->kd_info) }}">
                                                    {{ $berita->judul_berita }}
                                                </a>
                                                <p>{{ Str::limit($berita->isi_berita, 100) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
