@extends('layouts.master')
@section('title', ' Pengumuman')

@section('content')
    <x-page-title title="Beranda" pagetitle="Indeks Pengumuman" maintitle="Pengumuman" />

    <!--===== BLOG AREA STARTS =======-->
    <div class="blog-top-area sp1">
        <div class="container">
            @foreach ($pengumuman as $p)
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-top-boxarea">
                            <div class="row align-items-center">
                                <div class="col-lg-5">
                                    <div class="content-area heading2">
                                        <div class="tags-area">
                                            <ul>
                                                <li><a href="#"><img
                                                            src="{{ URL::asset('build/img/icons/contact1.svg') }}"
                                                            alt="">{{ $p->author }}</a></li>
                                                <li><a href="#"><img
                                                            src="{{ URL::asset('build/img/icons/calender1.svg') }}"
                                                            alt="">{{ \Carbon\Carbon::parse($p->tanggal_dibuat)->format('d F Y') }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h2>{{ $p->judul_pengumuman }}</h2>
                                        <div class="space8"></div>
                                        <div class="btn-area">
                                            <a href="{{ route('pengumuman.show', $p->kd_info) }}" class="header-btn1">Lihat
                                                Selengkapnya <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <div class="images image-anime">
                                        <div class="images image-anime">
                                            <a href="{{ route('pengumuman.show', $p->kd_info) }}">
                                                @if ($p->foto_pengumuman)
                                                    <img src="{{ $p->foto_pengumuman }}"
                                                        alt="Pengumuman {{ $p->judul_pengumuman }}">
                                                @else
                                                    <img src="{{ URL::asset('build/img/all-images/pengumuman1.png') }}"
                                                        alt="Default Pengumuman">
                                                @endif
                                            </a>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>

    <!-- Pagination section remains the same -->
@endsection
