@extends('layouts.master')
@section('title', 'Tambah Laporan')

@section('content')
    {{-- <x-page-title title="Beranda" pagetitle="Laporan" maintitle="Tambah Laporan" /> --}}
    <div class="container-fluid py-5 px-4">
        {{-- Updated Page Title Section --}}
        <div class="about-header-area"
            style="background-image: url({{ URL::asset('build/img/bg/header1.jpg') }}); background-repeat: no-repeat; background-size: cover; background-position: center; margin: -24px -24px  -24px;">
            <img src="{{ URL::asset('build/img/elements/elements1.png') }}" alt="" class="elements1 aniamtion-key-1">
            <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt="" class="star2 keyframe5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <div class="about-inner-header heading9 text-center">
                            <h1>Tambah Laporan</h1>
                            <a href="index">Beranda <i class="fa-solid fa-angle-right"></i> <span>Tambah
                                    Laporan</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-4">
            <div class="row">
                <aside class="col-lg-4 col-md-4" style="padding-right: 0;">
                    @include('layouts.master2')
                </aside>

                <div class="col-lg-6 col-md-8" style="padding-left: 0; margin-left: -75px; margin-top:30px;">
                    <div class="card border-0 shadow-lg rounded-4">
                        <div class="card-header text-center py-3 bg-gradient-light text-black rounded-top">
                            <h3 class="fw-semibold mb-0">Tambah Laporan</h3>
                        </div>
                        <div class="card-body px-5 py-4">
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <form action="{{ route('laporan.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-4">
                                    <label for="judul" class="form-label">Judul</label>
                                    <input type="text" name="judul" id="judul"
                                        class="form-control @error('judul') is-invalid @enderror"
                                        value="{{ old('judul') }}" required>
                                    @error('judul')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <input type="hidden" name="tgl_dibuat" value="{{ now()->format('Y-m-d') }}">
                                <div class="mb-4">
                                    <label for="desk_lap" class="form-label">Deskripsi</label>
                                    <textarea name="desk_lap" id="desk_lap" class="form-control @error('desk_lap') is-invalid @enderror" rows="5"
                                        required>{{ old('desk_lap') }}</textarea>
                                    @error('desk_lap')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="file" class="form-label">Upload File (Maks 2MB)</label>
                                    <input type="file" name="file" id="file"
                                        class="form-control @error('file') is-invalid @enderror">
                                    @error('file')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
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
        <style>
            /* Common styles for all screens */
            .hover-shadow {
                transition: all 0.3s ease;
            }

            .hover-shadow:hover {
                transform: translateY(-2px);
                box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
            }

            /* Mobile-specific styles */
            @media (max-width: 768px) {
                .card-body {
                    padding: 1rem;
                }

                .discussion-list {
                    max-height: 500px;
                }

                .btn-sm {
                    width: 100%;
                    margin-top: 0.5rem;
                }
            }
        </style>
 
@endsection
