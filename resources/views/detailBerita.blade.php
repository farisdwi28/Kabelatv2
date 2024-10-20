@extends('layouts.master')
@section('title', 'Our Blog')

@section('content')

    <x-page-title title="Beranda" pagetitle="Berita" maintitle="Detail Berita" />


    <!--===== BLOG AREA STARTS =======-->
    <div class="blog-auhtor-section-area sp1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="blog-auhtor-sidebar-area heading2">
                        <div class="tags-area">
                            <ul>
                                <li><a href="#"><img src="{{ URL::asset('build/img/icons/calender1.svg') }}"
                                            alt="">Hari Ini</a></li>
                            </ul>
                        </div>
                        <h2>Dispusip Kab. Bandung turut hadir dalam kegiatan "Tradisi Wuku Taun Kampung Adat Cikondang"</h2>
                        <div class="space34"></div>
                        <div class="img1">
                            <img src="{{ URL::asset('build/img/all-images/blog-img23.png') }}" alt="">
                        </div>
                        <div class="space24"></div>
                        <p>Wargi Bedas!!!

                            Tim Naskah Kuna DISPUSIP Kabupaten Bandung berkesempatan hadir dalam acara Wuku Taun Kampung
                            Adat Cikondang. Wuku Taun merupakan perayaan Tahun Baru Islam 1 Muharam 1446 H, moment ini
                            dilaksanakan setiap tahunnya selama 14 hari berturut-turut.

                            Seluruh Masyarakat Kampung Adat Cikondang bergotong-royong mengolah hasil bumi untuk dinikmati
                            bersama-sama pada puncak perayaan, hal ini merupakan bentuk rasa syukur atas karunia Allaah SWT
                            akan hasil bumi yang melimpah di tahun-tahun sebelumnya.

                            Kampung Adat Cikondang merupakan Kampung Adat yang berada di Desa Lamajang, Kecamatan
                            Pangalengan, Kabupaten Bandung. Kampung Adat Cikondang masih mempertahankan adat istiadat
                            sebagai kearipan lokal, salah satunya dengan Pelestarian Naskah Kuna peninggalan leluhurnya.
                            @dadangsupriatna </p>


                        <div class="social-tags">
                            <div class="tags">
                                <h4>Tags:</h4>
                                <ul>
                                    <li><a href="#">PPC Advertising</a></li>
                                    <li><a href="#">SEO</a></li>
                                    <li><a href="#" class="m-0">Digital Marketing</a></li>
                                </ul>
                            </div>
                            <div class="social">
                                <h4>Social:</h4>
                                <ul>
                                    <li><a href="#"><img src="{{ URL::asset('build/img/icons/facebook.svg') }}"
                                                alt=""></a></li>
                                    <li><a href="#"><img src="{{ URL::asset('build/img/icons/instagram.svg') }}"
                                                alt=""></a></li>
                                    <li><a href="#"><img src="{{ URL::asset('build/img/icons/linkedin.svg') }}"
                                                alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="space50"></div>
                        <h3>Komentar (2)</h3>
                        <div class="space32"></div>
                        <div class="comments-boxarea">
                            <div class="comments-boxes">
                                <div class="comments-auhtor-box">
                                    <div class="img3">
                                        <img src="{{ URL::asset('build/img/all-images/comments-img1.png') }}"
                                            alt="">
                                    </div>
                                    <div class="content">
                                        <a href="#" class="name">Ervalsa Dwi Nanda</a>
                                        <a href="#" class="date">Hari Ini</a>
                                    </div>
                                </div>
                            </div>
                            <div class="space16"></div>
                            <p>Berita Ini sangat Bermanfaat ya min</p>
                        </div>
                        <div class="space30"></div>
                        <div class="comments-boxarea box2">
                            <div class="comments-boxes">
                                <div class="comments-auhtor-box">
                                    <div class="img3">
                                        <img src="{{ URL::asset('build/img/all-images/comments-img2.png') }}"
                                            alt="">
                                    </div>
                                    <div class="content">
                                        <a href="#" class="name">Wawan</a>
                                        <a href="#" class="date">Kemarin</a>
                                    </div>
                                </div>
                            </div>
                            <div class="space16"></div>
                            <p>Kegiatannya Mantap!</p>
                        </div>
                        <div class="space50"></div>

                        <div class="contact-form-area">
                            <h4>Berikan Komentar</h4>
                            <div class="space12"></div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-area">
                                        <textarea placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="space24"></div>
                                    <div class="input-area">
                                        <button type="submit" class="header-btn1">Kirim <span><i
                                                    class="fa-solid fa-arrow-right"></i></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== BLOG AREA ENDS =======-->

    <!--===== BLOG AREA STARTS =======-->
    <div class="blog1-scetion-area sp2 bg2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="blog-hedaer-area heading2 text-center">
                        <h2>Berita Lainnya</h2>
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
                            <a href="blog-single" class="readmore">Baca Selengkapnya <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== BLOG AREA ENDS =======-->

@endsection