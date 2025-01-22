
@extends('layouts.master')
@section('title', 'Forum Diskusi')

@section('content')
<x-page-title title="Beranda" pagetitle="Forum Diskusi" maintitle="Forum Diskusi" />
    <!-- Alert Container -->
    @if(session('success') || session('error'))
        <div style="position: fixed; top: 20px; right: 20px; z-index: 9999; min-width: 300px; max-width: 400px;">
            @if(session('success'))
                <div style="background: linear-gradient(135deg, #064e3b, #34d399); 
                            color: white; 
                            padding: 20px; 
                            border-radius: 10px; 
                            box-shadow: 0 5px 15px rgba(0,0,0,0.15); 
                            margin-bottom: 10px; 
                            display: flex; 
                            align-items: center; 
                            justify-content: space-between;
                            animation: slideIn 0.5s forwards;">
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <i class="fas fa-check-circle" style="font-size: 24px;"></i>
                        <p style="margin: 0; font-size: 0.95rem; line-height: 1.4;">{{ session('success') }}</p>
                    </div>
                    <button onclick="this.parentElement.remove()" 
                            style="background: transparent; 
                                   border: none; 
                                   color: white; 
                                   font-size: 20px; 
                                   cursor: pointer; 
                                   opacity: 0.8; 
                                   padding: 0; 
                                   margin-left: 15px;">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            @endif

            @if(session('error'))
                <div style="background: linear-gradient(135deg, #dc3545, #f86d7d); 
                            color: white; 
                            padding: 20px; 
                            border-radius: 10px; 
                            box-shadow: 0 5px 15px rgba(0,0,0,0.15); 
                            margin-bottom: 10px; 
                            border-left: 5px solid #bd2130; 
                            display: flex; 
                            align-items: center; 
                            justify-content: space-between;
                            animation: slideIn 0.5s forwards;">
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <i class="fas fa-exclamation-circle" style="font-size: 24px;"></i>
                        <p style="margin: 0; font-size: 0.95rem; line-height: 1.4;">{{ session('error') }}</p>
                    </div>
                    <button onclick="this.parentElement.remove()" 
                            style="background: transparent; 
                                   border: none; 
                                   color: white; 
                                   font-size: 20px; 
                                   cursor: pointer; 
                                   opacity: 0.8; 
                                   padding: 0; 
                                   margin-left: 15px;">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            @endif
        </div>

        <!-- Inline Keyframe Animation -->
        <style>
            @keyframes slideIn {
                from {
                    transform: translateX(120%);
                    opacity: 0;
                }
                to {
                    transform: translateX(0);
                    opacity: 1;
                }
            }
        </style>

        <!-- Auto-remove alerts after 5 seconds -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const alerts = document.querySelectorAll('[style*="animation: slideIn"]');
                alerts.forEach(alert => {
                    setTimeout(() => {
                        alert.style.animation = 'slideOut 0.9s forwards';
                        setTimeout(() => {
                            alert.remove();
                        }, 500);
                    }, 5000);
                });
            });
        </script>
    @endif

<div class="container-fluid py-5 px-4">
    <div class="row">
        <!-- Sidebar -->
        <aside class="col-lg-4 col-md-5 pe-0">
            @include('layouts.master2')
        </aside>

        <!-- Main Content -->
        <div class="col-lg-8 col-md-7" style="margin-left: -175px;">
            <!-- Search Bar -->
            <div class="container mb-4">
                <div class="row">
                    <div class="col-lg-12 text-end">
                        <form action="{{ route('diskusi.index') }}" method="GET">
                            <input type="text" name="search" class="form-control ms-auto"
                                placeholder="Cari topik diskusi..." value="{{ request('search') }}"
                                style="max-width: 300px; 
                                      padding: 0.5rem 1rem; 
                                      border-radius: 0.375rem; 
                                      border: 2px solid #768080;">
                        </form>
                    </div>
                </div>
            </div>

            <!-- Discussion List -->
            <div class="discussion-container"
                style="max-height: 850px; overflow-y: scroll; min-height: 700px; background-color: #ffffff; border-radius: 8px; box-shadow: inset 0 0 5px rgba(0,0,0,0.1);">
                @foreach ($diskusi as $d)
                <div class="card mb-3 border-0 shadow-sm"
                    style="border-radius: 0.5rem; background-color: #eaecee; transition: all 0.2s ease;">
                    <div class="card-body p-4"
                        onmouseover="this.parentElement.style.transform='translateY(-2px)'; this.parentElement.style.boxShadow='0 0.5rem 1rem rgba(0, 0, 0, 0.15)'; this.parentElement.style.backgroundColor='#f2f4f6';"
                        onmouseout="this.parentElement.style.transform='none'; this.parentElement.style.boxShadow='0 0.125rem 0.25rem rgba(0, 0, 0, 0.075)'; this.parentElement.style.backgroundColor='#eaecee';">
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
/* Responsiveness */
@media (max-width: 768px) {
    aside {
        margin-bottom: 20px;
    }

    .col-lg-8 {
        margin-left: 0 !important;
    }

    .discussion-container {
        padding-right: 10px;
        max-height: 600px;
    }

    .form-control {
        max-width: 100% !important;
    }
}

/* Scrollbar Customization */
.discussion-container::-webkit-scrollbar {
    width: 10px;
}

.discussion-container::-webkit-scrollbar-thumb {
    background: #104041;
    border-radius: 5px;
}

.discussion-container::-webkit-scrollbar-thumb:hover {
    background: #0a2626;
}
</style>
@endsection
