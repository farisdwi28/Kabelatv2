@extends('layouts.master2')
@section('title', 'FAQS')
@include('layouts.sidebar')
<x-page-title title="Beranda" pagetitle="Forum Diskusi" maintitle="Forum Diskusi" />

@section('content')

<!-- Forum Diskusi Section -->
<div class="forum-discussion-area mt-5">
    <div class="container">
        <div class="discussion-list">
            <div class="discussion-item mb-4 p-4 border rounded">
                <h4 class="text-2xl font-bold">Membaca Buku Anak-Anak</h4>
                <p class="text-muted">Diposting oleh Sani Kurnia | 1 November 2024</p>
                <p class="mt-3">Apakah Anda memiliki rekomendasi buku untuk anak-anak yang dapat meningkatkan minat baca mereka? Diskusikan buku-buku terbaik dan manfaatnya untuk perkembangan anak!</p>
                
                <div class="col-lg-12 text-center mt-3">
                    <div class="input-area d-flex justify-content-start mb-4">
                       <a href="detailDiskusi"> <button type="submit" class="header-btn1 me-2">Lihat Diskusi <span><i class="fa-solid fa-arrow-right"></i></span></button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
x