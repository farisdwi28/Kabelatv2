@php
    $isMember = false;
    $jabatan = null;
    $profilePhoto = 'https://ui-avatars.com/api/?name=Guest&background=random'; // Default avatar

    if (Auth::check()) {
        $memberInfo = App\Models\MemberKomunitas::where('kd_member', Auth::user()->kd_pen)->first();
        if ($memberInfo) {
            $isMember = true;
            $jabatan = $memberInfo->kd_jabatan === 'ANGGT' ? 'Anggota' : $memberInfo->kd_jabatan;
        }

        // Get profile photo
        // Get profile photo
        $penduduk = App\Models\Penduduk::where('kd_pen', Auth::user()->kd_pen)->first();
        if ($penduduk && $penduduk->foto_pen) {
            $profilePhoto = asset('storage/images/profiles/' . $penduduk->foto_pen);
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
                                        @php $programCount = 0; @endphp
                                        @foreach ($programs as $program)
                                            @if ($programCount < 3)
                                                <li>
                                                    <a
                                                        href="{{ route('programdispusip.detail', $program->kd_program) }}">
                                                        {{ $program->nm_program }}
                                                    </a>
                                                </li>
                                            @endif
                                            @php $programCount++; @endphp
                                        @endforeach
                                        <li><a href="{{ route('programdispusip.index') }}">Semua Program</a></li>
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
                                        <img src="{{ $profilePhoto }}" alt="User Avatar"
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
                                        <button class="btn btn-link  p-0" type="button" id="sidebarDropdownMenuButton"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-caret-down" style="font-size: 20px; color: #040404;"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0 mt-2 rounded-3 animated fadeIn"
                                            aria-labelledby="sidebarDropdownMenuButton">
                                            {{-- <li>
                                            <form action="POST" action=<a href="{{ route('profile.index') }}"></a>
                                                @csrf
                                                <button type="sumbit" class="dropdown-item">Profile</button>
                                            </form>
                                        </li> --}}
                                            <li>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <button type="submit" class="dropdown-item"
                                                        style="background-color: transparent; color: #040404; border: none; outline: none; transition: background-color 0.3s;"
                                                        onmouseover="this.style.backgroundColor='#ccc'; this.style.color='#666';"
                                                        onmouseout="this.style.backgroundColor='transparent'; this.style.color='#040404';">
                                                        Logout
                                                    </button>
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

<!--===== MOBILE HEADER STARTS =======-->
<div class="mobile-header mobile-haeder1 d-block d-lg-none">
    <div class="container-fluid">
        <div class="col-12">
            <div class="mobile-header-elements">
                <div class="mobile-logo">
                    <a href="/"><img src="{{ URL::asset('build/img/all-images/Logo Kabelat.svg') }}"
                            alt=""></a>
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
                <a href="{{ route('login') }}" class="header-btn1">Masuk <span><i
                            class="fa-solid fa-arrow-right"></i></span></a>
            @endguest

            @auth
                <div class="user-profile-dropdown d-flex align-items-center gap-3 position-relative">
                    <!-- Foto Profil -->
                    <button class="btn btn-link p-0" type="button" data-bs-toggle="dropdown">
                        <img src="{{ $profilePhoto }}" alt="Profile" class="rounded-circle"
                            style="width: 40px; height: 40px; object-fit: cover;">
                    </button>
                    <div class="me-2">
                        <span class="font-weight-bold">
                            {{ Str::limit(Auth::user()->username, 15, '...') }}
                        </span>
                        @if ($isMember && $jabatan)
                            <div class="text-muted small">{{ $jabatan }}</div>
                        @endif
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-link  p-0" type="button" id="sidebarDropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-caret-down" style="font-size: 20px; color: #040404;"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0 mt-2 rounded-3 animated fadeIn"
                            aria-labelledby="sidebarDropdownMenuButton">
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item"
                                        style="background-color: transparent; color: #040404; border: none; outline: none; transition: background-color 0.3s;"
                                        onmouseover="this.style.backgroundColor='#ccc'; this.style.color='#666';"
                                        onmouseout="this.style.backgroundColor='transparent'; this.style.color='#040404';">
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            @endauth
        </div>
    </div>
</div>
