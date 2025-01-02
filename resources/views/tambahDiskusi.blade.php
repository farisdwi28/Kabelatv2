@extends('layouts.master2')
@section('title', 'Tambah Diskusi')
@include('layouts.sidebar')
<x-page-title title="Beranda" pagetitle="Diskusi" maintitle="Tambah Diskusi" />

@section('content')
<div class="container py-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-lg rounded-4" style="margin-left: -150px;">
                <div class="card-header text-center py-3 bg-gradient-primary text-black rounded-top position-relative">
                    <h3 class="fw-semibold mb-0">Tambah Diskusi</h3>
                </div>
                <div class="card-body px-5 py-4">
                    <form method="POST" action="{{ route('diskusi.store') }}">
                        @csrf
                        <!-- Form Fields -->
                        <div class="mb-4">
                            <label for="judul" class="form-label">Judul Diskusi</label>
                            <input type="text" name="judul" id="judul" class="form-control" placeholder="Masukkan judul diskusi" required>
                        </div>
                        <div class="mb-4">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5" placeholder="Tuliskan deskripsi diskusi" required></textarea>
                        </div>
                        {{-- <div class="mb-4">
                            <label for="komunitas" class="form-label">Komunitas</label>
                            <select name="komunitas_id" id="komunitas" class="form-control" required>
                                @foreach($komunitas as $k)
                                    <option value="{{ $k->id }}">{{ $k->nm_komunitas }}</option>
                                @endforeach
                            </select>
                        </div> --}}
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
