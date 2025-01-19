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
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="{{ URL::asset('build/img/icons/calender1.svg') }}" alt="">
                                        {{ $berita->formatted_date }}
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
                                $commentsToShow = $comments->take(3);
                            @endphp
                        
                            @foreach ($commentsToShow as $komentar)
                                <div class="comment-box p-3 border rounded shadow-sm mb-4" style="margin-bottom: 20px; background-color: #f9f9ff;">
                                    <div class="d-flex align-items-center">
                                        <div class="comment-avatar">
                                            <img src="{{ $komentar->user->penduduk && $komentar->user->penduduk->foto_pen 
                                                    ? asset('storage/images/profiles/' . $komentar->user->penduduk->foto_pen) 
                                                    : asset('build/img/all-images/comments-img1.png') }}" 
                                                 alt="{{ $komentar->user->name ?? 'User' }}" 
                                                 class="rounded-circle" 
                                                 style="width: 50px; height: 50px; object-fit: cover;">
                                        </div>
                                        <div class="comment-info ms-3">
                                            <h6 class="mb-0">
                                                <strong>{{ $komentar->user->name ?? 'User' }}</strong>
                                            </h6>
                                            <small class="text-muted" title="{{ \Carbon\Carbon::parse($komentar->created_at)->translatedFormat('l, d F Y - H:i') }}">
                                                {{ \Carbon\Carbon::parse($komentar->created_at)->diffForHumans() }}
                                            </small>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0">{{ $komentar->isi_kom_info }}</p>
                                </div>
                            @endforeach
                        
                            @foreach ($comments->skip(3) as $komentar)
                                <div class="comment-box p-3 border rounded shadow-sm mb-4" style="margin-bottom: 20px; background-color: #f9f9ff; display: none;">
                                    <div class="d-flex align-items-center">
                                        <div class="comment-avatar">
                                            <img src="{{ $komentar->user->penduduk && $komentar->user->penduduk->foto_pen 
                                                    ? asset('storage/images/profiles/' . $komentar->user->penduduk->foto_pen) 
                                                    : asset('build/img/all-images/comments-img1.png') }}" 
                                                 alt="{{ $komentar->user->name ?? 'User' }}" 
                                                 class="rounded-circle" 
                                                 style="width: 50px; height: 50px; object-fit: cover;">
                                        </div>
                                        <div class="comment-info ms-3">
                                            <h6 class="mb-0">
                                                <strong>{{ $komentar->user->name ?? 'User' }}</strong>
                                            </h6>
                                            <small class="text-muted" title="{{ \Carbon\Carbon::parse($komentar->created_at)->translatedFormat('l, d F Y - H:i') }}">
                                                {{ \Carbon\Carbon::parse($komentar->created_at)->diffForHumans() }}
                                            </small>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0">{{ $komentar->isi_kom_info }}</p>
                                </div>
                            @endforeach
                        
                            @if ($berita->komentar->count() > 3)
                                <div class="text-center">
                                    <a href="javascript:void(0);" onclick="showAllComments()" class="header-btn1">Lihat Semua Komentar</a>
                                </div>
                            @endif
                        </div>
                        
                        <div class="space50"></div>
                        <div class="contact-form-area">
                            <h4 class="mb-4">Berikan Komentar</h4> <!-- Added margin bottom -->
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

    <div class="blog1-scetion-area sp2 bg2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="blog-hedaer-area heading2 text-center">
                        <h2>Berita Lainnya</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($relatedNews as $related)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-author-boxarea">
                            <div class="img1" style="position: relative; overflow: hidden; border-radius: 8px;">
                                <a href="{{ route('berita.show', $related->kd_info) }}">
                                    @if ($related->foto_berita)
                                        <img src="{{ $related->foto_berita }}" alt="{{ $related->judul_berita }}"
                                            style="width: 100%; height: auto; object-fit: cover; transition: transform 0.3s ease;">
                                    @else
                                        <img src="{{ URL::asset('build/img/all-images/default-news.png') }}" alt="Default"
                                            style="width: 100%; height: auto; object-fit: cover; transition: transform 0.3s ease;">
                                    @endif
                                </a>
                            </div>
                            <div class="content-area">
                                <h5 class="post-title mt-3"><a href="{{ route('berita.show', $related->kd_info) }}">
                                        {{ Str::limit($related->judul_berita, 50) }}
                                    </a></h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the buttons
            const likeButton = document.getElementById('like-button');
            const viewButton = document.getElementById('view-button');

            // Add data attributes to buttons
            if (likeButton) {
                likeButton.setAttribute('data-article-id', '{{ $berita->kd_info }}');
            }
            if (viewButton) {
                viewButton.setAttribute('data-article-id', '{{ $berita->kd_info }}');
            }

            // Check if user has already liked
            const articleId = likeButton.getAttribute('data-article-id');
            const hasLiked = localStorage.getItem(`liked_${articleId}`);

            if (hasLiked) {
                likeButton.classList.add('active');
            }

            // Increment views on page load (once per session)
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

            // Check if already liked
            if (localStorage.getItem(`liked_${articleId}`)) {
                return;
            }

            // Disable button temporarily
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
                        // Update like count
                        const likeCount = document.getElementById('like-count');
                        likeCount.textContent = parseInt(likeCount.textContent) + 1;

                        // Mark as liked
                        localStorage.setItem(`liked_${articleId}`, 'true');
                        likeButton.classList.add('active');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                })
                .finally(() => {
                    // Re-enable button after 1 second
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


        function showAllComments() {
            // Show all comments if the user clicks "Lihat Semua"
            document.querySelectorAll('.comment-box').forEach((comment) => {
                comment.style.display = 'block';
            });
            document.querySelector('.btn-link').textContent =
                'Sembunyikan Komentar'; // Change button text to "Hide Comments"
            document.querySelector('.btn-link').setAttribute('onclick',
                'hideComments()'); // Set the button's onclick to hide comments
        }

        function hideComments() {
            // Hide all comments except the first 3
            document.querySelectorAll('.comment-box').forEach((comment, index) => {
                if (index >= 3) {
                    comment.style.display = 'none';
                }
            });
            document.querySelector('.btn-link').textContent =
                'Lihat Semua Komentar'; // Change button text to "Show All Comments"
            document.querySelector('.btn-link').setAttribute('onclick',
                'showAllComments()'); // Set the button's onclick to show all comments
        }

        document.addEventListener("DOMContentLoaded", () => {
            // Initial load - Hide comments beyond the first 3
            document.querySelectorAll('.comment-box').forEach((comment, index) => {
                if (index >= 3) {
                    comment.style.display = 'none';
                }
            });
        });


        document.addEventListener("DOMContentLoaded", () => incrementViews());
    </script>
@endsection
