@extends('layouts.master')
@section('title', 'Indeks Berita')

@section('content')
    <x-page-title title="Beranda" pagetitle="Indeks Berita" maintitle="Baca Berita" />

    <!--===== NEWS AREA STARTS =======-->
    <div class="blog1-section-area sp1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="blog-header-area heading2 text-center">
                        <h5>Indeks Berita</h5>
                    </div>
                </div>
            </div>

            <!-- Search Bar -->
            <div class="container mb-5"> <!-- Changed from mb-4 to mb-5 for more space -->
                <div class="row">
                    <div class="col-lg-12 text-end">
                        <form action="{{ route('berita.index') }}" method="GET" id="search-form">
                            <input type="text" name="search" id="search-input" class="form-control ms-auto"
                                placeholder="Cari berita..." value="{{ request('search') }}"
                                style="max-width: 300px; padding: 0.5rem 1rem; border-radius: 0.375rem; border: 2px solid  #768080;">
                        </form>
                    </div>
                </div>
            </div>

            <!-- News Content -->
            <div id="news-container">
                <div class="row">
                    <!-- Featured News Column (Left) -->
                    <div class="col-lg-7">
                        @foreach ($featuredNews as $index => $berita)
                            @if ($index % 3 == 0)
                                <div class="blog-author-boxarea mb-4" data-aos="zoom-in" data-aos-duration="1000">
                                    <div class="img1 position-relative"
                                        style="height: 400px; border-radius: 8px; overflow: hidden;">
                                        <img src="{{ $berita->foto_berita ?? URL::asset('build/img/all-images/default-news.png') }}"
                                            alt="{{ Str::limit($berita->judul_berita, 100) }}"
                                            style="width: 100%; height: 100%; object-fit: cover;">
                                        <div class="overlay-gradient"></div>
                                        <div class="content-area position-absolute bottom-0 start-0 p-4 text-white">
                                            <h5 class="mb-2">
                                                {{ \Carbon\Carbon::parse($berita->tanggal_dibuat)->format('d M Y') }}</h5>
                                            <h3 class="mb-3">
                                                <a href="{{ route('berita.show', $berita->kd_info) }}"
                                                    class="text-white text-anime-style-3">
                                                    {{ $berita->judul_berita }}
                                                </a>
                                            </h3>
                                            <a href="{{ route('berita.show', $berita->kd_info) }}" class="header-btn1">
                                                Lihat Selengkapnya <i class="fa-solid fa-arrow-right ms-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>

                    <!-- Recent News Column (Right) -->
                    <div class="col-lg-5">
                        <div class="recent-news-list">
                            @foreach ($featuredNews as $index => $berita)
                                @if ($index % 3 != 0)
                                    <div class="blog-author-boxarea mb-4" data-aos="zoom-out" data-aos-duration="1000"
                                        style="background: linear-gradient(145deg, #f8f9fa, #e9ecef); border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
                                        <div class="content-area p-4">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <h6 class="text-muted">
                                                    {{ \Carbon\Carbon::parse($berita->tanggal_dibuat)->format('d M Y') }}
                                                </h6>
                                                <a href="{{ route('berita.show', $berita->kd_info) }}" class="arrow-link">
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </a>
                                            </div>
                                            <h4 class="mb-3">
                                                <a href="{{ route('berita.show', $berita->kd_info) }}" class="text-dark">
                                                    {{ $berita->judul_berita }}
                                                </a>
                                            </h4>
                                            <p class="text-muted">{{ Str::limit($berita->isi_berita, 150) }}</p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- After the news-container div -->
   <!--===== NEWS AREA ENDS =======-->
<div class="col-lg-12">
    <div class="pagination-area">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center" style="gap: 0.5rem;">
                {{-- Previous Page --}}
                @if ($featuredNews->currentPage() == 1)
                    <li class="page-item">
                        <a class="page-link" href="#" style="border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border: none; transition: all 0.3s ease; background-color: #f8f9fa;">
                            <i class="fa-solid fa-angle-left"></i>
                        </a>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $featuredNews->url($featuredNews->currentPage() - 1) }}" 
                           style="border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border: none; transition: all 0.3s ease; background-color: #f8f9fa; color: #0d6efd;">
                            <i class="fa-solid fa-angle-left"></i>
                        </a>
                    </li>
                @endif

                {{-- Page Numbers --}}
                @for ($i = 1; $i <= $featuredNews->lastPage(); $i++)
                    <li class="page-item">
                        <a class="page-link" href="{{ $featuredNews->url($i) }}" 
                           style="border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border: none; transition: all 0.3s ease; 
                           background-color: {{ $featuredNews->currentPage() == $i ? '#0d6efd' : '#f8f9fa' }}; 
                           color: {{ $featuredNews->currentPage() == $i ? '#ffffff' : '#0d6efd' }};">
                            {{ $i }}
                        </a>
                    </li>
                @endfor

                {{-- Next Page --}}
                @if ($featuredNews->currentPage() == $featuredNews->lastPage())
                    <li class="page-item">
                        <a class="page-link" href="#" style="border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border: none; transition: all 0.3s ease; background-color: #f8f9fa;">
                            <i class="fa-solid fa-angle-right"></i>
                        </a>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $featuredNews->url($featuredNews->currentPage() + 1) }}" 
                           style="border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border: none; transition: all 0.3s ease; background-color: #f8f9fa; color: #0d6efd;">
                            <i class="fa-solid fa-angle-right"></i>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
</div>
    <!--===== NEWS AREA ENDS =======-->
@endsection

@section('scripts')
    <script>
 // Debounce function to limit how often the search is performed
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

document.getElementById('search-box').addEventListener('input', debounce(function() {
    let query = this.value.trim();
    let newsContainer = document.getElementById('news-container');

    // Only perform search if query is at least 2 characters
    if (query.length < 2) {
        return; // Don't search for very short queries
    }

    // Show loading state with styled spinner
    newsContainer.innerHTML = `
        <div class="col-12" style="text-align: center; padding: 3rem 0;">
            <i class="fas fa-spinner fa-spin" style="font-size: 2rem; color: #6c757d;"></i>
            <p style="margin-top: 1rem; color: #495057;">Sedang mencari berita...</p>
        </div>`;

    // Perform the search
    fetch(`/berita/search?search=${encodeURIComponent(query)}`)
        .then(response => response.json())
        . if (!data.berita || data.berita.length === 0) {
                    newsContainer.innerHTML = `
                        <div style="padding: 3rem; text-align: center; background: #f7fafc; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                            <i class="fas fa-search" style="font-size: 3rem; color: #718096; margin-bottom: 1.5rem;"></i>
                            <h3 style="color: #2d3748; font-size: 1.5rem; margin-bottom: 1rem;">Berita Tidak Ditemukan</h3>
                            <p style="color: #4a5568;">Maaf, tidak ada berita yang sesuai dengan pencarian "${query}"</p>
                        </div>`;
                    return;
                }     
                // Left Column - Featured News
                html += '<div class="col-lg-7">';
                data.berita.forEach((berita, index) => {
                    if (index % 3 === 0) {
                        html += `
                            <div class="blog-author-boxarea mb-4" data-aos="zoom-in" data-aos-duration="1000">
                                <div class="img1 position-relative" style="height: 400px; border-radius: 8px; overflow: hidden;">
                                    <img src="${berita.foto_berita || '/build/img/all-images/default-news.png'}" 
                                         alt="${berita.judul_berita}" 
                                         style="width: 100%; height: 100%; object-fit: cover;">
                                    <div class="overlay-gradient"></div>
                                    <div class="content-area position-absolute bottom-0 start-0 p-4 text-white">
                                        <h5 class="mb-2">${formatDate(berita.tanggal_dibuat)}</h5>
                                        <h3 class="mb-3">
                                            <a href="/berita/${berita.kd_info}" class="text-white text-anime-style-3">
                                                ${berita.judul_berita}
                                            </a>
                                        </h3>
                                        <a href="/berita/${berita.kd_info}" class="header-btn1">
                                            Lihat Selengkapnya <i class="fa-solid fa-arrow-right ms-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        `;
                    }
                });
                html += '</div>';

                // Right Column - Recent News
                html += '<div class="col-lg-5"><div class="recent-news-list">';
                data.berita.forEach((berita, index) => {
                    if (index % 3 !== 0) {
                        html += `
                            <div class="blog-author-boxarea mb-4" data-aos="zoom-out" data-aos-duration="1000"
                                 style="background: linear-gradient(145deg, #f8f9fa, #e9ecef); border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
                                <div class="content-area p-4">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h6 class="text-muted">${formatDate(berita.tanggal_dibuat)}</h6>
                                        <a href="/berita/${berita.kd_info}" class="arrow-link">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <h4 class="mb-3">
                                        <a href="/berita/${berita.kd_info}" class="text-dark">
                                            ${berita.judul_berita}
                                        </a>
                                    </h4>
                                    <p class="text-muted">${berita.isi_berita ? berita.isi_berita.substring(0, 150) + '...' : ''}</p>
                                </div>
                            </div>
                        `;
                    }
                });
                html += '</div></div></div>';

                // Add styled pagination
                html += `
                    <div style="margin: 3rem 0;">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center" style="gap: 0.5rem;">
                                <li class="page-item">
                                    <a class="page-link" href="#" style="border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border: none; transition: all 0.3s ease; background-color: #f8f9fa;">
                                        <i class="fa-solid fa-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#" style="border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border: none; transition: all 0.3s ease; background-color: #0d6efd; color: white;">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#" style="border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border: none; transition: all 0.3s ease; background-color: #f8f9fa;">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#" style="border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border: none; transition: all 0.3s ease; background-color: #f8f9fa;">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>`;

                newsContainer.innerHTML = html;

                // Reinitialize AOS
                if (typeof AOS !== 'undefined') {
                    AOS.refresh();
                }
            } else {
                // Enhanced "Not Found" message with icon and styling
                newsContainer.innerHTML = `
                    <div style="padding: 3rem 2rem; text-align: center; background: #f8f9fa; border-radius: 1rem; box-shadow: 0 4px 6px rgba(0,0,0,0.05); margin: 2rem 0;">
                        <i class="fas fa-search" style="font-size: 4rem; color: #6c757d; margin-bottom: 1rem;"></i>
                        <h3 style="font-size: 1.25rem; color: #495057; margin-bottom: 0.5rem;">Berita Tidak Ditemukan</h3>
                        <p style="color: #6c757d; font-size: 1rem;">Maaf, tidak ada hasil yang cocok dengan pencarian Anda</p>
                    </div>`;
            }
        })
        .catch(error => {
            console.error('Error:', error);
            newsContainer.innerHTML = `
                <div style="padding: 3rem 2rem; text-align: center; background: #f8f9fa; border-radius: 1rem; box-shadow: 0 4px 6px rgba(0,0,0,0.05); margin: 2rem 0;">
                    <i class="fas fa-exclamation-triangle" style="font-size: 4rem; color: #dc3545; margin-bottom: 1rem;"></i>
                    <h3 style="font-size: 1.25rem; color: #495057; margin-bottom: 0.5rem;">Terjadi Kesalahan</h3>
                    <p style="color: #6c757d; font-size: 1rem;">Mohon maaf, terjadi kesalahan saat mencari berita. Silakan coba lagi.</p>
                </div>`;
        });
}, 500)); // Wait 500ms after the user stops typing before searching

function formatDate(dateString) {
    if (!dateString) return '';
    const date = new Date(dateString);
    const monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des'];
    return `${date.getDate()} ${monthNames[date.getMonth()]} ${date.getFullYear()}`;
}
    </script>
@endsection
