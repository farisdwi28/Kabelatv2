@extends('layouts.master')
@section('title', 'Case Study')

@section('content')

    <x-page-title title="Beranda" pagetitle="Detail Pengumuman" maintitle="Pengumuman" />

    <div class="case-single-section-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="case-auhtor-area sp1">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="case-single-hedaer heading2">
                                    <h2>Penutupan Layanan Dispusip Selama Hari Raya dan Cuti Bersama</h2>
                                    <div class="case-others-area">
                                        <ul>
                                            <li><span>Penulis:</span>Achmad Naufal Nazheef</li>
                                            <li><span>Tanggal:</span>29 Juni 2024</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="col-lg-7">
                                <div class="case-images image-anime">
                                    <img src="{{ URL::asset('build/img/all-images/pengumuman1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="case-lista-area sp1 bg2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="case-pera-area heading2">
                        <h2>Isi :</h2>
                        <p>Sehubungan dengan Hari Raya Idul Adha dan Cuti Bersama. Hari ini dan Besok Layanan Perpustakaaan
                            Tutup Sementara. Layanan perpustakaan akan dibuka kembali pada hari Rabu, 19 Juni 2024. Terima
                            kasih.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
