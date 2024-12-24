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
                        <img src="{{ URL::asset('build/img/all-images/bundaliterasi.png') }}" alt="Bunda Literasi Logo" style="height: 50px;">
                    </div>
                    <div class="forum-title">
                        <h4 class="m-0" style="font-weight: 600;">Bunda Literasi</h4>
                        <h5 class="text-muted" style="font-size: 14px;">FORUM DISKUSI</h5>
                    </div>
                </div>

                <div class="admin-question p-4 mb-4" style="background-color: #f0f8ff;">
                    <h5 class="m-0"><strong>{{ $diskusi->topik_diskusi }}</strong></h5>
                    <p class="mt-2">{{ $diskusi->isi_diskusi }}</p>
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
                                <a href="#" class="name text-decoration-none"><strong>{{ $komentar->user }}</strong></a>
                                <p class="date text-muted">{{ $komentar->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                        <p class="mt-2">{{ $komentar->isi_kom_diskusi }}</p>
                    </div>
                    @endforeach
                </div>

                <div class="contact-form-area mt-4 p-4 shadow-sm" style="background-color: #f7fafc;">
                    <h4 class="mb-3">Berikan Komentar</h4>
                    <form method="POST" action="{{ url('/forumdiskusi/'.$diskusi->kd_diskusi.'/komentar') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <textarea class="form-control" placeholder="Tulis komentar Anda..." rows="4" name="isi_kom_diskusi"></textarea>
                        </div>
                        <div class="form-group text-end">
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
