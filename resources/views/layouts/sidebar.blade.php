<header>
    <div class="header-area homepage1 header header-sticky d-none d-lg-block  bg-white fixed-top shadow" id="header">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10 d-flex justify-content-center">
                    <div class="header-elements d-flex justify-content-between align-items-center w-100">
                        <div class="site-logo">
                            <a href="index">
                                <img src="{{ URL::asset('build/img/all-images/Logo Kabelat.svg') }}" alt="Logo">
                            </a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="/">Beranda</a></li>
                                <li><a href="#">Program Dispusip <i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="dropdown-padding">
                                        <li><a href="{{ route('programdispusip.index') }}">Semua Program</a></li>
                                        @if(isset($programs) && $programs->count() > 0)
                                          @foreach ($programs as $program)
                                        <li>
                                           <a href="{{ route('programdispusip.detail', $program->kd_program) }}">
                                           {{ $program->nm_program }}
                                           </a>
                                        </li>
                                          @endforeach
                                          @else
                                          <li><a href="#">Belum ada program tersedia</a></li>
                                           @endif
                                    </ul>
                                </li>
                                <li><a href="kegiatanKomunitas">Komunitas</a></li>
                                <li><a href="#">Informasi <i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="dropdown-padding">
                                        <li><a href="berita">Berita</a></li>
                                        <li><a href="pengumuman">Pengumuman</a></li>
                                    </ul>
                                </li>
                                <li><a href="galeriKegiatan">Galeri Kegiatan</a></li>
                                <li><a href="profile">Profil</a></li>
                                <li><a href="#">Tentang <i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="dropdown-padding">
                                        {{-- <li><a href="case">Tentang Dispusip</a></li>
                                        <li><a href="case-single">Hubungi Kami</a></li> --}}
                                        {{-- <li><a href="case-single">Hubungi Kami</a></li> --}}
                                        <li><a href="404">404</a></li>
                                        <form method="POST" action="{{ route('logout') }}" x-data>
                                            @csrf
                                            <button type="submit"
                                                class="dropdown-item d-flex align-items-center gap-2 py-2">
                                                <li>Logout</li>

                                            </button>
                                        </form>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="btn-area">
                            <div class="search-icon header__search header-search-btn">
                                <a href="#"><img src="{{ URL::asset('build/img/icons/search-icons1.svg') }}"
                                        alt=""></a>
                            </div>
                            <a href="login" class="header-btn1">Masuk <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                        <div class="header-search-form-wrapper">
                            <div class="tx-search-close tx-close"><i class="fa-solid fa-xmark"></i></div>
                            <div class="header-search-container">
                                <form role="search" class="search-form">
                                    <input type="search" class="search-field" placeholder="Search …" value=""
                                        name="s">
                                    <button type="submit" class="search-submit"><img
                                            src="{{ URL::asset('build/img/icons/search-icons1.svg') }}"
                                            alt=""></button>
                                </form>
                            </div>
                        </div>
                        <div class="body-overlay"></div>
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
                    <a href="index"><img src="{{ URL::asset('build/img/all-images/Logo Kabelat.svg') }}"
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
            <li><a href="#">Beranda </a></li>
            <li><a href="#">Program Dispusip </i></a>
                <ul class="sub-menu">
                    <li><a href="{{ route('programdispusip.index') }}">Semua Program</a></li>
                    @if(isset($programs) && $programs->count() > 0)
                      @foreach ($programs as $program)
                    <li>
                       <a href="{{ route('programdispusip.detail', $program->kd_program) }}">
                       {{ $program->nm_program }}
                       </a>
                    </li>
                      @endforeach
                      @else
                      <li><a href="#">Belum ada program tersedia</a></li>
                       @endif
                </ul>
            </li>
            <li><a href="kegiatanKomunitas">Komunitas</a></li>
            <li><a href="#">Informasi</a>
                <ul class="sub-menu">
                  <li><a href="berita">Berita</a></li>
                  <li><a href="pengumuman">Pengumuman</a></li>
                </ul>
            </li>
            <li><a href="galeriKegiatan">Galeri Kegiatan</a></li>
            <li><a href="profile">Profil</a></li>
            <li><a href="#">Tentang</a>
                <ul class="sub-menu">
                  {{-- <li><a href="case">Tentang Dispusip</a></li>
                  <li><a href="case-single">Hubungi Kami</a></li> --}}
                  {{-- <li><a href="case-single">Hubungi Kami</a></li> --}}
                </ul>
            </li>
        </ul>

        <div class="allmobilesection">
            <a href="login" class="header-btn1">Masuk <span><i
                        class="fa-solid fa-arrow-right"></i></span></a>
            <div class="single-footer">
                <h3>Contact Info</h3>
                <div class="footer1-contact-info">
                    <div class="single-footer">
                        <h3>Lokasi</h3>

                        <div class="contact-info-single">
                            <div class="contact-info-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="contact-info-text">
                                <a href="mailto:info@example.com">Perpustakaan Kabupaten Bandung Jl. Al-Fathu Pamekaran, <br> Kec. Soreang Kabupaten Bandung, Jawa Barat 40912</a>
                            </div>
                        </div>

                    </div>
                    <div class="single-footer">
                        <h3>Media Sosial</h3>

                        <div class="social-links-mobile-menu">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== MOBILE HEADER STARTS =======-->
