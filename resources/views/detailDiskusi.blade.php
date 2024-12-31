@extends('layouts.master')

@section('title', 'Detail Diskusi')
@include('layouts.sidebar')
@section('content')

<x-page-title title="Beranda" pagetitle="Detail Diskusi" maintitle="Detail Diskusi" />

<div class="forum-discussion-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="forum-header d-flex align-items-center mb-4 shadow-sm p-3 rounded" style="background-color: #f9f9f9;">
                    <div class="forum-logo me-3">
                        <img src="{{ $diskusi->komunitas->logo }}" alt="{{ $diskusi->komunitas->nm_komunitas }}" style="height: 50px;">
                    </div>
                    <div class="forum-title">
                        <h4 class="m-0" style="font-weight: 600;">{{ $diskusi->komunitas->nm_komunitas }}</h4>
                        <h5 class="text-muted" style="font-size: 14px;">FORUM DISKUSI</h5>
                    </div>
                </div>
                <div class="admin-question p-4 mb-4" style="background-color: #f0f8ff;">
                    <h5 class="m-0"><strong>{{ $diskusi->topik_diskusi }}</strong></h5>
                    <p class="mt-2">{{ $diskusi->isi_diskusi }}</p>
                    <small class="text-muted">Posted: {{ \Carbon\Carbon::parse($diskusi->tglpost_diskusi)->format('d M Y H:i') }}</small>
                </div>

                <h3 class="mb-3">Komentar ({{ count($diskusi->komentars) }})</h3>
                <div class="comments-section mt-3">
                    @foreach ($diskusi->komentars as $komentar)
                    <div class="comment-box p-3 border rounded mb-3 shadow-sm">
                        <div class="d-flex align-items-center">
                            <div class="comment-avatar">
                                <img src="{{ URL::asset('build/img/all-images/comments-img1.png') }}" alt="User Avatar" class="rounded-circle" style="width: 50px;">
                            </div>
                            <div class="comment-info ms-3">
                                <h6 class="mb-0"><strong>{{ $komentar->user->name }}</strong></h6>
                                <small class="text-muted">{{ \Carbon\Carbon::parse($komentar->tglpost_kom_diskusi)->format('d M Y H:i') }}</small>
                            </div>
                        </div>
                        <p class="mt-3 mb-0">{{ $komentar->isi_kom_diskusi }}</p>
                    </div>
                    @endforeach
                </div>

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
                        <div class="form-group text-end">
                            <button type="submit" class="btn btn-primary">Kirim Komentar</button>
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