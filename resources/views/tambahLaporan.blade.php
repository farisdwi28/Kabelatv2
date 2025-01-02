@extends('layouts.master2')
@section('title', 'Tambah Laporan')
@include('layouts.sidebar')
<x-page-title title="Beranda" pagetitle="Laporan" maintitle="Tambah Laporan" />

@section('content')
<div class="container py-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-lg rounded-4" style="margin-left: -150px;">
                <div class="card-header text-center py-3 bg-gradient-primary text-black rounded-top position-relative">
                    <h3 class="fw-semibold mb-0">Tambah Laporan</h3>
                </div>
                <div class="card-body px-5 py-4">
                    <form action="{{ route('laporan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" name="judul" id="judul" class="form-control" required>
                        </div>
                        <div class="mb-4">
                            <label for="tgl_dibuat" class="form-label">Tanggal Dibuat</label>
                            <input type="date" name="tgl_dibuat" id="tgl_dibuat" class="form-control" required>
                        </div>
                        <div class="mb-4">
                            <label for="desk_lap" class="form-label">Deskripsi</label>
                            <textarea name="desk_lap" id="desk_lap" class="form-control" rows="5" required></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="file" class="form-label">Upload File  (Maks 2MB)</label>
                            <input type="file" name="file" id="file" class="form-control">
                        </div>
                        <div class="text-center">
                        <button type="submit" class="header-btn1">Simpan Laporan</button>
                    </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
