@extends('layouts.master2')
@section('title', 'Tambah Laporan')
@include('layouts.sidebar')
<x-page-title title="Beranda" pagetitle="Laporan" maintitle="Tambah Laporan" />
<div class="container py-5">
    <h3>Tambah Laporan</h3>
    <form action="{{ route('laporans.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Judul Laporan</label>
            <input type="text" name="judul" id="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tgl_dibuat" class="form-label">Tanggal Laporan</label>
            <input type="date" name="tgl_dibuat" id="tgl_dibuat" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="desk_lap" class="form-label">Deskripsi Laporan</label>
            <textarea name="desk_lap" id="desk_lap" class="form-control" rows="4" required></textarea>
        </div>
        <div class="mb-3">
            <label for="file" class="form-label">File (optional)</label>
            <input type="file" name="file" id="file" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
