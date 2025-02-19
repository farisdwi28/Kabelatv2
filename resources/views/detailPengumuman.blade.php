@extends('layouts.master')
@section('title', 'Detail Pengumuman')

@section('content')
<x-page-title title="Beranda" maintitle="Pengumuman" />

<div class="case-single-section-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="case-auhtor-area sp1">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="case-single-hedaer heading2">
                                <h3>{{ $pengumuman->judul_pengumuman }}</h3>
                                <div class="case-others-area">
                                    <ul>
                                        <li><img src="{{ URL::asset('build/img/icons/contact1.svg') }}" alt=""
                                            class="me-2"> {{ str_replace(['[', ']', '"'], '', trim($pengumuman->author)) }}</li>
                                        <li><img src="{{ URL::asset('build/img/icons/calender1.svg') }}" alt=""
                                            class="me-2">{{ \Carbon\Carbon::parse($pengumuman->tanggal_dibuat)->format('d F Y') }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-7">
                            <div class="case-images image-anime">
                                @if($pengumuman->foto_pengumuman)
                                    <img src="{{ $pengumuman->foto_pengumuman }}">
                                @else
                                    <img src="{{ URL::asset('build/img/all-images/pengumuman1.png') }}" alt="">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="case-lista-area sp1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="case-pera-area">
                    <h2>Rincian Pengumuman:</h2>       
                    <br>                
                    <p class="text-black" style="font-size: 20px;">{{ $pengumuman->isi_pengumuman }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection