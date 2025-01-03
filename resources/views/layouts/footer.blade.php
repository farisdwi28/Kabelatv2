<!--===== FOOTER AREA STARTS =======-->
<div class="footer1-section-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="footer-logo-area">
          <img src="{{ URL::asset('build/img/logo/Kabelat.png') }}" alt="">
          <img src="{{ URL::asset('build/img/logo/KabBandung.png') }}" alt="">
          <p>Jelajahi dunia berita dengan Kabelat App! Dapatkan berita terkini, baca Program Dispusip, dan tetap terhubung dengan informasi terbaru.</p>
          <ul>
            <li><a href="#"><img src="{{ URL::asset('build/img/icons/facebook.svg') }}" alt=""></a></li>
            <li><a href="#"><img src="{{ URL::asset('build/img/icons/instagram.svg') }}" alt=""></a></li>
            <li><a href="#"><img src="{{ URL::asset('build/img/icons/linkedin.svg') }}" alt=""></a></li>
            <li><a href="#"><img src="{{ URL::asset('build/img/icons/youtube.svg') }}" alt=""></a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-2 col-md-6">
        <div class="footer-logo-area1">
          <h3>Program Dispusip</h3>
          <ul>
            <li><a href="blog">Jelajah Literasi Asik</a></li>
            <li><a href="about">Berlian dan Lantera Langit</a></li>
            <li><a href="service1">Wisata Literasi dan Perpustakaan anak</a></li>
            <li><a href="case">Sang Bedas</a></li>
            <li><a href="testimonials">Besprenku</a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-2 col-md-6">
        <div class="footer-logo-area1">
          <h3>Komunitas</h3>
          <ul>
            <li><a href="blog">Bunda Literasi</a></li>
            <li><a href="about">Paguyuban Duta Baca</a></li>
            <li><a href="service1">LEKSAM Bedas</a></li>
            <li><a href="case">GPMB</a></li>
            <li><a href="testimonials">Pencinta Naskah Kuno</a></li>
            <li><a href="testimonials">Forum Penulis</a></li>
            <li><a href="testimonials">Forum Pendongeng</a></li>
            <li><a href="testimonials">TBM</a></li>
            <li><a href="testimonials">PIAP</a></li>
            <li><a href="testimonials">Yayasan Mutiara Ilahi</a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="footer-logo-area1">
          <h3>Tentang</h3>
          <ul>
            <li><a href="blog">Tentang Dispusip</a></li>
            <li><a href="about">Hubungi Kami</a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-2 col-md-6">
        <div class="footer-logo-area3">
            <h3>Galeri Kegiatan</h3>
            <div class="row mt-4">
                <div class="col-6 col-md-4 mb-4">
                    <div class="card border-0 rounded-3 shadow">
                        <img src="{{ URL::asset('build/img/all-images/contoh4.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-6 col-md-4 mb-4">
                    <div class="card border-0 rounded-3 shadow">
                        <img src="{{ URL::asset('build/img/all-images/contoh4.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-6 col-md-4 mb-4">
                  <div class="card border-0 rounded-3 shadow">
                      <img src="{{ URL::asset('build/img/all-images/contoh4.png') }}" alt="" class="img-fluid">
                  </div>
              </div>
            </div>
            {{-- <div class="col-lg-2 col-md-6">
              <div class="footer-logo-area3">
                  <h3>Galeri Kegiatan</h3>
                  <div class="row mt-4">
                      @foreach ($kegiatanDispusip as $kegiatan)
                          <div class="col-6 col-md-4 mb-4">
                              <div class="card border-0 rounded-3 shadow">
                                  <img src="{{ $kegiatan->getMainPhotoUrl() }}" 
                                       alt="{{ $kegiatan->judul_kegiatan }}" 
                                       class="img-fluid">
                              </div>
                          </div>
                      @endforeach
                  </div> --}}
            <div class="btn-area d-flex flex-column align-items-start">
              <p class="mb-2">Ikuti Instagram</p>
              <a href="https://www.instagram.com/dispusip_kab.bandung?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="header-btn1">
                  Ikuti <span><i class="fa-solid fa-arrow-right"></i></span>
              </a>
          </div>          
        </div>
      </div>
    </div>
    <div class="space80 d-lg-block d-none"></div>
    <div class="space40 d-lg-none d-block"></div>
    <div class="row">
      <div class="col-lg-12">
        <div class="copyright-area">
          <div class="pera">
            <p>ⓒ2024 Kabelat , Inc.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== FOOTER AREA ENDS =======-->