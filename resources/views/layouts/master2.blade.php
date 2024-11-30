<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | SEOC - Digital Marketing Agency</title>
    <link rel="shortcut icon" href="{{ URL::asset('build/img/logo/fav-logo1.png') }}" type="image/x-icon">

    @yield('css')
    @include('layouts.head-css')
</head>

<body class="homepage1-body">
    @include('layouts.preloader')
   
    <div class="container-fluid">
        <div class="row">
            <nav class="col-6 col-md-2 d-md-block bg-white border-end min-vh-100 p-3">
                <a href="/" class="d-flex align-items-center mb-3 text-dark text-decoration-none">
                    <span class="fs-5 fw-bold">Komunitas Bunda Literasi</span>
                </a>
                <hr>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="{{ url('kegiatanKomunitas') }}" 
                           class="nav-link {{ Request::is('kegiatanKomunitas') ? 'active bg-light text-dark' : 'text-dark' }}">
                           <i class="fa-solid fa-cogs me-2"></i>
                            Kegiatan Komunitas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('tambahLaporan') }}" 
                           class="nav-link {{ Request::is('tambahLaporan') ? 'active bg-light text-dark' : 'text-dark' }}">
                            <i class="fa-solid fa-file-alt me-2"></i>
                            Tambah Laporan
                        </a>
                    </li>
                    <li class="nav-item ms-4">
                        <a href="{{ url('riwayatLaporan') }}" 
                           class="nav-link {{ Request::is('riwayatLaporan') ? 'active bg-light text-dark' : 'text-dark' }}">
                            <i class="fa-solid fa-history me-2"></i>
                            Riwayat Laporan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('strukturKomunitas') }}" 
                           class="nav-link {{ Request::is('strukturKomunitas') ? 'active bg-light text-dark' : 'text-dark' }}">
                            <i class="fa-solid fa-users me-2"></i>
                            Struktur Komunitas
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('tambahDiskusi') }}" 
                           class="nav-link {{ Request::is('tambahDiskusi') ? 'active bg-light text-dark' : 'text-dark' }}">
                            <i class="fa-solid fa-comments me-2"></i>
                            Tambah Diskusi
                        </a>
                    </li>
                    <li class="nav-item ms-4">
                        <a href="{{ url('forumDiskusi') }}" 
                           class="nav-link {{ Request::is('forumDiskusi') ? 'active bg-light text-dark' : 'text-dark' }}">
                            <i class="fa-solid fa-comment-dots me-2"></i>
                            Forum Diskusi
                        </a>
                    </li>
                </ul>
            </nav>
            <main class="col-md-10 ms-sm-auto px-md-4">
                <div class="pt-3 pb-2 mb-3">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
    @include('layouts.footer')
    @include('layouts.footer-scripts')
    @yield('scripts')

</body>

</html>
