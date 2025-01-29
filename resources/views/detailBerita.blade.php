@extends('layouts.master')
@section('title', $berita->judul_berita)

@section('content')
    <x-page-title title="Beranda" maintitle="Detail Berita" />

    <!-- Alert Container -->
    @if (session('success') || session('error'))
        <div style="position: fixed; top: 20px; right: 20px; z-index: 9999; min-width: 300px; max-width: 400px;">
            @if (session('success'))
                <div
                    style="background: linear-gradient(135deg, #064e3b, #149f6c); 
                            color: white; 
                            padding: 20px; 
                            border-radius: 10px; 
                            box-shadow: 0 5px 15px rgba(0,0,0,0.15); 
                            margin-bottom: 10px; 
                            display: flex; 
                            align-items: center; 
                            justify-content: space-between;
                            animation: slideIn 0.5s forwards;">
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <i class="fas fa-check-circle" style="font-size: 24px;"></i>
                        <p style="margin: 0; font-size: 0.95rem; line-height: 1.4;">{{ session('success') }}</p>
                    </div>
                    <button onclick="this.parentElement.remove()"
                        style="background: transparent; 
                                   border: none; 
                                   color: white; 
                                   font-size: 20px; 
                                   cursor: pointer; 
                                   opacity: 0.8; 
                                   padding: 0; 
                                   margin-left: 15px;">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            @endif

            @if (session('error'))
                <div
                    style="background: linear-gradient(135deg, #dc3545, #f86d7d); 
                            color: white; 
                            padding: 20px; 
                            border-radius: 10px; 
                            box-shadow: 0 5px 15px rgba(0,0,0,0.15); 
                            margin-bottom: 10px; 
                            border-left: 5px solid #bd2130; 
                            display: flex; 
                            align-items: center; 
                            justify-content: space-between;
                            animation: slideIn 0.5s forwards;">
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <i class="fas fa-exclamation-circle" style="font-size: 24px;"></i>
                        <p style="margin: 0; font-size: 0.95rem; line-height: 1.4;">{{ session('error') }}</p>
                    </div>
                    <button onclick="this.parentElement.remove()"
                        style="background: transparent; 
                                   border: none; 
                                   color: white; 
                                   font-size: 20px; 
                                   cursor: pointer; 
                                   opacity: 0.8; 
                                   padding: 0; 
                                   margin-left: 15px;">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            @endif
        </div>

        <!-- Inline Keyframe Animation -->
        <style>
            @keyframes slideIn {
                from {
                    transform: translateX(120%);
                    opacity: 0;
                }

                to {
                    transform: translateX(0);
                    opacity: 1;
                }
            }
        </style>

        <!-- Auto-remove alerts after 5 seconds -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const alerts = document.querySelectorAll('[style*="animation: slideIn"]');
                alerts.forEach(alert => {
                    setTimeout(() => {
                        alert.style.animation = 'slideOut 0.9s forwards';
                        setTimeout(() => {
                            alert.remove();
                        }, 500);
                    }, 5000);
                });
            });
        </script>
    @endif

    <!--===== DETAIL BERITA AREA STARTS =======-->
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
                                <h4>Statistik:</h4>
                                <ul>
                                    <li>
                                        @auth
                                            <a href="#" id="like-button" onclick="toggleLike(event)" class="like-btn">
                                                <i class="fa-solid fa-thumbs-up" id="like-icon"></i>
                                                <span id="like-count">{{ $berita->likes }}</span>
                                            </a>
                                        @else
                                            <a href="#" id="like-button" onclick="showLoginAlert()">
                                                <i class="fa-solid fa-thumbs-up"></i>
                                                <span id="like-count">{{ $berita->likes }}</span>
                                            </a>
                                        @endauth
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

                            @if ($totalComments > 5)
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
@endsection

@section('scripts')
    <style>
        #toggleComments {
            border-width: 2px;
            color: #0a0a0b;
            background-color: transparent;
            transition: all 0.3s ease;
            border-color: #6c757d;
        }

        #toggleComments:hover {
            background-color: #6c757d;
            color: white;
        }

        @keyframes slideIn {
            from {
                transform: translateX(120%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideOut {
            from {
                transform: translateX(0);
                opacity: 1;
            }

            to {
                transform: translateX(120%);
                opacity: 0;
            }
        }
    </style>
    <script>
        function showAlert(message, type = 'error') {
            // Get or create the container
            let containerDiv = document.querySelector('.alert-container');
            if (!containerDiv) {
                containerDiv = document.createElement('div');
                containerDiv.classList.add('alert-container');
                containerDiv.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
            min-width: 300px;
            max-width: 400px;
            pointer-events: none; // Allow clicking through the container
        `;
                document.body.appendChild(containerDiv);
            }

            // Create alert element
            const alertDiv = document.createElement('div');
            const isSuccess = type === 'success';
            const bgColor = isSuccess ? 'linear-gradient(135deg, #28a745, #20c997)' :
                'linear-gradient(135deg, #dc3545, #f86d7d)';
            const borderColor = isSuccess ? '#1e7e34' : '#bd2130';
            const icon = isSuccess ? 'fa-check-circle' : 'fa-exclamation-circle';

            alertDiv.style.cssText = `
        background: ${bgColor};
        color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.15);
        margin-bottom: 10px;
        border-left: 5px solid ${borderColor};
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: absolute;
        top: 0;
        right: 0;
        width: 100%;
        pointer-events: auto; // Re-enable pointer events for the alert
        opacity: 0;
        transform: translateX(120%);
    `;

            // Create alert content
            alertDiv.innerHTML = `
        <div style="display: flex; align-items: center; gap: 15px;">
            <i class="fas ${icon}" style="font-size: 24px;"></i>
            <p style="margin: 0; font-size: 0.95rem; line-height: 1.4;">${message}</p>
        </div>
        <button onclick="this.parentElement.remove()" 
                style="background: transparent; 
                       border: none;
                       color: white;
                       font-size: 20px;
                       cursor: pointer;
                       opacity: 0.8;
                       padding: 0;
                       margin-left: 15px;">
            <i class="fas fa-times"></i>
        </button>
    `;

            // Add to container
            containerDiv.appendChild(alertDiv);

            // Trigger animation
            requestAnimationFrame(() => {
                alertDiv.style.transition = 'all 0.5s ease-in-out';
                alertDiv.style.transform = 'translateX(0)';
                alertDiv.style.opacity = '1';
            });

            // Auto remove after 5 seconds
            setTimeout(() => {
                alertDiv.style.transform = 'translateX(120%)';
                alertDiv.style.opacity = '0';
                setTimeout(() => {
                    alertDiv.remove();
                    if (containerDiv.children.length === 0) {
                        containerDiv.remove();
                    }
                }, 500);
            }, 5000);
        }


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

            const articleId = '{{ $berita->kd_info }}';
            const userId = '{{ Auth::id() }}';
            const likeKey = `user_${userId}_likes_berita_${articleId}`;

            // Check if user has liked the article
            if (sessionStorage.getItem(likeKey)) {
                const likeIcon = document.querySelector('#like-icon');
                if (likeIcon) {
                    likeIcon.style.color = '#0d6efd'; // or your preferred "liked" color
                }
            }

            const hasViewed = sessionStorage.getItem(`viewed_${articleId}`);
            if (!hasViewed) {
                incrementViews();
                sessionStorage.setItem(`viewed_${articleId}`, 'true');
            }
        });

        function showAlert(message, type = 'error') {
            // Create container if it doesn't exist
            let containerDiv = document.querySelector('.alert-container');
            if (!containerDiv) {
                containerDiv = document.createElement('div');
                containerDiv.classList.add('alert-container');
                containerDiv.style.cssText =
                    'position: fixed; top: 20px; right: 20px; z-index: 9999; min-width: 300px; max-width: 400px;';
                document.body.appendChild(containerDiv);
            }

            // Create alert element
            const alertDiv = document.createElement('div');
            let bgColor, borderColor, icon;
            switch (type) {
                case 'success':
                    bgColor = 'linear-gradient(135deg,  #064e3b, #149f6c)';
                    icon = 'fa-check-circle';
                    break;
                case 'unlike':
                    bgColor = 'linear-gradient(135deg, #7b1f1f, #e63946)'; 
                    icon = 'fa-times-circle';
                    break;
                default: // error
                    bgColor = 'linear-gradient(135deg, #dc3545, #f86d7d)';
                    borderColor = '#bd2130';
                    icon = 'fa-exclamation-circle';
            }
            alertDiv.style.cssText = `
        background: ${bgColor};
        color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.15);
        margin-bottom: 10px;
        border-left: 5px solid ${borderColor};
        display: flex;
        align-items: center;
        justify-content: space-between;
        animation: slideIn 0.5s forwards;
    `;

            // Create alert content
            alertDiv.innerHTML = `
        <div style="display: flex; align-items: center; gap: 15px;">
            <i class="fas ${icon}" style="font-size: 24px;"></i>
            <p style="margin: 0; font-size: 0.95rem; line-height: 1.4;">${message}</p>
        </div>
        <button onclick="this.parentElement.remove()" 
                style="background: transparent; 
                       border: none;
                       color: white;
                       font-size: 20px;
                       cursor: pointer;
                       opacity: 0.8;
                       padding: 0;
                       margin-left: 15px;">
            <i class="fas fa-times"></i>
        </button>
    `;

            // Add to container
            containerDiv.appendChild(alertDiv);

            // Auto remove after 5 seconds
            setTimeout(() => {
                alertDiv.style.animation = 'slideOut 0.9s forwards';
                setTimeout(() => {
                    alertDiv.remove();
                }, 500);
            }, 5000);
        }

        function toggleLike(event) {
            event.preventDefault();

            const likeButton = document.getElementById('like-button');
            const articleId = likeButton.getAttribute('data-article-id');
            const userId = '{{ Auth::id() }}';
            const likeKey = `user_${userId}_likes_berita_${articleId}`;

            if (!userId) {
                showAlert('Silakan login terlebih dahulu untuk menyukai berita ini', 'error');
                return;
            }

            likeButton.style.pointerEvents = 'none';

            if (!sessionStorage.getItem(likeKey)) {
                incrementLikes(event);
            } else {
                decrementLikes(event);
            }
        }

        function incrementLikes(event) {
            event.preventDefault();

            const likeButton = document.getElementById('like-button');
            const articleId = likeButton.getAttribute('data-article-id');
            const userId = '{{ Auth::id() }}';
            const likeKey = `user_${userId}_likes_berita_${articleId}`;

            fetch(`/berita/${articleId}/like`, {
                    method: "POST",
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                })
                .then(response => {
                    if (!response.ok) {
                        if (response.status === 401) {
                            throw new Error('Silakan login untuk menyukai berita ini');
                        }
                        throw new Error('Terjadi kesalahan pada jaringan');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        const likeCount = document.getElementById('like-count');
                        const likeIcon = document.querySelector('#like-icon');
                        likeCount.textContent = data.likes;
                        likeIcon.style.color = '#0d6efd';
                        sessionStorage.setItem(likeKey, 'true');
                        showAlert('Anda berhasil menyukai berita', 'success');
                    } else {
                        showAlert(data.message || 'Gagal menyukai berita', 'error');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    showAlert(error.message || 'Gagal menyukai berita', 'error');
                })
                .finally(() => {
                    setTimeout(() => {
                        likeButton.style.pointerEvents = 'auto';
                    }, 1000);
                });
        }

        function decrementLikes(event) {
            event.preventDefault();

            const likeButton = document.getElementById('like-button');
            const articleId = likeButton.getAttribute('data-article-id');
            const userId = '{{ Auth::id() }}';
            const likeKey = `user_${userId}_likes_berita_${articleId}`;

            fetch(`/berita/${articleId}/unlike`, {
                    method: "POST",
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                })
                .then(response => {
                    if (!response.ok) {
                        if (response.status === 401) {
                            throw new Error('Silakan login untuk unlike berita ini');
                        }
                        throw new Error('Terjadi kesalahan pada jaringan');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        const likeCount = document.getElementById('like-count');
                        const likeIcon = document.querySelector('#like-icon');
                        likeCount.textContent = data.likes;
                        likeIcon.style.color = ''; // Reset to default color
                        sessionStorage.removeItem(likeKey);
                        showAlert('Anda batal menyukai berita', 'unlike');
                    } else {
                        showAlert(data.message || 'Gagal unlike berita', 'error');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    showAlert(error.message || 'Gagal unlike berita', 'error');
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
