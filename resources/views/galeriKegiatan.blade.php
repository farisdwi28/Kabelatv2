@extends('layouts.master')
@section('title', 'Galeri Kegiatan')

@section('content')
    <x-page-title title="Beranda" maintitle="Galeri Kegiatan" />

    <div class="case-inner-section-area sp1">
        <div class="container">
            <!-- Title Section -->
            <div class="row">
                <div class="col-12 col-lg-4 mx-auto">
                    <div class="case-header text-center heading2">
                        <h2 id="activity-title" class="h2 mb-3">
                            {{ $activeTab === 'dispusip' ? 'Kegiatan Dispusip' : 'Kegiatan Komunitas' }}</h2>
                    </div>
                    <div class="space50 d-none d-lg-block"></div>
                    <div class="space30 d-block d-lg-none"></div>
                </div>
            </div>

            <!-- Nav Pills - Responsive -->
            <div class="row">
                <div class="col-12 col-lg-7 mx-auto">
                    <div class="tabs-area text-center">
                        <ul class="nav nav-pills flex-column flex-sm-row gap-2" id="pills-tab" role="tablist">
                            <li class="nav-item flex-sm-fill" role="presentation">
                                <a href="{{ route('kegiatan.index', ['tab' => 'dispusip']) }}"
                                    class="nav-link {{ $activeTab === 'dispusip' ? 'active' : '' }}"
                                    style="background-color: #1a5b5b; color: white; border: none; border-radius: 25px; padding: 5px 10px; transition: all 0.3s ease;">
                                    Kegiatan Program Dispusip
                                </a>
                            </li>
                            <li class="nav-item flex-sm-fill" role="presentation">
                                <a href="{{ route('kegiatan.index', ['tab' => 'komunitas']) }}"
                                    class="nav-link  {{ $activeTab === 'komunitas' ? 'active' : '' }}"
                                    style="background-color: #227377; color: white; border: none; border-radius: 25px; padding: 5px 10px; transition: all 0.3s ease;">
                                    Kegiatan Komunitas
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Content Grid -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="tabs-content-area">
                        <div class="tab-content" id="pills-tabContent">
                            @if ($activeTab === 'dispusip')
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                    <div class="tabs-contents">
                                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                                            @foreach ($kegiatanDispusip as $kegiatan)
                                                <div class="col">
                                                    <div class="case-inner-box h-100">
                                                        <div class="img1 image-anime position-relative"
                                                            style="height: 0; padding-bottom: 75%; overflow: hidden; border-radius: 8px;">
                                                            <a
                                                                href="{{ route('kegiatan.detail', ['type' => 'dispusip', 'id' => $kegiatan->kd_kegiatan]) }}">
                                                                @if ($kegiatan->photos->isNotEmpty())
                                                                    <img src="{{ asset('storage/' . $kegiatan->photos->first()->foto_path) }}"
                                                                        alt="{{ $kegiatan->nm_keg }}"
                                                                        class="position-absolute w-100 h-100"
                                                                        style="object-fit: cover; top: 0; left: 0;"
                                                                        onerror="this.src='{{ asset('build/img/all-images/contoh4.png') }}'">
                                                                @else
                                                                    <img src="{{ asset('build/img/all-images/contoh4.png') }}"
                                                                        alt="{{ $kegiatan->nm_keg }}"
                                                                        class="position-absolute w-100 h-100"
                                                                        style="object-fit: cover; top: 0; left: 0;">
                                                                @endif
                                                            </a>
                                                        </div>
                                                        <div class="content-area p-3">
                                                            <div class="link-area">
                                                                <a href="{{ route('kegiatan.detail', ['type' => 'dispusip', 'id' => $kegiatan->kd_kegiatan]) }}"
                                                                    class="head h5 text-break">{{ Str::limit($kegiatan->nm_keg, 15) }}</a>
                                                                <p class="tags small mt-2">
                                                                    {{ Str::limit($kegiatan->desk_keg, 100) }}</p>
                                                            </div>
                                                            <div class="arrow d-flex justify-content-center align-items-center"
                                                                style="width: 50px; height: 50px; background-color: #f0edff; border-radius: 50%;">
                                                                <a href="{{ route('kegiatan.detail', ['type' => 'dispusip', 'id' => $kegiatan->kd_kegiatan]) }}"
                                                                    class="btn btn-link p-0 m-0">
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
                                <!-- Similar structure for komunitas tab with the same responsive improvements -->
                                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel">
                                    <div class="tabs-contents">
                                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                                            @foreach ($kegiatanKomunitas as $kegiatan)
                                                <div class="col">
                                                    <div class="case-inner-box h-100">
                                                        <div class="img1 image-anime position-relative"
                                                            style="height: 0; padding-bottom: 75%; overflow: hidden; border-radius: 8px;">
                                                            <a
                                                                href="{{ route('kegiatan.detail', ['type' => 'komunitas', 'id' => $kegiatan->kd_kegiatan2]) }}">
                                                                @if ($kegiatan->photos->isNotEmpty())
                                                                    <img src="{{ asset('storage/' . $kegiatan->photos->first()->foto_path) }}"
                                                                        alt="{{ $kegiatan->nm_keg }}"
                                                                        class="position-absolute w-100 h-100"
                                                                        style="object-fit: cover; top: 0; left: 0;"
                                                                        onerror="this.src='{{ asset('build/img/all-images/komunitas1.png') }}'">
                                                                @else
                                                                    <img src="{{ asset('build/img/all-images/komunitas1.png') }}"
                                                                        alt="{{ $kegiatan->nm_keg }}"
                                                                        class="position-absolute w-100 h-100"
                                                                        style="object-fit: cover; top: 0; left: 0;">
                                                                @endif
                                                            </a>
                                                        </div>
                                                        <div class="content-area p-3">
                                                            <div class="link-area">
                                                                <a href="{{ route('kegiatan.detail', ['type' => 'komunitas', 'id' => $kegiatan->kd_kegiatan2]) }}"
                                                                    class="head h5 text-break">{{ Str::limit($kegiatan->nm_keg, 15) }}</a>
                                                                <p class="tags small mt-2">
                                                                    {{ Str::limit($kegiatan->desk_keg, 100) }}</p>
                                                            </div>
                                                            <div class="arrow d-flex justify-content-center align-items-center"
                                                                style="width: 50px; height: 50px; background-color: #f0edff; border-radius: 50%;">
                                                                <a href="{{ route('kegiatan.detail', ['type' => 'komunitas', 'id' => $kegiatan->kd_kegiatan2]) }}"
                                                                    class="btn btn-link p-0 m-0">
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

            <!-- Responsive Pagination -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="pagination-area">
                        <nav aria-label="Page navigation" class="d-flex justify-content-center">
                            <ul class="pagination pagination-sm flex-wrap gap-2">
                                {{-- Previous Page --}}
                                @if ($activeTab === 'dispusip')
                                    <li class="page-item {{ $kegiatanDispusip->currentPage() == 1 ? 'disabled' : '' }}">
                                        <a class="page-link rounded-circle d-flex align-items-center justify-content-center"
                                            href="{{ $kegiatanDispusip->currentPage() == 1 ? '#' : $kegiatanDispusip->url($kegiatanDispusip->currentPage() - 1) . '&tab=dispusip' }}"
                                            style="width: 35px; height: 35px;">
                                            <i class="fa-solid fa-angle-left"></i>
                                        </a>
                                    </li>

                                    {{-- Page Numbers --}}
                                    @for ($i = 1; $i <= $kegiatanDispusip->lastPage(); $i++)
                                        <li class="page-item">
                                            <a class="page-link rounded-circle d-flex align-items-center justify-content-center {{ $kegiatanDispusip->currentPage() == $i ? 'active' : '' }}"
                                                href="{{ $kegiatanDispusip->url($i) }}&tab=dispusip"
                                                style="width: 35px; height: 35px;">
                                                {{ $i }}
                                            </a>
                                        </li>
                                    @endfor

                                    {{-- Next Page --}}
                                    <li
                                        class="page-item {{ $kegiatanDispusip->currentPage() == $kegiatanDispusip->lastPage() ? 'disabled' : '' }}">
                                        <a class="page-link rounded-circle d-flex align-items-center justify-content-center"
                                            href="{{ $kegiatanDispusip->currentPage() == $kegiatanDispusip->lastPage() ? '#' : $kegiatanDispusip->url($kegiatanDispusip->currentPage() + 1) . '&tab=dispusip' }}"
                                            style="width: 35px; height: 35px;">
                                            <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </li>
                                @else
                                    {{-- Similar structure for komunitas pagination --}}
                                    <li class="page-item {{ $kegiatanKomunitas->currentPage() == 1 ? 'disabled' : '' }}">
                                        <a class="page-link rounded-circle d-flex align-items-center justify-content-center"
                                            href="{{ $kegiatanKomunitas->currentPage() == 1 ? '#' : $kegiatanKomunitas->url($kegiatanKomunitas->currentPage() - 1) . '&tab=komunitas' }}"
                                            style="width: 35px; height: 35px;">
                                            <i class="fa-solid fa-angle-left"></i>
                                        </a>
                                    </li>

                                    @for ($i = 1; $i <= $kegiatanKomunitas->lastPage(); $i++)
                                        <li class="page-item">
                                            <a class="page-link rounded-circle d-flex align-items-center justify-content-center {{ $kegiatanKomunitas->currentPage() == $i ? 'active' : '' }}"
                                                href="{{ $kegiatanKomunitas->url($i) }}&tab=komunitas"
                                                style="width: 35px; height: 35px;">
                                                {{ $i }}
                                            </a>
                                        </li>
                                    @endfor

                                    <li
                                        class="page-item {{ $kegiatanKomunitas->currentPage() == $kegiatanKomunitas->lastPage() ? 'disabled' : '' }}">
                                        <a class="page-link rounded-circle d-flex align-items-center justify-content-center"
                                            href="{{ $kegiatanKomunitas->currentPage() == $kegiatanKomunitas->lastPage() ? '#' : $kegiatanKomunitas->url($kegiatanKomunitas->currentPage() + 1) . '&tab=komunitas' }}"
                                            style="width: 35px; height: 35px;">
                                            <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </nav>
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
