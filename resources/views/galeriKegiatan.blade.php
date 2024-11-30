@extends('layouts.master')
@section('title', 'Case Study')

@section('content')

<x-page-title title="Beranda" pagetitle="Galeri Kegiatan" maintitle="Galeri Kegiatan" />

<!--===== CASE AREA STARTS =======-->
<div class="case-inner-section-area sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 m-auto">
                <div class="case-header text-center heading2">
                    <h2 id="activity-title">Kegiatan Dispusip</h2> 
                </div>
                <div class="space50 d-lg-block d-none"></div>
                <div class="space30 d-lg-none d-block"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-7 m-auto">
                <div class="tabs-area text-center">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist" style="text-align: center;">
                        <li class="nav-item" role="presentation">
                            <button class="nav-item" id="pills-email-tab" 
                                data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true" onclick="updateTitle('Kegiatan Dispusip')" style="background-color: #1a5b5b; color: white; border: none; border-radius: 25px; padding: 10px 20px; transition: background-color 0.3s ease, color 0.3s ease;">
                                Kegiatan Program Dispusip
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-item" id="pills-hyper-tab" 
                                data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" onclick="updateTitle('Kegiatan Komunitas')" style="background-color: #227377; color: white; border: none; border-radius: 25px; padding: 10px 20px; transition: background-color 0.3s ease, color 0.3s ease;">
                                Kegiatan Komunitas
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="tabs-content-area">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade active show" id="pills-home" role="tabpanel">
                            <div class="tabs-contents">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <div class="case-inner-box">
                                            <div class="img1 image-anime">
                                                <a href="detailKegiatan"></a><img src="{{ URL::asset('build/img/all-images/contoh4.png') }}" alt=""></a>
                                            </div>
                                            <div class="content-area">
                                                <div class="link-area">
                                                    <a href="detailKegiatan" class="head">Sang Bedas</a>
                                                    <a href="case-single" class="tags">Lomba Mendongeng dan Bertutur Cerita Daerah</a>
                                                </div>
                                                <div class="arrow">
                                                    <a href="detailKegiatan"><i class="fa-solid fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel">
                            <div class="tabs-contents">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <div class="case-inner-box">
                                            <div class="img1 image-anime">
                                                <a href="detailKegiatan"></a><img src="{{ URL::asset('build/img/all-images/komunitas1.png') }}" alt=""></a>
                                            </div>
                                            <div class="content-area">
                                                <div class="link-area">
                                                    <a href="detailKegiatan" class="head">Bunda Literasi</a>
                                                    <a href="#" class="tags">Pelatihan Literasi Digital untuk Orang Tua</a>
                                                </div>
                                                <div class="arrow">
                                                    <a href="detailKegiatan"><i class="fa-solid fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="pagination-area">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fa-solid fa-angle-left"></i></a>
                                    </li>
                                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fa-solid fa-angle-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== CASE AREA ENDS =======-->

<script>
    function updateTitle(title) {
        document.getElementById('activity-title').innerText = title; // Change the text of the h2
    }
</script>

@endsection
