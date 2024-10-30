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
    @include('layouts.sidebar')
   
    <div class="d-flex">
        <div class="p-3 bg-light" style="width: 300px; max-height: calc(100vh - 120px); position: sticky; top: 300px; ">
            <a href="/" class="d-flex align-items-center mb-3 text-dark text-decoration-none">
                <span class="fs-5">Komunitas Bunda Literasi</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="fa-solid fa-home me-2"></i>
                        Laporan
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-dark">
                        <i class="fa-solid fa-file-alt me-2"></i>
                        Buat Laporan
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-dark">
                        <i class="fa-solid fa-history me-2"></i>
                        Riwayat Laporan
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-dark">
                        <i class="fa-solid fa-users me-2"></i>
                        Struktur Komunitas
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-dark">
                        <i class="fa-solid fa-comments me-2"></i>
                        Forum Diskusi
                    </a>
                </li>
            </ul>
        </div>
        <div class="content flex-grow-1 p-3">
            @yield('content')
        </div>
    </div>

    @include('layouts.footer')
    @include('layouts.footer-scripts')
    @yield('scripts')

</body>
</html>
