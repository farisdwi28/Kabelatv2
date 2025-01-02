@extends('layouts.master')
@section('title', 'Services')

@section('content')

    <x-page-title title="Beranda" pagetitle="Program Dispusip" maintitle="Program Dispusip" />

    <!--===== BLOG AREA STARTS =======-->
    <div class="blog1-scetion-area sp1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="blog-hedaer-area heading2 text-center">
                        <h5>Program Dispusip</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($programs as $program)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="blog-author-boxarea">
                            <div class="blog-author-boxarea">
                                <div class="img1" style="height: 250px; overflow: hidden; border-radius: 8px;">
                                    <!-- Menampilkan gambar dengan ukuran yang lebih besar -->
                                    <img src="{{ $program->sampul_program }}" 
                                         alt="Sampul Program" 
                                         style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                                <div class="content-area">
                                    <a href="{{ route('programdispusip.detail', $program->kd_program) }}" class="font-size: 1.5rem;">
                                        <span style="font-size: 1.50rem; font-weight: semibold;">{{ $program->nm_program }}</span>
                                    </a>
                                    <p style="font-size: 1.25rem;">{{ Str::limit($program->tentang_program, 150) }}</p>
                                    <a href="{{ route('programdispusip.detail', $program->kd_program) }}" class="">
                                        Baca Selengkapnya <i class="bold fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination Section -->
            @if($programs->count() > 6)
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
            @endif

        </div>
    </div>
    <!--===== BLOG AREA ENDS =======-->

@endsection
