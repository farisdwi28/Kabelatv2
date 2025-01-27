@extends('layouts.master')
@section('title', 'Galeri Kegiatan')

@section('content')
    <x-page-title title="Beranda" maintitle="Galeri Kegiatan" />

    <div class="case-inner-section-area sp1">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 m-auto">
                    <div class="case-header text-center heading2">
                        <h2 id="activity-title">{{ $activeTab === 'dispusip' ? 'Kegiatan Dispusip' : 'Kegiatan Komunitas' }}
                        </h2>
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
                                <a href="{{ route('kegiatan.index', ['tab' => 'dispusip']) }}"
                                    class="nav-item {{ $activeTab === 'dispusip' ? 'active' : '' }} "
                                    style="background-color: #1a5b5b; color: white; border: none; border-radius: 25px; padding: 10px 20px; transition: background-color 0.3s ease, color 0.3s ease; text-decoration: none; display: inline-block; margin: 0 5px;">
                                    Kegiatan Program Dispusip
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="{{ route('kegiatan.index', ['tab' => 'komunitas']) }}"
                                    class="nav-item {{ $activeTab === 'komunitas' ? 'active' : '' }} "
                                    style="background-color: #227377; color: white; border: none; border-radius: 25px; padding: 10px 20px; transition: background-color 0.3s ease, color 0.3s ease; text-decoration: none; display: inline-block; margin: 0 5px;">
                                    Kegiatan Komunitas
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-content-area">
                        <div class="tab-content" id="pills-tabContent">
                            @if ($activeTab === 'dispusip')
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                    <div class="tabs-contents">
                                        <div class="row align-items-center">
                                            @foreach ($kegiatanDispusip as $kegiatan)
                                                <div class="col-lg-4">
                                                    <div class="case-inner-box">
                                                        <!-- Gambar -->
                                                        <div class="img1 image-anime"
                                                            style="height: 250px; overflow: hidden; border-radius: 8px;">
                                                            <a
                                                                href="{{ route('kegiatan.detail', ['type' => 'dispusip', 'id' => $kegiatan->kd_kegiatan]) }}">
                                                                <img src="{{ $kegiatan->photos->isNotEmpty() ? $kegiatan->photos->first()->foto_path : asset('build/img/all-images/contoh4.png') }}"
                                                                    alt="{{ $kegiatan->nm_keg }}"
                                                                    style="width: 100%; height: 100%; object-fit: cover;"
                                                                    onerror="this.onerror=null; this.src='{{ asset('build/img/all-images/contoh4.png') }}';">
                                                            </a>
                                                        </div>
                                                        <!-- Konten -->
                                                        <div class="content-area">
                                                            <div class="link-area">
                                                                <a href="{{ route('kegiatan.detail', ['type' => 'dispusip', 'id' => $kegiatan->kd_kegiatan]) }}"
                                                                    class="head">{{ $kegiatan->nm_keg }}</a>
                                                                <a href="#"
                                                                    class="tags">{{ Str::limit($kegiatan->desk_keg, 100) }}</a>
                                                            </div>
                                                            <div class="arrow">
                                                                <a
                                                                    href="{{ route('kegiatan.detail', ['type' => 'dispusip', 'id' => $kegiatan->kd_kegiatan]) }}">
                                                                    <i class="fa-solid fa-arrow-right"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel">
                                    <div class="tabs-contents">
                                        <div class="row align-items-center">
                                            @foreach ($kegiatanKomunitas as $kegiatan)
                                                <div class="col-lg-4">
                                                    <div class="case-inner-box">
                                                        <!-- Gambar -->
                                                        <div class="img1 image-anime"
                                                            style="height: 250px; overflow: hidden; border-radius: 8px;">
                                                            <a
                                                                href="{{ route('kegiatan.detail', ['type' => 'komunitas', 'id' => $kegiatan->kd_kegiatan2]) }}">
                                                                <img src="{{ $kegiatan->photos->isNotEmpty() ? $kegiatan->photos->first()->foto_path : asset('build/img/all-images/komunitas1.png') }}"
                                                                    alt="{{ $kegiatan->nm_keg }}"
                                                                    style="width: 100%; height: 100%; object-fit: cover;"
                                                                    onerror="this.onerror=null; this.src='{{ asset('build/img/all-images/komunitas1.png') }}';">
                                                            </a>
                                                        </div>
                                                        <!-- Konten -->
                                                        <div class="content-area">
                                                            <div class="link-area">
                                                                <a href="{{ route('kegiatan.detail', ['type' => 'komunitas', 'id' => $kegiatan->kd_kegiatan2]) }}"
                                                                    class="head">{{ $kegiatan->nm_keg }}</a>
                                                                <a href="#"
                                                                    class="tags">{{ Str::limit($kegiatan->desk_keg, 100) }}</a>
                                                            </div>
                                                            <div class="arrow">
                                                                <a
                                                                    href="{{ route('kegiatan.detail', ['type' => 'komunitas', 'id' => $kegiatan->kd_kegiatan2]) }}">
                                                                    <i class="fa-solid fa-arrow-right"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            {{-- <div class="col-lg-12">
                        <div class="pagination-area">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    {{-- Previous Page Link --}}
            {{-- @if (($activeTab === 'dispusip' && !$kegiatanDispusip->onFirstPage()) || ($activeTab === 'komunitas' && !$kegiatanKomunitas->onFirstPage()))
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $activeTab === 'dispusip' ? $kegiatanDispusip->previousPageUrl() : $kegiatanKomunitas->previousPageUrl() }}">
                                                <i class="fa-solid fa-angle-left"></i>
                                            </a>
                                        </li>
                                    @else
                                        <li class="page-item disabled">
                                            <span class="page-link"><i class="fa-solid fa-angle-left"></i></span>
                                        </li>
                                    @endif

                                    {{-- Page Number Links --}}
            {{-- @foreach ($activeTab === 'dispusip' ? $kegiatanDispusip->links()->elements[0] : $kegiatanKomunitas->links()->elements[0] as $page => $url)
                                        <li class="page-item {{ ($activeTab === 'dispusip' ? $kegiatanDispusip->currentPage() : $kegiatanKomunitas->currentPage()) == $page ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endforeach --}}

            {{-- Next Page Link --}}
            {{-- @if (($activeTab === 'dispusip' && $kegiatanDispusip->hasMorePages()) || ($activeTab === 'komunitas' && $kegiatanKomunitas->hasMorePages()))
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $activeTab === 'dispusip' ? $kegiatanDispusip->nextPageUrl() : $kegiatanKomunitas->nextPageUrl() }}">
                                                <i class="fa-solid fa-angle-right"></i>
                                            </a>
                                        </li>
                                    @else --}}
            {{-- <li class="page-item disabled">
                                            <span class="page-link"><i class="fa-solid fa-angle-right"></i></span>
                                        </li>
                                    @endif
                                </ul>
                            </nav>
                        </div> --}}
            {{-- </div> --}}
            {{-- Custom Pagination --}}
            <div class="col-lg-12">
                <div class="pagination-area">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center" style="gap: 0.5rem;">
                            {{-- Previous Page --}}
                            @if ($activeTab === 'dispusip')
                                @if ($kegiatanDispusip->currentPage() == 1)
                                    <li class="page-item">
                                        <a class="page-link" href="#" style="border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border: none; transition: all 0.3s ease; background-color: #f8f9fa;">
                                            <i class="fa-solid fa-angle-left"></i>
                                        </a>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $kegiatanDispusip->url($kegiatanDispusip->currentPage() - 1) }}&tab=dispusip" 
                                           style="border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border: none; transition: all 0.3s ease; background-color: #f8f9fa; color: #0d6efd;">
                                            <i class="fa-solid fa-angle-left"></i>
                                        </a>
                                    </li>
                                @endif
                            @else
                                @if ($kegiatanKomunitas->currentPage() == 1)
                                    <li class="page-item">
                                        <a class="page-link" href="#" style="border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border: none; transition: all 0.3s ease; background-color: #f8f9fa;">
                                            <i class="fa-solid fa-angle-left"></i>
                                        </a>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $kegiatanKomunitas->url($kegiatanKomunitas->currentPage() - 1) }}&tab=komunitas" 
                                           style="border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border: none; transition: all 0.3s ease; background-color: #f8f9fa; color: #0d6efd;">
                                            <i class="fa-solid fa-angle-left"></i>
                                        </a>
                                    </li>
                                @endif
                            @endif
            
                            {{-- Page Numbers --}}
                            @if ($activeTab === 'dispusip')
                                @for ($i = 1; $i <= $kegiatanDispusip->lastPage(); $i++)
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $kegiatanDispusip->url($i) }}&tab=dispusip" 
                                           style="border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border: none; transition: all 0.3s ease; 
                                           background-color: {{ $kegiatanDispusip->currentPage() == $i ? '#0d6efd' : '#f8f9fa' }}; 
                                           color: {{ $kegiatanDispusip->currentPage() == $i ? '#ffffff' : '#0d6efd' }};">
                                            {{ $i }}
                                        </a>
                                    </li>
                                @endfor
                            @else
                                @for ($i = 1; $i <= $kegiatanKomunitas->lastPage(); $i++)
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $kegiatanKomunitas->url($i) }}&tab=komunitas" 
                                           style="border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border: none; transition: all 0.3s ease; 
                                           background-color: {{ $kegiatanKomunitas->currentPage() == $i ? '#0d6efd' : '#f8f9fa' }}; 
                                           color: {{ $kegiatanKomunitas->currentPage() == $i ? '#ffffff' : '#0d6efd' }};">
                                            {{ $i }}
                                        </a>
                                    </li>
                                @endfor
                            @endif
            
                            {{-- Next Page --}}
                            @if ($activeTab === 'dispusip')
                                @if ($kegiatanDispusip->currentPage() == $kegiatanDispusip->lastPage())
                                    <li class="page-item">
                                        <a class="page-link" href="#" style="border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border: none; transition: all 0.3s ease; background-color: #f8f9fa;">
                                            <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $kegiatanDispusip->url($kegiatanDispusip->currentPage() + 1) }}&tab=dispusip" 
                                           style="border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border: none; transition: all 0.3s ease; background-color: #f8f9fa; color: #0d6efd;">
                                            <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </li>
                                @endif
                            @else
                                @if ($kegiatanKomunitas->currentPage() == $kegiatanKomunitas->lastPage())
                                    <li class="page-item">
                                        <a class="page-link" href="#" style="border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border: none; transition: all 0.3s ease; background-color: #f8f9fa;">
                                            <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $kegiatanKomunitas->url($kegiatanKomunitas->currentPage() + 1) }}&tab=komunitas" 
                                           style="border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border: none; transition: all 0.3s ease; background-color: #f8f9fa; color: #0d6efd;">
                                            <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </li>
                                @endif
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <script>
        function updateTitle(title) {
            document.getElementById('activity-title').innerText = title;
        }
    </script>
@endsection
