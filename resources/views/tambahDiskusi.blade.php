@extends('layouts.master')
@section('title', 'Tambah Diskusi')

@section('content')
<x-page-title title="Beranda" pagetitle="Diskusi" maintitle="Tambah Diskusi" />
<div class="container-fluid py-4">
    <div class="row">
        {{-- Sidebar --}}
        <aside class="col-lg-4 col-md-4 mb-4" style="padding-right: 0;">
            @include('layouts.master2')
        </aside>

        {{-- Main Content --}}
        <div class="col-lg-5 col-md-10"  style="padding-left: 0; margin-left: -75px;">
            <div class="card border-0 shadow-lg rounded-4">
                <div class="card-header text-center py-3 bg-gradient-primary text-black rounded-top">
                    <h3 class="fw-semibold mb-0">Tambah Diskusi</h3>
                </div>
                <div class="card-body px-5 py-4">
                    <form method="POST" action="{{ route('diskusi.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="judul" class="form-label">Judul Diskusi</label>
                            <input type="text" name="judul" id="judul" class="form-control" placeholder="Masukkan judul diskusi" required>
                        </div>
                        <div class="mb-4">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5" placeholder="Tuliskan deskripsi diskusi" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="header-btn1">Simpan Diskusi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
