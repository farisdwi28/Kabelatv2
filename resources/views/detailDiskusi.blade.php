@extends('layouts.master')

@section('title', 'Detail Diskusi') 
@section('content')

<div class="container-fluid py-5 px-4">
    {{-- Header section remains unchanged --}}
    <div class="about-header-area" style="background-image: url({{ URL::asset('build/img/bg/header1.jpg') }}); background-repeat: no-repeat; background-size: cover; background-position: center; margin: -24px -24px  -24px;">
        <img src="{{ URL::asset('build/img/elements/elements1.png') }}" alt="" class="elements1 aniamtion-key-1">
        <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt="" class="star2 keyframe5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="about-inner-header heading9 text-center">
                        <h1>Detail Diskusi</h1>
                        <a href="index">Beranda</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="forum-discussion-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                {{-- Forum header remains unchanged --}}
                <div class="forum-header d-flex align-items-center mb-4 shadow-sm p-3 rounded" style="background-color: #f9f9f9;">
                    <div class="forum-logo me-3">
                        <img src="{{ optional($diskusi->komunitas)->logo }}" 
                             alt="{{ optional($diskusi->komunitas)->nm_komunitas }}" 
                             style="height: 50px; width: 50px; object-fit: cover;">
                    </div>
                    <div class="forum-title">
                        <h4 class="m-0" style="font-weight: 600;">{{ optional($diskusi->komunitas)->nm_komunitas }}</h4>
                        <h5 class="text-muted" style="font-size: 14px;">FORUM DISKUSI</h5>
                    </div>
                </div>
                
                {{-- Discussion content remains unchanged --}}
                <div class="admin-question p-4 mb-4" style="background-color: #f0f8ff;">
                    <h5 class="m-0"><strong>{{ $diskusi->topik_diskusi }}</strong></h5>
                    <p class="mt-2">{{ $diskusi->isi_diskusi }}</p>
                    <small class="text-muted" title="{{ \Carbon\Carbon::parse($diskusi->tglpost_diskusi)->translatedFormat('l, d F Y - H:i') }}">
                        {{ \Carbon\Carbon::parse($diskusi->tglpost_diskusi)->diffForHumans() }}
                    </small>
                </div>

                <h3 class="mb-3">Komentar ({{ count($diskusi->komentars) }})</h3>
                <div class="comments-section mt-3">
                    @php
                        $totalComments = count($diskusi->komentars);
                        $visibleComments = $diskusi->komentars->take(5);
                        $hiddenComments = $diskusi->komentars->slice(5);
                    @endphp

                    {{-- Display first 5 comments --}}
                    @foreach ($visibleComments as $komentar)
                    <div class="comment-box p-3 border rounded mb-3 shadow-sm">
                        <div class="d-flex align-items-center">
                            <div class="comment-avatar">
                                <img src="{{ $komentar->user->penduduk && $komentar->user->penduduk->foto_pen 
                                        ? asset('storage/images/profiles/' . $komentar->user->penduduk->foto_pen) 
                                        : asset('build/img/all-images/comments-img1.png') }}" 
                                     alt="{{ $komentar->user->name }}" 
                                     class="rounded-circle" 
                                     style="width: 50px; height: 50px; object-fit: cover;">
                            </div>
                            <div class="comment-info ms-3">
                                <h6 class="mb-0"><strong>{{ $komentar->user->name }}</strong></h6>
                                <small class="text-muted" title="{{ \Carbon\Carbon::parse($komentar->tglpost_kom_diskusi)->translatedFormat('l, d F Y - H:i') }}">
                                    {{ \Carbon\Carbon::parse($komentar->tglpost_kom_diskusi)->diffForHumans() }}
                                </small>
                            </div>
                        </div>
                        <p class="mt-3 mb-0">{{ $komentar->isi_kom_diskusi }}</p>
                    </div>
                    @endforeach

                    {{-- Hidden comments section --}}
                    @if($totalComments > 5)
                    <div id="hiddenComments" style="display: none;">
                        @foreach ($hiddenComments as $komentar)
                        <div class="comment-box p-3 border rounded mb-3 shadow-sm">
                            <div class="d-flex align-items-center">
                                <div class="comment-avatar">
                                    <img src="{{ $komentar->user->penduduk && $komentar->user->penduduk->foto_pen 
                                            ? asset('storage/images/profiles/' . $komentar->user->penduduk->foto_pen) 
                                            : asset('build/img/all-images/comments-img1.png') }}" 
                                         alt="{{ $komentar->user->name }}" 
                                         class="rounded-circle" 
                                         style="width: 50px; height: 50px; object-fit: cover;">
                                </div>
                                <div class="comment-info ms-3">
                                    <h6 class="mb-0"><strong>{{ $komentar->user->name }}</strong></h6>
                                    <small class="text-muted" title="{{ \Carbon\Carbon::parse($komentar->tglpost_kom_diskusi)->translatedFormat('l, d F Y - H:i') }}">
                                        {{ \Carbon\Carbon::parse($komentar->tglpost_kom_diskusi)->diffForHumans() }}
                                    </small>
                                </div>
                            </div>
                            <p class="mt-3 mb-0">{{ $komentar->isi_kom_diskusi }}</p>
                        </div>
                        @endforeach
                    </div>

                    {{-- Show/Hide button --}}
                    <div class="text-center mb-4">
                        <button id="toggleComments" 
                                class="btn btn-outline-primary rounded-pill px-4 py-2 shadow-sm" 
                                onclick="toggleComments()">
                            <span id="buttonText">Tampilkan Komentar Lainnya</span>
                        </button>
                    </div>                                
                    @endif
                </div>

                {{-- Comment form remains unchanged --}}
                @auth
                <div class="contact-form-area mt-4 p-4 shadow-sm" style="background-color: #f7fafc;">
                    <h4 class="mb-3">Berikan Komentar</h4>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ url('/forumdiskusi/'.$diskusi->kd_diskusi.'/komentar') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <textarea class="form-control @error('isi_kom_diskusi') is-invalid @enderror" 
                                    placeholder="Tulis komentar Anda..." 
                                    rows="4" 
                                    name="isi_kom_diskusi">{{ old('isi_kom_diskusi') }}</textarea>
                            @error('isi_kom_diskusi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
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
                </div>
                @else
                <div class="alert alert-info mt-4">
                    <p class="mb-0">Silakan <a href="{{ route('login') }}">login</a> untuk memberikan komentar.</p>
                </div>
                @endauth
            </div>
        </div>
    </div>
</div>

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
</script>
@endsection