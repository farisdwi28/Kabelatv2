@extends('layouts.master2')
@section('title', 'Tambah Diskusi')
@include('layouts.sidebar')
<x-page-title title="Beranda" pagetitle="Tambah Diskusi" maintitle="Tambah Diskusi" />

@section('content')
<div class="container flex items-center justify-center min-h-screen">
    <div class="card w-full max-w-lg border-0 shadow-md">
        <div class="card-header text-center py-3 bg-gradient-primary text-black rounded-top position-relative">
            <h4 class="fw-semibold py-4">Tambah Diskusi Baru</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('diskusi.store') }}">
                @csrf
                
                <div class="mb-3">
                    <label for="judul" class="form-label font-semibold">Judul Diskusi</label>
                    <input type="text" class="form-control border border-gray-300 rounded-md p-2" id="judul" name="judul" placeholder="Masukkan judul diskusi" required>
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label font-semibold">Deskripsi</label>
                    <textarea class="form-control border border-gray-300 rounded-md p-2" id="deskripsi" name="deskripsi" rows="5" placeholder="Tuliskan deskripsi diskusi" required></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="header-btn1 px-4 py-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600">Simpan Diskusi</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
