@extends('layouts.master')
@section('title', 'Case Study')

@section('content')

    <x-page-title title="Beranda" pagetitle="Join Komunitas" maintitle="Join Komunitas" />


    <!--===== CASE AREA STARTS =======-->
    <div class="case-single-section-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="case-auhtor-area sp1">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="case-single-hedaer heading2">
                                    <h2>KOMUNITAS BUNDA LITERASI</h2>
                                    <p>Bunda Literasi adalah sebuah gerakan yang bertujuan untuk meningkatkan minat baca dan literasi di kalangan anak-anak dan remaja dengan melibatkan peran serta aktif dari orang tua atau wali. Gerakan ini menekankan pentingnya peran orang tua dalammembentuk kebiasaan membaca sejak dini dan mendukung perkembangan kemampuan literasi anak-anak Bunda Literasi adalah sebuah gerakan yang bertujuan untuk meningkatkan minat baca dan literasi di kalangan anak-anak dan remaja dengan melibatkan peran serta aktif dari orang tua atau wali. Gerakan ini menekankan pentingnya peran orang tua dalammembentuk kebiasaan membaca sejak dini dan mendukung perkembangan kemampuan literasi anak-anak</p>
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="col-lg-7">
                                <div class="case-images image-anime">
                                    <img src="{{ URL::asset('build/img/all-images/bundaliterasi.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="contact" class="header-btn1">Join Komunitas <span><i
                        class="fa-solid fa-arrow-right"></i></span></a>
            <div class="single-footer">
                </div>
            </div>
        </div>
    </div>
@endsection
