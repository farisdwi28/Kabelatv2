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
        <div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel" data-bs-interval="3000">
            <!-- Carousel Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
    
            <!-- Carousel Items -->
            <div class="carousel-inner" data-aos="fade-left" data-aos-duration="1200">
                <!-- Default Slide -->
                <a href="">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <div class="carousel-image-container" style="height: 450px; overflow: hidden; position: relative;">
                            <img src="{{ URL::asset('build/img/all-images/header2.png') }}" class="d-block w-100" alt="..."
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="carousel-caption">
                            <h1></h1>
                            <p class="d-none d-md-block"></p>
                        </div>
                    </div>
                </a>
    
                <!-- Dynamic Slides from $carouselPrograms -->
                @foreach ($carouselPrograms as $program)
                    <a href="{{ route('programdispusip.detail', $program->kd_program) }}">
                        <div class="carousel-item" data-bs-interval="3000">
                            <div class="carousel-image-container" style="height: 450px; overflow: hidden; position: relative;">
                                <img src="{{ $program->sampul_program }}" class="d-block w-100" alt="{{ $program->nm_program }}"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="carousel-caption">
                                <h1 class="responsive-heading">{{ $program->nm_program }}</h1>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
    
            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    
    <!-- Responsive Styles for Mobile -->
    <style>
        @media (max-width: 768px) {
            .carousel-image-container {
                height: 150px !important;
            }
        }
    </style>

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
                <div class="col-12 text-center">
                    <div class="testimonial-header heading2">
                        <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt="" class="star2 keyframe5">
                        <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt="" class="star3 keyframe5">
                        <h2 class="text-anime-style-3">Program Dispusip</h2>
                        <p data-aos="fade-up" data-aos-duration="1000">
                            Telusuri berbagai program unggulan dari Dispusip yang dirancang untuk mendukung literasi,
                            pengembangan komunitas, dan pelestarian budaya.<br class="d-md-block d-none">
                            Temukan program-program yang sesuai dengan minat dan kebutuhan Anda.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @if (count($programs) > 0)
                    <div class="col-12 col-md-8 mx-auto" data-aos="fade-up" data-aos-duration="1000">
                        <div class="testimonials-slider-area owl-carousel">
                            @foreach ($programs->take(3) as $program)
                                <div class="testimonial-boxarea shadow-lg rounded-4 p-4">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-lg-5">
                                            <div class="pera" style="min-height: 150px;">
                                                <p>{{ Str::limit($program->tentang_program, 150) }}</p>
                                                <div class="space100"></div>
                                                <div class="space30"></div>
                                                <div class="list-area">
                                                    <div class="list">
                                                        <a style="font-size: 1.25rem;"
                                                            href="{{ route('programdispusip.detail', $program->kd_program) }}">
                                                            {{ $program->nm_program }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-7 text-center">
                                            <div class="images">
                                                <img src="{{ $program->sampul_program }}" alt="{{ $program->nm_program }}"
                                                    class="img-fluid rounded-3"
                                                    style="object-fit: cover; width: 100%; height: 200px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="col-lg-12 text-center">
                        <p>Tidak ada Program</p>
                    </div>
                @endif
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
                        <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt="" class="star2 keyframe5">
                        <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt=""
                            class="star3 keyframe5">
                        <h2 class="text-anime-style-3">Berita Terkini</h2>
                        <p data-aos="fade-up" data-aos-duration="1000">Jelajahi berita terkini untuk tetap terinformasi
                            tentang perkembangan terbaru yang memengaruhi Anda.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @if (count($News) > 0)
                    <!-- Berita Utama -->
                    <div class="col-lg-7">
                        <div class="images-content-area" data-aos="zoom-in" data-aos-duration="1000"
                            style="margin-bottom: 30px;">
                            <div class="img1 position-relative">
                                <img src="{{ $News[0]->foto_berita ?? URL::asset('build/img/all-images/default-news.png') }}"
                                    alt="{{ $News[0]->judul_berita }}"
                                    style="width: 100%; height: 300px; object-fit: cover;">
                            </div>
                            <div class="content-area position-absolute bottom-0 start-0 p-3 text-white text-white">
                                <h5 class="d-lg-none" style="color: white;">
                                    {{ \Carbon\Carbon::parse($News[0]->tanggal_dibuat)->format('d M Y') }}</h5>
                                <a href="{{ route('berita.show', $News[0]->kd_info) }}"
                                    class="text text-anime-style-3 fs-5 text-white">
                                    {{ $News[0]->judul_berita }}
                                </a>
                                <div class="btn-area mt-2" data-aos="fade-up" data-aos-duration="1200">
                                    <a href="{{ route('berita.show', $News[0]->kd_info) }}" class="header-btn1">
                                        Lihat Selengkapnya<span><i class="fa-solid fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                            <div class="arrow-area">
                                <a href="{{ route('berita.show', $News[0]->kd_info) }}"><i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar Berita Lainnya -->
                    <div class="col-lg-5">
                        <div class="service-all-boxes">
                            <div class="row g-3">
                                @foreach ($News->slice(1, 2) as $berita)
                                    <div class="col-lg-12 col-md-6">
                                        <div class="service2-auhtor-boxarea" data-aos="zoom-out" data-aos-duration="1000"
                                            style="background: linear-gradient(145deg, #88beea, #e4e8f3);">
                                            <div class="arrow">
                                                <a href="{{ route('berita.show', $berita->kd_info) }}"><i
                                                        class="fa-solid fa-arrow-right"></i></a>
                                            </div>
                                            <div class="content-area">
                                                <h5>{{ \Carbon\Carbon::parse($berita->tanggal_dibuat)->format('d M Y') }}
                                                </h5>
                                                <a href="{{ route('berita.show', $berita->kd_info) }}">
                                                    {{ $berita->judul_berita }}
                                                </a>
                                                <p>
                                                    {{ Str::limit($berita->isi_berita ?? 100) }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-12 text-center">
                        <p>Tidak ada berita</p>
                    </div>
                @endif
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
    <!--===== INDEX KOMUNITAS AREA STARTS =======-->
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
                    <div class="testimonials-slider-area owl-carousel ">
                        @foreach ($komunitasList->take(5) as $item)
                            <div class="testimonial-boxarea rounded-5">
                                <div class="row">
                                    <!-- Konten Bersama -->
                                    <div class="col-lg-5">
                                        <div class="pera">
                                            <p class="text-muted" style="font-size: 1.1rem;">
                                                {{ Str::limit($item->desk_komunitas, 100) ?: 'No description available' }}
                                            </p>
                                            <div class="space100"></div>
                                            <div class="space30"></div>
                                            <div class="list-area">
                                                <div class="list">
                                                    <a style="font-size: 1.25rem"
                                                        href="{{ route('komunitas.detail', $item->kd_komunitas) }}"
                                                        class="h3 text-dark font-weight-bold">
                                                        {{ $item->nm_komunitas }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Konten Bersama -->
                                    <div class="col-lg-7 text-center">
                                        <div class="images">
                                            <img src="{{ $item->logo }}" alt="{{ $item->nm_komunitas }}"
                                                class="img-fluid rounded" style="max-width: 90%; height: auto;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
                                <p>Kami selalu terbuka untuk masukan, pengaduan. <br class="d-md-block d-none"> Anda dapat
                                    menghubungi kami melalui detail berikut:</p>
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
                                        <a href="https://www.google.com/maps?q=Perpustakaan+Kabupaten+Bandung,+Jl.+Al-Fathu+Pamekaran,+Kabupaten+Bandung"
                                            target="_blank"> <img src="{{ URL::asset('build/img/icons/location2.svg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="content">
                                        <h4>Lokasi</h4>
                                        <!-- Mengarahkan ke Google Maps dengan alamat yang sesuai -->
                                        <a href="https://www.google.com/maps?q=Perpustakaan+Kabupaten+Bandung,+Jl.+Al-Fathu+Pamekaran,+Kabupaten+Bandung"
                                            target="_blank">
                                            Perpustakaan Kabupaten Bandung <br class="d-lg-block d-none"> Jl. Al-Fathu
                                            Pamekaran, Kabupaten Bandung
                                        </a>
                                    </div>
                                </div>

                                <div class="space40"></div>

                                <div class="contact-auhtor-box">
                                    <div class="icons">
                                        <img src="{{ URL::asset('build/img/icons/phone2.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h6 class="text-white mb-2">Telepon</h6>
                                        <!-- margin bottom untuk memberi jarak antar elemen -->
                                        <!-- Opsi Telepon dan WhatsApp -->
                                        <a href="tel:+6285922549352" class="text-white mb-3">(0859) 2254 9352<br></a>

                                        <h6 class="text-white mb-2">WhatsApp</h6>
                                        <!-- margin bottom untuk memberi jarak antar elemen -->
                                        <!-- Mengarahkan ke WhatsApp -->
                                        <a href="https://wa.me/6285922549352" target="_blank"
                                            class="text-white mb-3">Hubungi via WhatsApp</a>

                                        <h6 class="text-white mb-2">Website</h6>
                                        <!-- margin bottom untuk memberi jarak antar elemen -->
                                        <a href="http://dispusip.bandungkab.go.id" target="_blank"
                                            class="text-white">dispusip@bandungkab.go.id</a>
                                    </div>

                                </div>


                                {{-- <div class="space40"></div>
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
                        </div> --}}
                            </div>
                        </div>


                        <div class="col-lg-7" data-aos="zoom-out" data-aos-duration="1200">
                            <div class="contact-boxarea">
                                <h3>Google Maps</h3>
                                <p>Anda dapat menemukan lokasi kami dengan lebih mudah melalui Google Maps. <br
                                        class="d-lg-block d-none"> Klik maps dibawah ini untuk petunjuk arah menuju
                                    Perpustakaan Kabupaten Bandung di Jl. Al-Fathu, Pamekaran, Kec. Soreang, Kabupaten
                                    Bandung,
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
