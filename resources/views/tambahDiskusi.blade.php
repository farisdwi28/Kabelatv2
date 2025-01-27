@extends('layouts.master')
@section('title', 'Tambah Diskusi')

@section('content')
    <x-page-title title="Beranda" maintitle="Tambah Diskusi" />
    <div class="container-fluid py-4">
        <div class="row">
            {{-- Sidebar --}}
            <aside class="col-lg-4 col-md-4 mb-4">
                @include('layouts.master2')
            </aside>

            {{-- Main Content --}}
            <div class="col-lg-5 col-md-10 offset-lg-0 offset-md-1 py-3">
                <div class="card border-0 shadow-lg rounded-4">
                    <div class="card-header text-center py-3 text-black rounded-top" style="background-color: #7ca1b5;">
                        <h3 class="fw-semibold mb-0">Tambah Diskusi</h3>
                    </div>
                    <div class="card-body px-5 py-4">
                        <form method="POST" action="{{ route('diskusi.store') }}">
                            @csrf
                            <div class="mb-4">
                                <label for="judul" class="form-label">Judul Diskusi</label>
                                <input type="text" name="judul" id="judul" class="form-control"
                                    placeholder="Masukkan judul diskusi" required>
                            </div>
                            <div class="mb-4">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5" placeholder="Tuliskan deskripsi diskusi"
                                    required></textarea>
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
    <style>
        /* Common styles for all screens */
        .hover-shadow {
            transition: all 0.3s ease;
        }

        .hover-shadow:hover {
            transform: translateY(-2px);
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
        }
    </style>
@endsection
