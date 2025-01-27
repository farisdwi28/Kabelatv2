    @extends('layouts.master')
    @section('title', 'Tambah Laporan')

    @section('content')
    <div class="container-fluid py-5 px-4">
        <div class="about-header-area" style="background-image: url({{ URL::asset('build/img/bg/header1.jpg') }}); background-repeat: no-repeat; background-size: cover; background-position: center; margin: -24px -24px -24px;">
            <img src="{{ URL::asset('build/img/elements/elements1.png') }}" alt="" class="elements1 aniamtion-key-1">
            <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt="" class="star2 keyframe5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <div class="about-inner-header heading9">
                            <h1>Tambah Laporan</h1>
                            <a href="/">Beranda</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-4">
            <div class="row">
                {{-- Sidebar --}}
                <aside class="col-lg-4 col-md-4 pe-0">
                    @include('layouts.master2')
                </aside>

                {{-- Main Content --}}
                <div class="col-lg-6 col-md-8" style="margin-left: -75px; margin-top:30px;">
                    <div class="card border-0 shadow-lg rounded-4 hover-shadow">
                        <div class="card-header text-center py-3 text-black rounded-top" style="background-color: #7ca1b5;">
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
                                        value="{{ old('judul') }}" placeholder="Masukkan judul laporan" required>
                                    @error('judul')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <input type="hidden" name="tgl_dibuat" value="{{ now()->format('Y-m-d') }}">
                                <div class="mb-4">
                                    <label for="desk_lap" class="form-label">Deskripsi</label>
                                    <textarea name="desk_lap" id="desk_lap" 
                                        class="form-control @error('desk_lap') is-invalid @enderror" 
                                        rows="5" placeholder="Tuliskan deskripsi laporan" required>{{ old('desk_lap') }}</textarea>
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
    </div>

    <style>
    /* Common styles */
    .hover-shadow {
        transition: all 0.3s ease;
    }

    .hover-shadow:hover {
        transform: translateY(-2px);
        box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
    }

    /* Responsiveness */
    @media (max-width: 991px) {
        .about-header-area {
            margin: -1rem -1rem 1rem -1rem;
            padding: 2rem 1rem;
        }
        .elements1, .star2 {
            display: none;
        }

        .about-header-area h1 {
            font-size: 1.75rem !important;
        }

        aside {
            margin-bottom: 2rem;
            padding-right: 1rem !important;
        }

        .col-lg-6 {
            margin-left: 0 !important;
            padding: 0 1rem !important;
            width: 100%;
        }

        .card {
            width: 100%;
            margin: 0 auto;
        }

        .card-body {
            padding: 1.5rem !important;
        }
    }

    @media (max-width: 768px) {
        .container-fluid {
            padding: 1rem !important;
        }

        .card-header h3 {
            font-size: 1.25rem !important;
        }

        .about-inner-header h1 {
            font-size: 1.5rem !important;
        }

        .elements1, .star2 {
            display: none;
        }
    }
    </style>
    @endsection