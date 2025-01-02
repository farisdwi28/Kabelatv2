@php
    $isMember = false;
    $jabatan = null; // Set jabatan to null initially
    if (Auth::check()) {
        $memberInfo = App\Models\MemberKomunitas::where('kd_member', Auth::user()->kd_pen)->first();
        if ($memberInfo) {
            $isMember = true;
            $jabatan = $memberInfo->kd_jabatan === 'ANGGT' ? 'Anggota' : $memberInfo->kd_jabatan;
        }
    }
@endphp

<header>
    <div class="header-area homepage1 header header-sticky d-none d-lg-block bg-white fixed-top shadow" id="header">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10 d-flex justify-content-center">
                    <div class="header-elements d-flex justify-content-between align-items-center w-100">
                        <div class="site-logo">
                            <a href="/">
                                <img src="{{ asset('build/img/all-images/Logo Kabelat.svg') }}" alt="Logo">
                            </a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="/">Beranda</a></li>
                                <li>
                                    <a href="#">Program Dispusip <i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="dropdown-padding">
                                        <li><a href="{{ route('programdispusip.index') }}">Semua Program</a></li>
                                        @foreach ($programs as $program)
                                            <li>
                                                <a href="{{ route('programdispusip.detail', $program->kd_program) }}">
                                                    {{ $program->nm_program }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{ route('komunitas.show') }}">Komunitas</a></li>
                                <li>
                                    <a href="#">Informasi <i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="dropdown-padding">
                                        <li><a href="{{ route('berita.index') }}">Berita</a></li>
                                        <li><a href="{{ route('pengumuman.index') }}">Pengumuman</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('kegiatan.index') }}">Galeri Kegiatan</a></li>
                                <li><a href="{{ route('profile.index') }}">Profil</a></li>
                                {{-- <li>
                                    <a href="#">Tentang <i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="dropdown-padding">
                                        @auth
                                            <li>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <button type="submit" class="dropdown-item">Logout</button>
                                                </form>
                                            </li>
                                        @endauth
                                    </ul>
                                </li> --}}
                            </ul>
                        </div>

                        <div class="btn-area">
                            @guest
                                <a href="{{ route('login') }}" class="header-btn1">Masuk <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            @endguest

                            @auth
                            <div class="user-profile-dropdown d-flex align-items-center gap-3 position-relative">
                                <div class="profile-avatar">
                                    <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="User Avatar"
                                         class="profile-picture rounded-circle shadow-sm"
                                         style="width: 60px; height: 60px; object-fit: cover;">
                                </div>
                                <div class="me-2">
                                    <span class="font-weight-bold">
                                        {{ Str::limit(Auth::user()->username, 15, '...') }}
                                    </span>
                                    @if ($isMember && $jabatan)
                                        <div class="text-muted small">{{ $jabatan }}</div>
                                    @endif
                                </div>
                                    <button class="btn btn-link dropdown-toggle p-0" type="button" id="sidebarDropdownMenuButton" 
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-caret-down" style="font-size: 20px; color: #040404;"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0 mt-2 rounded-3 animated fadeIn" 
                                        aria-labelledby="sidebarDropdownMenuButton">
                                        {{-- <li><a class="dropdown-item" href="{{ route('profile.show', Auth::id()) }}">Profil</a></li> --}}
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submit" class="dropdown-item">Logout</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--=====HEADER END =======-->

<!--===== MOBILE HEADER STARTS =======-->
<div class="mobile-header mobile-haeder1 d-block d-lg-none">
    <div class="container-fluid">
        <div class="col-12">
            <div class="mobile-header-elements">
                <div class="mobile-logo">
                    <a href="/"><img src="{{ URL::asset('build/img/all-images/Logo Kabelat.svg') }}" alt=""></a>
                </div>
                <div class="mobile-nav-icon dots-menu">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mobile-sidebar mobile-sidebar1">
    <div class="logosicon-area">
        <div class="logos">
            <img src="{{ URL::asset('build/img/all-images/Logo Kabelat.svg') }}" alt="">
        </div>
        <div class="menu-close">
            <i class="fa-solid fa-xmark"></i>
        </div>
    </div>
    <div class="mobile-nav mobile-nav1">
        <ul class="mobile-nav-list nav-list1">
            <li><a href="/">Beranda </a></li>
            <li> <a href="#">Program Dispusip</a>
                <ul class="sub-menu">
                    <li><a href="{{ route('programdispusip.index') }}">Semua Program</a></li>
                    @foreach ($programs as $program)
                        <li>
                            <a href="{{ route('programdispusip.detail', $program->kd_program) }}">
                                {{ $program->nm_program }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li><a href="{{ route('komunitas.show') }}">Komunitas</a></li>
            <li><a href="#">Informasi</a>
                <ul class="sub-menu">
                    <li><a href="{{ route('berita.index') }}">Berita</a></li>
                    <li><a href="{{ route('pengumuman.index') }}">Pengumuman</a></li>
                </ul>
            </li>
            <li><a href="galeriKegiatan">Galeri Kegiatan</a></li>
            <li><a href="profile">Profil</a></li>
        </ul>

        <div class="allmobilesection">
            @guest
                <a href="{{ route('login') }}" class="header-btn1">Masuk <span><i class="fa-solid fa-arrow-right"></i></span></a>
            @endguest

            @auth
            <div class="user-profile-dropdown d-flex align-items-center gap-3 position-relative">
                <div class="profile-avatar">
                    <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="User Avatar"
                         class="profile-picture rounded-circle shadow-sm"
                         style="width: 60px; height: 60px; object-fit: cover;">
                </div>
                <div class="me-2">
                    <span class="font-weight-bold">
                        {{ Str::limit(Auth::user()->username, 15, '...') }}
                    </span>
                    @if ($isMember && $jabatan)
                        <div class="text-muted small">{{ $jabatan }}</div>
                    @endif
                </div>
                <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle p-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-caret-down" style="font-size: 20px; color: #007bff;"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0 mt-2 rounded-3 animated fadeIn" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="{{ route('profile.show', Auth::id()) }}">Profil</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            @endauth
        </div>
    </div>
</div>
