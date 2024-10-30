@extends('layouts.master')
@section('title', 'Services')

@section('content')

    <x-page-title title="Beranda" pagetitle="Program Dispusip" maintitle="Program Dispusip" />


    <!--===== BLOG AREA STARTS =======-->
    <div class="blog1-scetion-area sp1 bg2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="blog-hedaer-area heading2 text-center">
                        <h5>Program Dispusip</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-author-boxarea">
                        <div class="img1">
                            <img src="{{ URL::asset('build/img/all-images/contoh1.png') }}" alt="">
                        </div>
                        <div class="content-area">
                            <a href="detailProgramDispusip">Bedas Literasi Ramadhan dan Lentera Langit</a>
                            <p>Indonesia tertinggal dalam hal budaya literasi. Menurut data UNESCO tahun 2017, minat baca masyarakat Indonesia sangat rendah, hanya mencapai 0,001%.
                            </p>
                            <a href="detailProgramDispusip" class="readmore">Baca Selengkapnya <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="space30 d-lg-none d-block"></div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-author-boxarea">
                        <div class="img1">
                             <img src="{{ URL::asset('build/img/all-images/contoh3.png') }}" alt="">
                        </div>
                        <div class="content-area">
                            <a href="blog-single">Jelajah Literasi Asik</a>
                            <p>DIndonesia tertinggal dalam hal budaya literasi. Data UNESCO tahun 2017 menunjukkan bahwa minat baca masyarakat Indonesia sangat rendah, hanya 0,001%.</p>
                            <a href="blog-single" class="readmore">Baca Selengkapnya <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="space30 d-lg-none d-block"></div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-author-boxarea">
                        <div class="img1">
                            <img src="{{ URL::asset('build/img/all-images/contoh2.png') }}" alt="">
                        </div>
                        <div class="content-area">
                            <a href="blog-single">Bandung Bedas Preservasi Manuskrip dan Naskah Kuno</a>
                            <p>Indonesia tertinggal dalam hal budaya literasi. Menurut data UNESCO tahun 2017, minat baca masyarakat Indonesia sangat rendah, hanya mencapai 0,001%.
                            </p>
                            <a href="blog-single" class="readmore">Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== BLOG AREA ENDS =======-->

@endsection
