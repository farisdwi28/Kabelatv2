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
                                        <h2>{{ Str::limit($p->judul_pengumuman, 50) }}</h2>
                                        <p>{{ \Illuminate\Support\Str::limit($p->deskripsi, 150) }}</p>
                                        <div class="btn-area">
                                            <a href="{{ route('pengumuman.show', $p->kd_info) }}" class="header-btn1">Lihat
                                                Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="img-container"
                                        style="height: 250px; overflow: hidden; border-radius: 8px; transition: transform 0.3s;">
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
            <!-- Pagination Section -->
            <div class="col-lg-12">
                <div class="pagination-area">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center" style="gap: 0.5rem;">
                            {{-- Previous Page --}}
                            @if ($pengumuman->currentPage() == 1)
                                <li class="page-item">
                                    <a class="page-link" href="#" style="border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border: none; transition: all 0.3s ease; background-color: #f8f9fa;">
                                        <i class="fa-solid fa-angle-left"></i>
                                    </a>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $pengumuman->url($pengumuman->currentPage() - 1) }}" 
                                       style="border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border: none; transition: all 0.3s ease; background-color: #f8f9fa; color: #0d6efd;">
                                        <i class="fa-solid fa-angle-left"></i>
                                    </a>
                                </li>
                            @endif
            
                            {{-- Page Numbers --}}
                            @for ($i = 1; $i <= $pengumuman->lastPage(); $i++)
                                <li class="page-item">
                                    <a class="page-link" href="{{ $pengumuman->url($i) }}" 
                                       style="border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border: none; transition: all 0.3s ease; 
                                       background-color: {{ $pengumuman->currentPage() == $i ? '#0d6efd' : '#f8f9fa' }}; 
                                       color: {{ $pengumuman->currentPage() == $i ? '#ffffff' : '#0d6efd' }};">
                                        {{ $i }}
                                    </a>
                                </li>
                            @endfor
            
                            {{-- Next Page --}}
                            @if ($pengumuman->currentPage() == $pengumuman->lastPage())
                                <li class="page-item">
                                    <a class="page-link" href="#" style="border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border: none; transition: all 0.3s ease; background-color: #f8f9fa;">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $pengumuman->url($pengumuman->currentPage() + 1) }}" 
                                       style="border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border: none; transition: all 0.3s ease; background-color: #f8f9fa; color: #0d6efd;">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
            
    
@endsection
