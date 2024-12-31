@extends('layouts.master')
@section('title', 'Indeks Berita')

@section('content')

    <x-page-title title="Beranda" pagetitle="Indeks Berita" maintitle="Baca Berita" />

    <!--===== BLOG AREA STARTS =======-->
    <div class="service2-section-area sp6">
        <div class="container">
            <div class="row">
                <!-- Left Column - Featured News -->
                <div class="col-lg-7">
                    @foreach($featuredNews as $berita)
                        <div class="images-content-area" data-aos="zoom-in" data-aos-duration="1000" style="margin-bottom: 30px;">
                            <div class="img1">
                                <img src="{{ $berita->foto_berita ?? URL::asset('build/img/all-images/default-news.png') }}" 
                                     alt="{{ $berita->judul_berita }}" style="width: 100%; height: 300px; object-fit: cover;">
                            </div>
                            <div class="content-area position-absolute bottom-0 start-0 p-3">
                                <h5>{{ $berita->formatted_date }}</h5>
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
                                <a href="{{ route('berita.show', $berita->kd_info) }}"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Right Column - Sidebar News -->
                <div class="col-lg-5">
                    <div class="service-all-boxes">
                        <div class="row">
                            @foreach($sidebarNews as $berita)
                                <div class="col-lg-12 col-md-6">
                                    <div class="service2-auhtor-boxarea" data-aos="zoom-out" data-aos-duration="1000" style="margin-bottom: 20px;">
                                        <div class="arrow">
                                            <a href="{{ route('berita.show', $berita->kd_info) }}"><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                        <div class="content-area">
                                            <h5>{{ $berita->formatted_date }}</h5>
                                            <a href="{{ route('berita.show', $berita->kd_info) }}">
                                                {{ $berita->judul_berita }}
                                            </a>
                                            <p>{{ Str::limit($berita->isi_berita, 100) }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
@endsection
