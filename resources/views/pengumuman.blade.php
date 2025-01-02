@extends('layouts.master')
@section('title', 'Pengumuman')

@section('content')
    <x-page-title title="Beranda" pagetitle="Indeks Pengumuman" maintitle="Pengumuman" />

    <!--===== BLOG AREA STARTS =======-->
    <div class="blog-top-area sp1">
        <div class="container">
            @foreach ($pengumuman as $p)
                <div class="row mb-4">
                    <div class="col-lg-12">
                        <div class="blog-top-boxarea">
                            <div class="row align-items-center">
                                <div class="col-lg-5">
                                    <div class="content-area heading2">
                                        <h2>{{ $p->judul_pengumuman }}</h2>
                                        <p>{{ \Illuminate\Support\Str::limit($p->deskripsi, 150) }}</p>
                                        <div class="btn-area">
                                            <a href="{{ route('pengumuman.show', $p->kd_info) }}" class="header-btn1">Lihat Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="img-container" style="height: 250px; overflow: hidden; border-radius: 8px; transition: transform 0.3s;">
                                        <a href="{{ route('pengumuman.show', $p->kd_info) }}">
                                            <img src="{{ $p->foto_pengumuman }}" alt="Pengumuman {{ $p->judul_pengumuman }}"
                                                style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
    <!-- Pagination area -->
    <div class="col-lg-12">
        <div class="pagination-area mt-5">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center pagination-rounded">
                    {{-- Previous Page Link --}}
                    @if ($pengumuman->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link"><i class="fa-solid fa-angle-left"></i></span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $pengumuman->previousPageUrl() }}">
                                <i class="fa-solid fa-angle-left"></i>
                            </a>
                        </li>
                    @endif
    
                    {{-- Page Number Links --}}
                    @foreach ($pengumuman->links()->elements[0] as $page => $url)
                        <li class="page-item {{ $pengumuman->currentPage() == $page ? 'active' : '' }}">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach
    
                    {{-- Next Page Link --}}
                    @if ($pengumuman->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $pengumuman->nextPageUrl() }}">
                                <i class="fa-solid fa-angle-right"></i>
                            </a>
                        </li>
                    @else
                        <li class="page-item disabled">
                            <span class="page-link"><i class="fa-solid fa-angle-right"></i></span>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
    
    <!--===== BLOG AREA ENDS =======-->
@endsection
