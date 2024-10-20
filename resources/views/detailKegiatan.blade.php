@extends('layouts.master')
@section('title', 'Case Study')

@section('content')

    <x-page-title title="Beranda" pagetitle="Detail Kegiatan" maintitle="Kegiatan" />


    <!--===== CASE AREA STARTS =======-->
    <div class="case-single-section-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="case-auhtor-area sp1">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="case-single-hedaer heading2">
                                    <h2>Tentang Kegiatan</h2>
                                    <p>Lomba Mendongeng dan Bertutur Cerita Daerah: Meriahkan Sasakala Dongeng Bandung
                                        Bersama Ki Bedas!. Dinas Perpustakaan dan Kearsipan Kabupaten Bandung dengan bangga
                                        menghadirkan Lomba Mendongeng dan Bertutur Cerita Daerah dalam rangka program
                                        Sasakala Dongeng Bandung Bersama Ki Bedas. Acara ini bertujuan untuk: <br>

                                        1 . Melestarikan budaya mendongeng dan bertutur cerita daerah di Kabupaten Bandung. <br>
                                        2 . Meningkatkan minat baca dan kecintaan terhadap budaya lokal di kalangan generasi muda. <br>
                                        3 . Menemukan bibit-bibit pendongeng berbakat di Kabupaten Bandung.</p>
                                    <div class="case-others-area">
                                        <ul>
                                            <li><span>Judul:</span>“Literasi adalah pintu menuju dunia”</li>
                                            <li><span>Lokasi:</span>Perpustakaan Kabupaten Bandung, Jl. Raya Soreang No.17 Kabupaten Bandung Provinsi Jawa Barat</li>
                                            <li><span>Link Pendaftaran:</span>https://www.instagram.com</li>
                                            <li><span>Tanggal Kegiatan:</span>29/06/2024 - 02/07/2024</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="col-lg-7">
                                <div class="case-images image-anime">
                                    <img src="{{ URL::asset('build/img/all-images/kegiatan1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
