<!-- footer.blade.php -->
<div class="footer1-section-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="footer-logo-area">
          <img src="{{ URL::asset('build/img/logo/Kabelat.png') }}" alt="">
          <img src="{{ URL::asset('build/img/logo/KabBandung.png') }}" alt="">
          <p>Jelajahi dunia berita dengan Kabelat App! Dapatkan berita terkini, baca Program Dispusip, dan tetap terhubung dengan informasi terbaru.</p>
          <ul>
            <li><a href="https://www.facebook.com/perpuskabbdg" target="_blank">
              <img src="{{ URL::asset('build/img/icons/facebook.svg') }}" alt=""></a></li>
            <li><a href="https://www.instagram.com/dispusip_kab.bandung" target="_blank">
              <img src="{{ URL::asset('build/img/icons/instagram.svg') }}" alt=""></a></li>
            {{-- <li><a href="https://www.linkedin.com/company/dinas-perpustakaan-dan-arsip-kabupaten-bandung" target="_blank">
              <img src="{{ URL::asset('build/img/icons/linkedin.svg') }}" alt=""></a></li> --}}
              <li><a href="https://www.youtube.com/@dispusipchannel408" target="_blank">
              <img src="{{ URL::asset('build/img/icons/youtube.svg') }}" alt=""></a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-2 col-md-6">
        <div class="footer-logo-area1">
          <h3>Program Dispusip</h3>
          <ul>
            @foreach($programs as $program)
              <li><a href="{{ route('programdispusip.detail', $program->kd_program) }}">{{ $program->nm_program }}</a></li>
            @endforeach
          </ul>
        </div>
      </div>

      <div class="col-lg-2 col-md-6">
        <div class="footer-logo-area1">
          <h3>Komunitas</h3>
          <ul>
            @foreach($komunitasList as $komunitas)
              <li><a href="{{ route('komunitas.detail', $komunitas->kd_komunitas) }}">{{ $komunitas->nm_komunitas }}</a></li>
            @endforeach
          </ul>
        </div>
      </div>

      <!-- Rest of the footer remains the same -->
      <div class="col-lg-3 col-md-6">
        <div class="footer-logo-area1">
          <h3>Tentang</h3>
          <ul>
            <li><a href="blog">Tentang Dispusip</a></li>
            {{-- <li><a href="about">Hubungi Kami</a></li> --}}
          </ul>
        </div>
      </div>

      <div class="col-lg-2 col-md-6">
        <div class="footer-logo-area3">
          <div class="btn-area d-flex flex-column align-items-start">
            <p class="mb-2">Ikuti Instagram</p>
            <a href="https://www.instagram.com/dispusip_kab.bandung" class="header-btn1">
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