@extends('layouts.master')
@section('title', 'Services')

@section('content')

    <x-page-title title="Pengumuman" pagetitle="Indeks Pengumuman" maintitle="Pengumuman" />


    <!--===== BLOG AREA STARTS =======-->
    <div class="blog1-scetion-area sp1 bg2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="blog-hedaer-area heading2 text-center">
                        <h5>Pengumuman</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-author-boxarea">
                        <div class="img1">
                            <img src="{{ URL::asset('build/img/all-images/blog-img1.png') }}" alt="">
                        </div>
                        <div class="content-area">
                            <div class="tags-area">
                                <ul>
                                    <li><a href="#"><img src="{{ URL::asset('build/img/icons/calender1.svg') }}"
                                                alt="">Hari Ini</a></li>
                                </ul>
                            </div>
                            <a href="blog-single">Penutupan Layanan Dispusip Selama Hari Raya dan Cuti Bersama</a>
                            <p>Libur dalam rangka cuti bersama dan libur hari raya idul fitri
                            <a href="blog-single" class="readmore">Baca Selengkapnya <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="space30 d-lg-none d-block"></div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-author-boxarea">
                        <div class="img1">
                            <img src="{{ URL::asset('build/img/all-images/blog-img2.png') }}" alt="">
                        </div>
                        <div class="content-area">
                            <div class="tags-area">
                                <ul>
                                    <li><a href="#"><img src="{{ URL::asset('build/img/icons/calender1.svg') }}"
                                                alt="">Kemarin</a></li>
                                </ul>
                            </div>
                            <a href="blog-single">Perpanjangan Jam Layanan Perpustakaan Umum Kabupaten Bandung</a>
                            <p>Dalam rangka meningkatkan layanan kepada masyarakat serta memberikan kesempatan lebih luas bagi pengunjung, Dinas Perpustakaan dan Kearsipan (Dispusip) Kabupaten Bandung mengumumkan bahwa jam layanan Perpustakaan Umum Kabupaten Bandung diperpanjang </p>
                            <a href="blog-single" class="readmore">Baca Selengkapnya <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="space30 d-lg-none d-block"></div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-author-boxarea">
                        <div class="img1">
                            <img src="{{ URL::asset('build/img/all-images/blog-img3.png') }}" alt="">
                        </div>
                        <div class="content-area">
                            <div class="tags-area">
                                <ul>
                                    <li><a href="#"><img src="{{ URL::asset('build/img/icons/calender1.svg') }}"
                                                alt="">16 August 2024</a></li>
                                </ul>
                            </div>
                            <a href="blog-single">Lomba Baca Puisi Virtual Tingkat Kabupaten Bandung Tahun 2024</a>
                            <p>Dalam rangka memperingati Hari Literasi Nasional, Dinas Perpustakaan dan Kearsipan (Dispusip) Kabupaten Bandung menyelenggarakan Lomba Baca Puisi Virtual untuk masyarakat umum</p>
                            <a href="blog-single" class="readmore">Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== BLOG AREA ENDS =======-->

@endsection
