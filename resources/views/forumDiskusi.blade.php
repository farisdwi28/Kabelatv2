@extends('layouts.master')
@section('title', 'Forum Diskusi')

@section('content')
    <x-page-title title="Beranda" pagetitle="Forum Diskusi" maintitle="Forum Diskusi" />
    <div class="container-fluid py-5 px-4">
        <div class="row">
            <!-- Sidebar Section -->
            <aside class="col-lg-4 col-md-4 pe-0">
                @include('layouts.master2')
            </aside>

            <!-- Main Content Section -->
            <div class="col-lg-8 col-md-8" style="margin-left: -175px;">
                <!-- Search Bar -->
                <div class="container mb-4">
                    <div class="row">
                        <div class="col-lg-12 text-end">
                            <form action="{{ route('diskusi.index') }}" method="GET">
                                <input type="text" name="search" class="form-control ms-auto"
                                    placeholder="Cari topik diskusi..." value="{{ request('search') }}"
                                    style="max-width: 300px; padding: 0.5rem 1rem; border-radius: 0.375rem; border: 2px solid  #768080;">
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Discussion List Container -->
                <div class="discussion-container"
                    style="max-height: 700px; 
            overflow-y: scroll; 
            padding-right: 15px; 
            min-height: 700px; 
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: inset 0 0 5px rgba(0,0,0,0.1);">
                    @foreach ($diskusi as $d)
                        <div class="card mb-3 border-0 shadow-sm"
                            style="border-radius: 0.5rem; background-color: #eaecee; transition: all 0.2s ease;">
                            <div class="card-body p-4"
                                onmouseover="this.parentElement.style.transform='translateY(-2px)'; 
                        this.parentElement.style.boxShadow='0 0.5rem 1rem rgba(0, 0, 0, 0.15)'; 
                        this.parentElement.style.backgroundColor='#f2f4f6';"
                                onmouseout="this.parentElement.style.transform='none'; 
                       this.parentElement.style.boxShadow='0 0.125rem 0.25rem rgba(0, 0, 0, 0.075)'; 
                       this.parentElement.style.backgroundColor='#eaecee';">

                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h4 class="m-0 h5" style="color: #104041;">{{ Str::limit($d->topik_diskusi, 50) }}</h4>
                                    <span class="badge rounded-3 px-3 py-2"
                                        style="background-color: #104041; color: white;">
                                        {{ $d->komunitas->nama_komunitas }}
                                    </span>
                                </div>

                                <div class="text-secondary mb-3 small">
                                    <i class="far fa-clock me-1"></i>
                                    {{ \Carbon\Carbon::parse($d->tglpost_diskusi)->translatedFormat('d F Y H:i') }}
                                    <span class="mx-2">|</span>
                                    <i class="far fa-user me-1"></i>
                                    {{ $d->user->name }}
                                </div>

                                <p class="mb-3 text-dark">
                                    {{ Str::limit($d->isi_diskusi, 50) }}
                                </p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{ route('diskusi.detail', $d->kd_diskusi) }}"
                                        class="text-decoration-none rounded-3 px-3 py-2 small"
                                        style="background-color: #104041; color: white; transition: background-color 0.2s ease;"
                                        onmouseover="this.style.backgroundColor='#0a2626'"
                                        onmouseout="this.style.backgroundColor='#104041'">
                                        <i class="fas fa-eye me-1"></i> Lihat Detail
                                    </a>
                                    <span class="text-secondary small">
                                        <i class="far fa-comments me-1"></i>
                                        {{ $d->komentars->count() }} Komentar
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-4">
                    {{ $diskusi->links() }}
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Specific scrollbar styling for discussion container */
        .discussion-container::-webkit-scrollbar {
            width: 12px;
            height: 12px;
            display: block;
        }

        .discussion-container::-webkit-scrollbar-track {
            background: #e0e0e0;
            border-radius: 6px;
        }

        .discussion-container::-webkit-scrollbar-thumb {
            background: #104041;
            border-radius: 6px;
            border: 2px solid #e0e0e0;
            min-height: 40px;
        }

        .discussion-container::-webkit-scrollbar-thumb:hover {
            background: #0a2626;
        }

        /* Firefox */
        .discussion-container {
            scrollbar-width: auto;
            scrollbar-color: #104041 #e0e0e0;
        }
    </style>
@endsection
