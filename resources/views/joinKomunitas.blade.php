@extends('layouts.master')
@section('title', 'Case Study')

@section('content')

    <x-page-title title="Beranda" pagetitle="Join Komunitas" maintitle="Join Komunitas" />

    <!--===== CASE AREA STARTS =======-->
    <div class="case-single-section-area py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="case-single-header heading2">
                        <h2 class="fw-bold">KOMUNITAS BUNDA LITERASI</h2>
                        <p class="text-black" style="font-size: 20px;">
                            Bunda Literasi adalah sebuah gerakan sosial yang bertujuan untuk meningkatkan minat baca dan literasi di kalangan anak-anak, remaja, serta orang tua. Gerakan ini bertujuan untuk menciptakan lingkungan yang mendukung perkembangan literasi dengan melibatkan peran serta aktif orang tua atau wali dalam membimbing anak-anak mereka. Gerakan ini percaya bahwa literasi adalah kunci untuk membuka pintu peluang dan memberikan pendidikan yang lebih baik untuk masa depan anak-anak.

                            Gerakan ini menekankan pentingnya peran orang tua dalam membentuk kebiasaan membaca sejak dini, karena kebiasaan ini akan membentuk dasar pengetahuan dan keterampilan yang sangat berharga sepanjang hidup mereka. Dengan mendampingi anak-anak dalam perjalanan membaca, orang tua dapat menumbuhkan kecintaan terhadap buku dan pengetahuan, serta mengembangkan keterampilan kognitif yang akan membantu anak-anak dalam belajar dan memahami dunia di sekitar mereka.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="case-images image-anime">
                        <img src="{{ URL::asset('build/img/all-images/bundaliterasi.png') }}" class="img-fluid"
                            style="max-width: 80%; height: auto;" alt="Bunda Literasi">
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                    <a href="" class="header-btn1 px-4 py-2">Join Komunitas <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
        </div>
    </div>

@endsection
