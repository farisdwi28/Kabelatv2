@extends('layouts.master')
@section('title', 'Forum Diskusi')

@section('content')

    <x-page-title title="Beranda" pagetitle="Forum Diskusi" maintitle="Forum Diskusi" />

    <div class="forum-discussion-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="forum-header d-flex align-items-center mb-4 shadow-sm p-3 rounded" style="background-color: #f9f9f9; border-radius: 10px;">
                        <div class="forum-logo me-3">
                            <img src="{{ URL::asset('build/img/all-images/bundaliterasi.png') }}" alt="Bunda Literasi Logo" style="height: 50px; border-radius: 50%;">
                        </div>
                        <div class="forum-title">
                            <h4 class="m-0" style="font-weight: 600;">Bunda Literasi</h4>
                            <h5 class="text-muted" style="font-size: 14px;">FORUM DISKUSI</h5>
                        </div>
                    </div>

                    <div class="admin-question p-4 mb-4" style="background-color: #f0f8ff; border-left: 5px solid #5a67d8; border-radius: 8px;">
                        <div class="d-flex justify-content-between">
                            <p class="m-0"><strong>Admin Bunda Literasi</strong></p>
                            <span class="text-muted">1 hari yang lalu</span>
                        </div>
                        <p class="mt-2">Menurut anda apa strategi yang paling efektif untuk meningkatkan minat baca anak usia dini?</p>
                    </div>

                    <h3 class="mb-3">Komentar (2)</h3>
                    <div class="comments-section mt-3">
                        <div class="comment-box p-3 border rounded mb-3 shadow-sm">
                            <div class="d-flex align-items-center">
                                <div class="comment-avatar">
                                    <img src="{{ URL::asset('build/img/all-images/comments-img1.png') }}" alt="User Avatar" class="rounded-circle" style="width: 50px;">
                                </div>
                                <div class="comment-info ms-3">
                                    <a href="#" class="name text-decoration-none" style="color: #2d3748;"><strong>Ervalsa Dwi Nanda</strong></a>
                                    <p class="date text-muted">Hari Ini</p>
                                </div>
                            </div>
                            <p class="mt-2" style="color: #4a5568;">Memberikan Pengertian terhadap anak dimulai dari usia dini.</p>
                        </div>

                        <div class="comment-box p-3 border rounded mb-3 shadow-sm">
                            <div class="d-flex align-items-center">
                                <div class="comment-avatar">
                                    <img src="{{ URL::asset('build/img/all-images/comments-img2.png') }}" alt="User Avatar" class="rounded-circle" style="width: 50px;">
                                </div>
                                <div class="comment-info ms-3">
                                    <a href="#" class="name text-decoration-none" style="color: #2d3748;"><strong>Wawan</strong></a>
                                    <p class="date text-muted">Kemarin</p>
                                </div>
                            </div>
                            <p class="mt-2" style="color: #4a5568;">Kegiatannya mantap!</p>
                        </div>

                        <div class="contact-form-area mt-4 p-4 shadow-sm" style="background-color: #f7fafc; border-radius: 8px;">
                            <h4 class="mb-3">Berikan Komentar</h4>
                            <form method="POST" action="#">
                                @csrf
                                <div class="form-group mb-3">
                                    <textarea class="form-control" placeholder="Tulis komentar Anda di sini..." rows="4" style="border-radius: 8px; padding: 12px;"></textarea>
                                </div>
                                <div class="form-group text-end">
                                    <a href="contact" class="header-btn1">Kirim <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                            <div class="single-footer">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
