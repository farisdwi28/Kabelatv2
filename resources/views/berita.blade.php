@extends('layouts.master')
@section('title', 'Services')

@section('content')

    <x-page-title title="Beranda" pagetitle="Indeks Berita" maintitle="Baca Berita" />


    <!--===== BLOG AREA STARTS =======-->
    <div class="blog1-scetion-area sp1 bg2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="blog-hedaer-area heading2 text-center">
                        <h5>Berita</h5>
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
                            <a href="blog-single">Dispusip Kab. Bandung turut hadir dalam kegiatan "Tradisi Wuku Taun
                                Kampung Adat Cikondang"</a>
                            <p>Tim Naskah Kuna DISPUSIP Kabupaten Bandung berkesempatan hadir dalam acara Wuku Taun Kampung
                                Adat Cikondang. Wuku Taun merupakan perayaan Tahun Baru Islam 1 Muharam 1446 H, moment ini
                                dilaksanakan setiap tahunnya selama 14 hari berturut-turut.
                            </p>
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
                            <a href="blog-single">Penyerahan Arsip Kecamatan Bojongsoang dan Kecamatan Pacet ke Dispusip
                                Kabupaten Bandung</a>
                            <p>Dinas Perpustakaan dan Arsip Kab. Bandung _menerima penyerahan arsip yang berasal dari
                                Kecamatan : </p>
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
                            <a href="blog-single">Kampanye Literasi Dispusip Kabupaten Bandung - Technical Meeting Lomba
                                Bertutur Tingkat Jawa Barat Tahun Anggaran 2024</a>
                            <p>Dinas Perpustakaan dan Arsip Kabupaten Bandung mengikuti Technical meeting dalam rangka
                                persiapan Lomba Bertutur Bagi Siswa-Siswi SD/MI Tingkat Provinsi Jawa Barat Tahun 2024
                                melalui zoom meeting. Senin (22/07/24).</p>
                            <a href="blog-single" class="readmore">Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== BLOG AREA ENDS =======-->

@endsection
