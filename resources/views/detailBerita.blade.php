@extends('layouts.master')
@section('title', $berita->judul_berita)

@section('content')
    <x-page-title title="Beranda" pagetitle="Berita" maintitle="Detail Berita" />

    <div class="blog-auhtor-section-area sp1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="blog-auhtor-sidebar-area heading2">

                        <div class="tags-area">
                            <ul class="list-unstyled d-flex flex-column">
                                <li class="mb-2">
                                    <a href="#" class="d-flex align-items-center">
                                        <img src="{{ URL::asset('build/img/icons/calender1.svg') }}" alt=""
                                            class="me-2">
                                        {{ $berita->formatted_date }}
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex align-items-center">
                                        <img src="{{ URL::asset('build/img/icons/contact1.svg') }}" alt=""
                                            class="me-2">
                                        {{ $berita->author }}
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <h2>{{ $berita->judul_berita }}</h2>
                        <div class="space34"></div>
                        <div class="img1">
                            @if ($berita->foto_berita)
                                <img src="{{ $berita->foto_berita }}" alt="{{ $berita->judul_berita }}">
                            @else
                                <img src="{{ URL::asset('build/img/all-images/default-news.png') }}" alt="Default">
                            @endif
                        </div>
                        <div class="space24"></div>
                        <p class="text-black" style="font-size: 20px;">
                            {!! nl2br(e($berita->isi_berita)) !!}
                        </p>
                        <div class="social-tags">
                            <div class="tags">
                                <h4>Statistics:</h4>
                                <ul>
                                    <li>
                                        <a href="#" id="like-button" onclick="incrementLikes(event)">
                                            <i class="fa-solid fa-thumbs-up"></i>
                                            <span id="like-count">{{ $berita->likes }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" id="view-button">
                                            <i class="fa-solid fa-eye"></i>
                                            <span id="view-count">{{ $berita->views }}</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <div class="space50"></div>
                        <h3>Komentar ({{ $berita->komentar->count() }})</h3>
                        <div class="space32"></div>

                        <div class="comments-container mt-3">
                            @php
                                $comments = $berita->komentar;
                                $visibleComments = $comments->take(5);
                                $hiddenComments = $comments->slice(5);
                                $totalComments = $comments->count();
                            @endphp

                            @foreach ($visibleComments as $komentar)
                                <div class="comment-box p-3 border rounded shadow-sm mb-4"
                                    style="margin-bottom: 20px; background-color: #f9f9ff;">
                                    <div class="d-flex align-items-center">
                                        <div class="comment-avatar">
                                            <img src="{{ $komentar->user->penduduk && $komentar->user->penduduk->foto_pen
                                                ? asset('storage/images/profiles/' . $komentar->user->penduduk->foto_pen)
                                                : asset('build/img/all-images/comments-img1.png') }}"
                                                alt="{{ $komentar->user->name ?? 'User' }}" class="rounded-circle"
                                                style="width: 50px; height: 50px; object-fit: cover;">
                                        </div>
                                        <div class="comment-info ms-3">
                                            <h6 class="mb-0">
                                                <strong>{{ $komentar->user->name ?? 'User' }}</strong>
                                            </h6>
                                            <small class="text-muted"
                                                title="{{ \Carbon\Carbon::parse($komentar->created_at)->translatedFormat('l, d F Y - H:i') }}">
                                                {{ \Carbon\Carbon::parse($komentar->created_at)->diffForHumans() }}
                                            </small>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0">{{ $komentar->isi_kom_info }}</p>
                                </div>
                            @endforeach

                            <!-- Hidden comments section -->
                            <div id="hiddenComments" style="display: none;">
                                @foreach ($hiddenComments as $komentar)
                                    <div class="comment-box p-3 border rounded shadow-sm mb-4"
                                        style="margin-bottom: 20px; background-color: #f9f9ff;">
                                        <div class="d-flex align-items-center">
                                            <div class="comment-avatar">
                                                <img src="{{ $komentar->user->penduduk && $komentar->user->penduduk->foto_pen
                                                    ? asset('storage/images/profiles/' . $komentar->user->penduduk->foto_pen)
                                                    : asset('build/img/all-images/comments-img1.png') }}"
                                                    alt="{{ $komentar->user->name ?? 'User' }}" class="rounded-circle"
                                                    style="width: 50px; height: 50px; object-fit: cover;">
                                            </div>
                                            <div class="comment-info ms-3">
                                                <h6 class="mb-0">
                                                    <strong>{{ $komentar->user->name ?? 'User' }}</strong>
                                                </h6>
                                                <small class="text-muted"
                                                    title="{{ \Carbon\Carbon::parse($komentar->created_at)->translatedFormat('l, d F Y - H:i') }}">
                                                    {{ \Carbon\Carbon::parse($komentar->created_at)->diffForHumans() }}
                                                </small>
                                            </div>
                                        </div>
                                        <p class="mt-3 mb-0">{{ $komentar->isi_kom_info }}</p>
                                    </div>
                                @endforeach
                            </div>

                            @if($totalComments > 5)
                            <div class="text-center mb-4">
                                <button id="toggleComments" 
                                        class="btn btn-outline-primary rounded-pill px-4 py-2 shadow-sm" 
                                        onclick="toggleComments()">
                                    <span id="buttonText">Tampilkan Komentar Lainnya</span>
                                </button>
                            </div>   
                            @endif
                        </div>

                        <div class="space50"></div>
                        <div class="contact-form-area">
                            <h4 class="mb-4">Berikan Komentar</h4>
                            @auth
                                <form id="comment-form" method="POST"
                                    action="{{ route('berita.komentar', $berita->kd_info) }}">
                                    @csrf
                                    <div class="col-lg-12">
                                        <div class="input-area">
                                            <textarea name="isi_kom_info" placeholder="Tulis komentar Anda di sini..." required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="space24"></div>
                                        <div class="input-area">
                                            <button type="submit" class="header-btn1">
                                                Kirim <span><i class="fa-solid fa-arrow-right"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            @else
                                <div class="alert alert-info text-center"
                                    style="font-size: 18px; padding: 20px; border-radius: 8px; background-color: #f9f9ff; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                    <strong>Silakan <a href="{{ route('login') }}"
                                            class="font-bold text-blue-600">login</a></strong> untuk memberikan komentar.
                                </div>
                            @endauth
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Rest of your existing code for related news section -->

@endsection

@section('scripts')
<style>
    #toggleComments {
        border-width: 2px;
        color: #0a0a0b; /* Warna teks default */
        background-color: transparent; /* Latar belakang transparan */
        transition: all 0.3s ease;
        border-color: #6c757d;
        
    }

    #toggleComments:hover {
        background-color: #6c757d; /* Hover background color abu-abu */
        color: white; /* Warna teks tetap putih saat hover */

    }
</style>
    <script>
        function toggleComments() {
            const hiddenComments = document.getElementById('hiddenComments');
            const toggleButton = document.getElementById('toggleComments');
            
            if (hiddenComments.style.display === 'none') {
                hiddenComments.style.display = 'block';
                toggleButton.textContent = 'Sembunyikan Komentar';
            } else {
                hiddenComments.style.display = 'none';
                toggleButton.textContent = 'Tampilkan Komentar Lainnya';
            }
        }

        // Your existing scripts
        document.addEventListener('DOMContentLoaded', function() {
            const likeButton = document.getElementById('like-button');
            const viewButton = document.getElementById('view-button');

            if (likeButton) {
                likeButton.setAttribute('data-article-id', '{{ $berita->kd_info }}');
            }
            if (viewButton) {
                viewButton.setAttribute('data-article-id', '{{ $berita->kd_info }}');
            }

            const articleId = likeButton.getAttribute('data-article-id');
            const hasLiked = localStorage.getItem(`liked_${articleId}`);

            if (hasLiked) {
                likeButton.classList.add('active');
            }

            const hasViewed = sessionStorage.getItem(`viewed_${articleId}`);
            if (!hasViewed) {
                incrementViews();
                sessionStorage.setItem(`viewed_${articleId}`, 'true');
            }
        });

        function incrementLikes(event) {
            event.preventDefault();

            const likeButton = document.getElementById('like-button');
            const articleId = likeButton.getAttribute('data-article-id');

            if (localStorage.getItem(`liked_${articleId}`)) {
                return;
            }

            likeButton.style.pointerEvents = 'none';

            fetch(`/berita/${articleId}/like`, {
                    method: "POST",
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        const likeCount = document.getElementById('like-count');
                        likeCount.textContent = parseInt(likeCount.textContent) + 1;
                        localStorage.setItem(`liked_${articleId}`, 'true');
                        likeButton.classList.add('active');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                })
                .finally(() => {
                    setTimeout(() => {
                        likeButton.style.pointerEvents = 'auto';
                    }, 1000);
                });
        }

        function incrementViews() {
            const viewButton = document.getElementById('view-button');
            const articleId = viewButton.getAttribute('data-article-id');

            fetch(`/berita/${articleId}/view`, {
                    method: "POST",
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const viewCount = document.getElementById('view-count');
                        viewCount.textContent = parseInt(viewCount.textContent) + 1;
                    }
                })
                .catch(error => console.error('Error:', error));
        }

        document.addEventListener("DOMContentLoaded", () => incrementViews());
    </script>
@endsection