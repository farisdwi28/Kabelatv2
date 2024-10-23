@extends('layouts.master')
@section('title', 'Home')
@section('content')

    <!--===== HERO AREA STARTS =======-->
    {{-- <div class="hero1-section-area" style="background-image: url(build/img/bg/header-bg1.png);">
        <img src="{{ asset('img/Logo Kabelat.svg') }}" alt="" class="elements1 aniamtion-key-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-main-content heading1">
                        <h1 class="text-anime-style-3">Lomba Mendongeng Dan Bertutur Cerita Daerah</h1>
                        <p data-aos="fade-left" data-aos-duration="1000">Meriahkan Sasakala Dongeng Bandung Bersama Ki
                            Bedas!. Dinas Perpustakaan dan Kearsipan Kabupaten Bandung dengan bangga menghadirkan Lomba
                            Mendongeng dan Bertutur Cerita Daerah dalam rangka program Sasakala Dongeng Bandung Bersama Ki
                            Bedas </p>
                        <div class="btn-area" data-aos="fade-left" data-aos-duration="1200">
                            <a href="detailKegiatan" class="header-btn1">Baca Selengkapnya <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-images-area">
                        <div class="main-images-area">
                            <div class="img1">
                                <img src="{{ URL::asset('build/img/all-images/contoh4.png') }}" alt=""
                                    data-aos="zoom-in" data-aos-duration="1000">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="hero1-section-area">
        <div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" data-aos="fade-left" data-aos-duration="1200">
                <a href="detailKegiatan">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{ URL::asset('build/img/all-images/carousel1.png') }}" class="d-block w-100"
                            alt="...">
                        <div class="carousel-caption">
                            <h1>Lomba Mendongeng Dan Bertutur Cerita Daerah</h1>
                            <p class="d-none d-md-block">Meriahkan Sasakala Dongeng Bandung Bersama Ki Bedas!.</p>
                        </div>
                    </div>
                </a>
                <a href="detailKegiatan">
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ URL::asset('build/img/all-images/carousel2.png') }}" class="d-block w-100"
                            alt="...">
                        <div class="carousel-caption">
                            <h1>Lomba Mendongeng Dan Bertutur Cerita Daerah</h1>
                            <p class="d-none d-md-block">Meriahkan Sasakala Dongeng Bandung Bersama Ki Bedas!.</p>
                        </div>
                    </div>
                </a>
                <a href="detailKegiatan">
                    <div class="carousel-item" data-bs-interval="1000">
                        <img src="{{ URL::asset('build/img/all-images/carousel3.png') }}" class="d-block w-100"
                            alt="...">

                        <div class="carousel-caption">
                            <h1>Lomba Mendongeng Dan Bertutur Cerita Daerah</h1>
                            <p class="d-none d-md-block">Meriahkan Sasakala Dongeng Bandung Bersama Ki Bedas!.</p>
                        </div>
                    </div>
                </a>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        {{-- <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="{{ URL::asset('build/img/all-images/contoh4.png') }}" class="d-block"
                        style="width: 1920px; height:656px;" alt="...">
                    <div class="carousel-caption d-none d-md-block text-black">
                        <h1>Lomba Mendongeng Dan Bertutur Cerita Daerah</h1>
                        <div class="btn-area justify-content-center" data-aos="fade-left" data-aos-duration="1200">
                            <a href="detailKegiatan" class="header-btn1">Baca Selengkapnya <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ URL::asset('build/img/all-images/carousel2.png') }}" class="d-block"
                        style="width: 1920px; height:656px;" alt="...">
                    <div class="carousel-caption d-none d-md-block text-black">
                        <h1>Lomba Mendongeng Dan Bertutur Cerita Daerah</h1>
                        <div class="btn-area justify-content-center" data-aos="fade-left" data-aos-duration="1200">
                            <a href="detailKegiatan" class="header-btn1">Baca Selengkapnya <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ URL::asset('build/img/all-images/carousel3.png') }}" class="d-block"
                        style="width: 1920px; height:656px;" alt="...">
                    <div class="carousel-caption d-none d-md-block text-black">
                        <h1>Lomba Mendongeng Dan Bertutur Cerita Daerah</h1>
                        <div class="btn-area justify-content-center" data-aos="fade-left" data-aos-duration="1200">
                            <a href="detailKegiatan" class="header-btn1">Baca Selengkapnya <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> --}}
    </div>
    <!--===== HERO AREA ENDS =======-->

    <!--===== TESTIMONIAL AREA STARTS =======-->
    {{-- <div class="slider-section-area sp5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <div class="sldier-head">
                        <p>Trusted by <br class="d-lg-block d-none"> Top Companies</p>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="slider-images-area owl-carousel">
                        <div class="img1">
                            <img src="{{ URL::asset('build/img/elements/brand-img1.png') }}" alt="">
                        </div>
                        <div class="img1">
                            <img src="{{ URL::asset('build/img/elements/brand-img2.png') }}" alt="">
                        </div>
                        <div class="img1">
                            <img src="{{ URL::asset('build/img/elements/brand-img3.png') }}" alt="">
                        </div>
                        <div class="img1">
                            <img src="{{ URL::asset('build/img/elements/brand-img4.png') }}" alt="">
                        </div>
                        <div class="img1">
                            <img src="{{ URL::asset('build/img/elements/brand-img5.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--===== TESTIMONIAL AREA ENDS =======-->
    {{-- <div class="all-section-bg"
        style="background-image: url(build/img/bg/pages-bg1.png); background-repeat: no-repeat; background-size: cover;">
        <!--===== ABOUT AREA STARTS =======-->
        <div class="about1-section-area sp6">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="about-images">
                            <figure class="image-anime reveal">
                                <img src="{{ URL::asset('build/img/all-images/about-img1.png') }}" alt="">
                            </figure>
                            <img src="{{ URL::asset('build/img/elements/star1.png') }}" alt=""
                                class="star1 keyframe5">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="about-content-area heading2">
                            <div class="arrow-circle">
                                <a href="about">
                                    <img src="{{ URL::asset('build/img/elements/elements4.png') }}" alt=""
                                        class="elements4 keyframe5">
                                    <img src="{{ URL::asset('build/img/icons/arrow.svg') }}" alt=""
                                        class="arrow">
                                </a>
                            </div>
                            <h2 class="text-anime-style-3">Comprehensive SEO & Digital Marketing Solutions.</h2>
                            <p data-aos="fade-left" data-aos-duration="1000">Welcome to SEOC your trusted partner for
                                comprehensive SEO and digital marketing solutions. With our proven expertise and innovative
                                strategies the digital landscape.</p>
                            <div class="btn-area" data-aos="fade-left" data-aos-duration="1200">
                                <a href="about" class="header-btn1">Learn More<span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="about-auhtor-images">
                            <img src="{{ URL::asset('build/img/elements/elements5.png') }}" alt=""
                                class="elements5 keyframe5">
                            <figure class="image-anime reveal">
                                <img src="{{ URL::asset('build/img/all-images/about-img2.png') }}" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    <!--===== ABOUT AREA ENDS =======-->

    <!--===== SERVICE AREA STARTS =======-->
    {{-- <div class="service1-section-area sp9">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="service-header-area heading2 text-center">
                            <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt=""
                                class="star2 keyframe5">
                            <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt=""
                                class="star3 keyframe5">
                            <h2 class="text-anime-style-3">Popular Digital Marketing Services <br
                                    class="d-md-block d-none"> To Build Your Business</h2>
                            <p data-aos="fade-up" data-aos-duration="1000">Our expert team specializes in delivering
                                tailored solutions designed to elevate <br class="d-md-block d-none"> your brand and drive
                                measurable results. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="service-all-boxes-area">
                            <div class="service-boxarea" data-aos="zoom-in" data-aos-duration="800">
                                <a href="service1">Search Engine Optimization ( SEO)</a>
                                <div class="space40"></div>
                                <img src="{{ URL::asset('build/img/icons/service-icon1.svg') }}" alt="">
                                <div class="space40"></div>
                                <p>Enhance your online visibility & drive organic traffic with our advanced SEO techniques.
                                    We optimize your website to rank higher.</p>
                            </div>

                            <div class="service-boxarea box2" data-aos="zoom-in" data-aos-duration="1000">
                                <a href="service1">Pay-Per-Click (PPC) Advertising</a>
                                <div class="space40"></div>
                                <img src="{{ URL::asset('build/img/icons/service-icon2.svg') }}" alt="">
                                <div class="space40"></div>
                                <p>Reach your audience instantly and drive qualified leads with targeted PPC campaigns. Our
                                    experts craft compelling ad copy and optimize.</p>
                            </div>

                            <div class="service-boxarea box3" data-aos="zoom-in" data-aos-duration="1200">
                                <a href="service1">Social Media Marketing</a>
                                <div class="space66"></div>
                                <img src="{{ URL::asset('build/img/icons/service-icon3.svg') }}" alt="">
                                <div class="space40"></div>
                                <p>Build a strong brand presence and engage with your audience on social media platforms. We
                                    create strategic social media campaigns to boost brand.</p>
                            </div>

                            <div class="service-boxarea box4" data-aos="zoom-in" data-aos-duration="1400">
                                <a href="service1">Website Design and Development</a>
                                <div class="space40"></div>
                                <img src="{{ URL::asset('build/img/icons/service-icon4.svg') }}" alt="">
                                <div class="space40"></div>
                                <p>Make a lasting impression with a professionally designed and user-friendly website. Our
                                    web design and development services ensure website.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    <!--===== SERVICE AREA ENDS =======-->

    <div class="testimonial1-section-area sp6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="testimonial-header heading2 text-center">
                        <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt="" class="star2 keyframe5">
                        <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt="" class="star3 keyframe5">
                        <h2 class="text-anime-style-3">Program Dispusip</h2>
                        <p data-aos="fade-up" data-aos-duration="1000">Telusuri berbagai program unggulan dari Dispusip yang
                            dirancang untuk mendukung literasi, pengembangan komunitas, dan pelestarian budaya.<br
                                class="d-md-block d-none"> Temukan program-program yang sesuai dengan minat dan kebutuhan
                            Anda.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 m-auto" data-aos="fade-up" data-aos-duration="1000">
                    <div class="testimonials-slider-area owl-carousel">
                        <div class="testimonial-boxarea">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="pera">
                                        <p>Indonesia tertinggal dalam hal budaya literasi. Menurut data UNESCO tahun 2017,
                                            minat baca masyarakat Indonesia sangat rendah, hanya mencapai 0,001%</p>
                                        <div class="space100"></div>
                                        <div class="space30"></div>
                                        <div class="list-area">
                                            <div class="list">
                                                <a href="team">Bedas Literasi Ramadhan dan Lentera Langit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="images">
                                        <img src="{{ URL::asset('build/img/all-images/contoh1.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-boxarea">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="pera">
                                        <p>Besprenku atau Bandung Bedas Preservasi Manuskrip dan Naskah Kuno. Besprenku
                                            merupakan kegiatan menjaga dan melestarikan Manuskrip dan Naskah Kuno.</p>
                                        <div class="space100"></div>
                                        <div class="space30"></div>
                                        <div class="list-area">
                                            <div class="list">
                                                <a href="team">Bandung Bedas Preservasi Manuskrip dan Naskah Kuno</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="images">
                                        <img src="{{ URL::asset('build/img/all-images/contoh2.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-boxarea">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="pera">
                                        <p>Dinas Arsip dan Perpustakaan Kabupaten Bandung mengembangkan inovasi yang diberi
                                            nama Jelita atau Jelajah Literasi Asik.</p>
                                        <div class="space100"></div>
                                        <div class="space30"></div>
                                        <div class="list-area">
                                            <div class="list">
                                                <a href="detailProgramDispusip">Jelajah Literasi Asik</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="images">
                                        <img src="{{ URL::asset('build/img/all-images/contoh3.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== TESTIMONIAL AREA ENDS =======-->

    <!--===== SERVICE AREA STARTS =======-->
    <div class="service2-section-area sp6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="service2-header heading2 text-center">
                        <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt=""
                            class="star2 keyframe5">
                        <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt=""
                            class="star3 keyframe5">
                        <h2 class="text-anime-style-3">Berita Terkini</h2>
                        <p data-aos="fade-up" data-aos-duration="1000">Jelajahi berita terkini untuk tetap terinformasi
                            tentang perkembangan terbaru yang memengaruhi Anda.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="images-content-area" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="img1">
                            <img src="{{ URL::asset('build/img/all-images/contohberita1.png') }}" alt="">
                        </div>
                        <div class="content-area">
                            <h5>19 Jul 2024</h5>
                            <a href="service1" class="text text-anime-style-3">Dispusip Kab. Bandung turut hadir dalam
                                kegiatan "Tradisi Wuku Taun Kampung Adat Cikondang"</a>
                            <div class="btn-area" data-aos="fade-up" data-aos-duration="1200">
                                <a href="service1" class="header-btn1">Lihat Selengkapnya<span><i
                                            class="fa-solid fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="arrow-area">
                            <a href="service1"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-all-boxes">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="service2-auhtor-boxarea" data-aos="zoom-out" data-aos-duration="1000">
                                    <div class="arrow">
                                        <a href="service1"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                        <h5>18 Jul 2024</h5>
                                        <a href="service1">Penyerahan Arsip Kecamatan Bojongsoang dan Kecamatan Pacet ke
                                            Dispusip Kabupaten Bandung</a>
                                        <p>Dinas Perpustakaan dan Arsip Kab. Bandung _menerima penyerahan arsip yang berasal
                                            dari Kecamatan
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6">
                                <div class="service2-auhtor2-boxarea" data-aos="zoom-out" data-aos-duration="1200">
                                    <div class="arrow">
                                        <a href="service1"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                        <h5>17 Jul 2024</h5>
                                        <a href="service1">Kampanye Literasi Dispusip Kabupaten Bandung - Technical Meeting
                                            Lomba Bertutur Tingkat Jawa Barat Tahun Anggaran 2024</a>
                                        <p>Dinas Perpustakaan dan Arsip Kabupaten Bandung mengikuti Technical meeting dalam
                                            rangka persiapan Lomba Bertutur Bagi Siswa-Siswi SD/MI Tingkat Provinsi Jawa
                                            Barat Tahun 2024 melalui zoom meeting. Senin (22/07/24).</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== SERVICE AREA ENDS =======-->

    <!--===== CASE AREA STARTS =======-->
    {{-- <div class="case1-section-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="case-header-area heading2 text-center">
                            <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt=""
                                class="star2 keyframe5">
                            <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt=""
                                class="star3 keyframe5">
                            <h2 class="text-anime-style-3">Benefits of SEO & Digital Marketing</h2>
                            <p data-aos="fade-up" data-aos-duration="1000">By investing in strategic SEO and digital
                                marketing initiatives, businesses can <br class="d-md-block d-none"> unlock a myriad of
                                benefits.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12" data-aos="zoom-out" data-aos-duration="1200">
                        <div class="cs_case_study_1_list">
                            <div class="cs_case_study cs_style_1 cs_hover_active active" data-aos="fade-up"
                                data-aos-duration="800">
                                <a href="case-single" class="cs_case_study_thumb cs_bg_filed"
                                    data-src="{{ URL::asset('build/img/all-images/case-img1.png') }}"></a>
                                <div class="content-area1">
                                    <a href="case-single">Website Design & Development</a>
                                </div>
                                <div class="content-area">
                                    <a href="case-single">Website Design & Development </a>
                                    <p>We understand the critical role that a well-designed and user-friendly website plays
                                        in shaping your online presence driving.</p>
                                </div>
                            </div>
                            <div class="cs_case_study cs_style_1 cs_hover_active" data-aos="fade-up"
                                data-aos-duration="900">
                                <a href="case-single" class="cs_case_study_thumb cs_case_study_thumb2 cs_bg_filed"
                                    data-src="{{ URL::asset('build/img/all-images/case-img2.png') }}"></a>
                                <div class="content-area1">
                                    <a href="case-single">SEO</a>
                                </div>
                                <div class="content-area">
                                    <a href="case-single">SEO</a>
                                    <p>We understand the critical role that a well-designed and user-friendly website plays
                                        in shaping your online presence driving.</p>
                                </div>
                            </div>
                            <div class="cs_case_study cs_style_1 cs_hover_active" data-aos="fade-up"
                                data-aos-duration="1000">
                                <a href="case-single" class="cs_case_study_thumb cs_case_study_thumb3 cs_bg_filed"
                                    data-src="{{ URL::asset('build/img/all-images/case-img3.png') }}"></a>
                                <div class="content-area1">
                                    <a href="case-single">PPC Advertising</a>
                                </div>
                                <div class="content-area">
                                    <a href="case-single">PPC Advertising</a>
                                    <p>We understand the critical role that a well-designed and user-friendly website plays
                                        in shaping your online presence driving.</p>
                                </div>
                            </div>
                            <div class="cs_case_study cs_style_1 cs_hover_active" data-aos="fade-up"
                                data-aos-duration="1100">
                                <a href="case-single" class="cs_case_study_thumb cs_case_study_thumb4 cs_bg_filed"
                                    data-src="{{ URL::asset('build/img/all-images/case-img4.png') }}"></a>
                                <div class="content-area1">
                                    <a href="case-single">Social Media Marketing</a>
                                </div>
                                <div class="content-area">
                                    <a href="case-single">Social Media Marketing</a>
                                    <p>We understand the critical role that a well-designed and user-friendly website plays
                                        in shaping your online presence driving.</p>
                                </div>
                            </div>
                            <div class="cs_case_study cs_style_1 cs_hover_active" data-aos="fade-up"
                                data-aos-duration="1200">
                                <a href="case-single" class="cs_case_study_thumb cs_case_study_thumb5 cs_bg_filed"
                                    data-src="{{ URL::asset('build/img/all-images/case-img5.png') }}"></a>
                                <div class="content-area1">
                                    <a href="case-single">Content Marketing</a>
                                </div>
                                <div class="content-area">
                                    <a href="case-single">Content Marketing</a>
                                    <p>We understand the critical role that a well-designed and user-friendly website plays
                                        in shaping your online presence driving.</p>
                                </div>
                            </div>
                            <div class="cs_case_study cs_style_1 cs_hover_active" data-aos="fade-up"
                                data-aos-duration="1300">
                                <a href="case-single" class="cs_case_study_thumb cs_case_study_thumb6 cs_bg_filed"
                                    data-src="{{ URL::asset('build/img/all-images/case-img6.png') }}"></a>
                                <div class="content-area1">
                                    <a href="case-single">Email Marketing</a>
                                </div>
                                <div class="content-area">
                                    <a href="case-single">Email Marketing</a>
                                    <p>We understand the critical role that a well-designed and user-friendly website plays
                                        in shaping your online presence driving.</p>
                                </div>
                            </div>
                            <div class="cs_case_study cs_style_1 cs_hover_active " style="margin: 0 !important;"
                                data-aos="fade-up" data-aos-duration="1400">
                                <a href="case-single" class="cs_case_study_thumb cs_case_study_thumb7 cs_bg_filed"
                                    data-src="{{ URL::asset('build/img/all-images/case-img7.png') }}"></a>
                                <div class="content-area1">
                                    <a href="case-single">Analytics & Reporting</a>
                                </div>
                                <div class="content-area">
                                    <a href="case-single">Analytics & Reporting</a>
                                    <p>We understand the critical role that a well-designed and user-friendly website plays
                                        in shaping your online presence driving.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    <!--===== CASE AREA ENDS =======-->

    <!--===== TESTIMONIAL AREA STARTS =======-->
    <div class="testimonial1-section-area sp6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="testimonial-header heading2 text-center">
                        <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt=""
                            class="star2 keyframe5">
                        <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt=""
                            class="star3 keyframe5">
                        <h2 class="text-anime-style-3">Forum Komunitas</h2>
                        <p data-aos="fade-up" data-aos-duration="1000">Jadilah bagian dari komunitas kami dan nikmati
                            akses eksklusif ke berbagai diskusi, event, dan kolaborasi.<br class="d-md-block d-none">
                            Bergabung sekarang untuk memperluas jaringan, belajar dari yang lain, dan berbagi pengalaman
                            Anda.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 m-auto" data-aos="fade-up" data-aos-duration="1000">
                    <div class="testimonials-slider-area owl-carousel">
                        <div class="testimonial-boxarea">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="pera">
                                        <p>Bunda Literasi adalah sebuah gerakan yang bertujuan untuk meningkatkan minat baca
                                            dan literasi di kalangan anak-anak dan remaja dengan melibatkan peran serta
                                            aktif dari orang tua atau wali.</p>
                                        <div class="space100"></div>
                                        <div class="space30"></div>
                                        <div class="list-area">
                                            <div class="list">
                                                <a href="joinKomunitas">KOMUNITAS BUNDA LITERASI</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="images">
                                        <img src="{{ URL::asset('build/img/all-images/bundaliterasi.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-boxarea">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="pera">
                                        <p>Gerakan Pemasyarakatan Minat Baca (GPMB) dengan bangga mempersembahkan Bunda
                                            Literasi, sebuah inisiatif yang dirancang untuk meningkatkan minat baca dan
                                            literasi di kalangan anak-anak dan remaja. </p>
                                        <div class="space100"></div>
                                        <div class="space30"></div>
                                        <div class="list-area">
                                            <div class="list">
                                                <a href="team">KOMUNITAS GPMB</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="images">
                                        <img src="{{ URL::asset('build/img/all-images/GPMB.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-boxarea">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="pera">
                                        <p>Komunitas Pecinta Naskah Kuno adalah sebuah wadah bagi para pencinta sejarah,
                                            sastra, dan budaya yang memiliki minat mendalam terhadap naskah-naskah kuno.
                                        </p>
                                        <div class="space100"></div>
                                        <div class="space30"></div>
                                        <div class="list-area">
                                            <div class="list">
                                                <a href="team">KOMUNITAS PECINTA NASKAH KUNO</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="images">
                                        <img src="{{ URL::asset('build/img/all-images/pencintanaskah.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== TESTIMONIAL AREA ENDS =======-->
    {{-- 
    <!--===== BLOG AREA STARTS =======-->
    <div class="blog1-scetion-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="blog-hedaer-area heading2 text-center">
                        <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt=""
                            class="star2 keyframe5">
                        <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt=""
                            class="star3 keyframe5">
                        <h2 class="text-anime-style-3">Forum Komunitas</h2>
                        <p data-aos="fade-up" data-aos-duration="1000">Jadilah bagian dari komunitas kami dan nikmati
                            akses eksklusif ke berbagai diskusi, event, dan kolaborasi.<br class="d-md-block d-none">
                            Bergabung sekarang untuk memperluas jaringan, belajar dari yang lain, dan berbagi pengalaman
                            Anda.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="blog-author-boxarea" data-aos="fade-right" data-aos-duration="800">
                        <div class="img1">
                            <img src="{{ URL::asset('build/img/all-images/blog-img1.png') }}" alt="">
                        </div>
                        <div class="content-area">
                            <div class="tags-area">
                                <ul>
                                    <li><a href="#"><img src="{{ URL::asset('build/img/icons/contact1.svg') }}"
                                                alt="">Ben Stokes</a></li>
                                    <li><a href="#"><img src="{{ URL::asset('build/img/icons/calender1.svg') }}"
                                                alt="">16 August 2023</a></li>
                                </ul>
                            </div>
                            <a href="blog-single">10 Essential SEO Tips to Boost Your Website's Ranking</a>
                            <p>Are you looking to improve your website's visibility and attract more organic traffic?
                            </p>
                            <a href="blog-single" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="space30 d-lg-none d-block"></div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-author-boxarea" data-aos="fade-up" data-aos-duration="1000">
                        <div class="img1">
                            <img src="{{ URL::asset('build/img/all-images/blog-img2.png') }}" alt="">
                        </div>
                        <div class="content-area">
                            <div class="tags-area">
                                <ul>
                                    <li><a href="#"><img src="{{ URL::asset('build/img/icons/contact1.svg') }}"
                                                alt="">Ben Stokes</a></li>
                                    <li><a href="#"><img src="{{ URL::asset('build/img/icons/calender1.svg') }}"
                                                alt="">16 August 2023</a></li>
                                </ul>
                            </div>
                            <a href="blog-single">The Power of PPC Advertising: How to Maximize Your ROI</a>
                            <p>Unlock the full potential of your digital marketing strategy with the power of PPC.</p>
                            <a href="blog-single" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="space30 d-lg-none d-block"></div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-author-boxarea" data-aos="fade-left" data-aos-duration="1200">
                        <div class="img1">
                            <img src="{{ URL::asset('build/img/all-images/blog-img3.png') }}" alt="">
                        </div>
                        <div class="content-area">
                            <div class="tags-area">
                                <ul>
                                    <li><a href="#"><img src="{{ URL::asset('build/img/icons/contact1.svg') }}"
                                                alt="">Ben Stokes</a></li>
                                    <li><a href="#"><img src="{{ URL::asset('build/img/icons/calender1.svg') }}"
                                                alt="">16 August 2023</a></li>
                                </ul>
                            </div>
                            <a href="blog-single">The Importance of Responsive Web Design in the Mobile Age</a>
                            <p>Where mobile devices dominate internet usage, responsive web design more crucial.</p>
                            <a href="blog-single" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== BLOG AREA ENDS =======--> --}}

    <!--===== CONTACT AREA STARTS =======-->
    <div class="contact1-section-area sp6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="contact-header-area text-center heading2">
                        <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt=""
                            class="star2 keyframe5">
                        <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt=""
                            class="star3 keyframe5">
                        <h2 class="text-anime-style-3">Hubungi Kami</h2>
                        <p>Kami selalu terbuka untuk masukan, pengaduan, maupun peluang karir <br
                                class="d-md-block d-none"> Anda dapat menghubungi kami melalui detail berikut:</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5" data-aos="zoom-out" data-aos-duration="1000">
                    <div class="contact-info-area">
                        <h3>Hubungi Kami</h3>
                        <div class="space32"></div>
                        <div class="contact-auhtor-box">
                            <div class="icons">
                                <img src="{{ URL::asset('build/img/icons/location2.svg') }}" alt="">
                            </div>
                            <div class="content">
                                <h4>Lokasi</h4>
                                <a href="#">Perpustakaan Kabupaten Bandung <br class="d-lg-block d-none"> Jl.
                                    Al-Fathu Pamekaran, Kabupaten Bandung</a>
                            </div>
                        </div>

                        <div class="space40"></div>
                        <div class="contact-auhtor-box">
                            <div class="icons">
                                <img src="{{ URL::asset('build/img/icons/phone2.svg') }}" alt="">
                            </div>
                            <div class="content">
                                <h4>Kontak</h4>
                                <h6 class="text-white">Telepon</h6>
                                <a href="tel:02258998875">02258998875<br></a>
                                <h6 class="text-white">WhatsApp</h6>
                                <a href="https://wa.link/wu4nxi" target="_blank">+62-821-1837-2435<br></a>
                            </div>
                        </div>

                        <div class="space40"></div>
                        <div class="contact-auhtor-box">
                            <div class="icons">
                                <img src="{{ URL::asset('build/img/icons/email2.svg') }}" alt="">
                            </div>
                            <div class="content">
                                <h4>Karir</h4>
                                <a href="mailto:career_kabelat@gmail.com">career_kabelat@gmail.com <br></a>
                            </div>
                        </div>

                        <div class="space40"></div>
                        <div class="contact-auhtor-box">
                            <div class="icons">
                                <img src="{{ URL::asset('build/img/icons/email2.svg') }}" alt="">
                            </div>
                            <div class="content">
                                <h4>Pengaduan</h4>
                                <a href="mailto:report_kabelat@gmail.com">report_kabelat@gmail.com <br></a>
                            </div>
                        </div>

                        <div class="space40"></div>
                        <div class="contact-auhtor-box">
                            <div class="icons">
                                <img src="{{ URL::asset('build/img/icons/email2.svg') }}" alt="">
                            </div>
                            <div class="content">
                                <h4>Masukan</h4>
                                <a href="mailto:feedback_kabelat@gmail.com">feedback_kabelat@gmail.com <br></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-7" data-aos="zoom-out" data-aos-duration="1200">
                    <div class="contact-boxarea">
                        <h3>Google Maps</h3>
                        <p>Anda dapat menemukan lokasi kami dengan lebih mudah melalui Google Maps. <br
                                class="d-lg-block d-none"> Klik maps dibawah ini untuk petunjuk arah menuju
                            Perpustakaan Kabupaten Bandung di Jl. Al-Fathu, Pamekaran, Kec. Soreang, Kabupaten Bandung,
                            Jawa Barat 40912.</p>
                        <div class="space40"></div>
                        <div class="ratio ratio-16x9">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.9176773900626!2d107.52442907514863!3d-7.018962668758149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68edd4aaca7f3d%3A0x812d934aaf92ffc7!2sPerpustakaan%20Kabupaten%20Bandung!5e0!3m2!1sid!2sid!4v1728848644939!5m2!1sid!2sid"
                                class="embed-responsive-item" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--===== CONTACT AREA ENDS =======-->

@endsection
