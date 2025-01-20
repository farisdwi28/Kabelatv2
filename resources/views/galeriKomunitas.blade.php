@extends('layouts.master')
@section('title', 'Komunitas')

@section('content')
<x-page-title title="Beranda" pagetitle="Galeri" maintitle="Komunitas" />
<div class="container-fluid py-5">
    <div class="row">
        <!-- Sidebar Section -->
        <aside class="col-lg-4 col-md-5 mb-4">
            @include('layouts.master2')
        </aside>

        <!-- Main Content Section -->
        <section class="col-lg-8 col-md-7" style="margin-left: -150px;">
            <!-- Search Bar -->
            <div class="container mb-4">
                <div class="row">
                    <div class="col-lg-12 text-end">
                        <form action="{{ route('komunitas.show') }}" method="GET">
                            <input type="text" name="search" class="form-control ms-auto"
                                placeholder="Cari komunitas..." value="{{ request('search') }}"
                                style="max-width: 300px; padding: 0.5rem 1rem; border-radius: 0.375rem; border: 2px solid  #768080;">
                        </form>
                    </div>
                </div>
            </div>

            <!-- Scrollable Community List Container -->
            <div class="community-container"
                 style="max-height: 850px; 
                        overflow-y: scroll; 
                        padding-right: 15px; 
                        min-height: 700px; 
                        background-color: #ffffff;
                        border-radius: 8px;
                        box-shadow: inset 0 0 5px rgba(0,0,0,0.1);">
                <div class="row">
                    @forelse($komunitasList as $item)
                    <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-start">
                        <div class="card border-0 shadow-sm h-100" 
                             style="width: 100%; 
                                    margin-left: 0px; 
                                    border-radius: 0.5rem; 
                                    background-color: #eaecee; 
                                    transition: all 0.2s ease;"
                             onmouseover="this.style.transform='translateY(-2px)'; 
                                          this.style.boxShadow='0 0.5rem 1rem rgba(0, 0, 0, 0.15)'; 
                                          this.style.backgroundColor='#f2f4f6';"
                             onmouseout="this.style.transform='none'; 
                                         this.style.boxShadow='0 0.125rem 0.25rem rgba(0, 0, 0, 0.075)'; 
                                         this.style.backgroundColor='#eaecee';">
                            
                            <!-- Link to community details -->
                            <a href="{{ route('komunitas.detail', $item->kd_komunitas) }}" class="stretched-link"></a>
                            
                            <div class="img1 image-anime overflow-hidden position-relative">
                                <img src="{{ $item->logo }}"
                                    class="card-img-top" 
                                    style="object-fit: contain; height: 200px; width: 100%; mix-blend-mode: multiply;" 
                                    alt="{{ $item->nm_komunitas }}">
                            </div>
                            
                            <div class="card-body p-4 text-center">
                                <h5 class="card-title fw-bold mb-3" 
                                    style="font-size: 1.25rem; 
                                           line-height: 1.4; 
                                           color: #104041;">
                                    {{ $item->nm_komunitas }}
                                </h5>
                                <p class="card-text mb-3" 
                                   style="font-size: 1rem; 
                                          line-height: 1.6; 
                                          color: #6c757d;">
                                    {{ Str::limit($item->desk_komunitas, 100) }}
                                </p>
                            </div>
                    
                            <div class="card-footer bg-transparent border-0 text-center p-4">
                                <a href="{{ route('komunitas.detail', $item->kd_komunitas) }}" 
                                   class="text-decoration-none rounded-3 px-3 py-2"
                                   style="background-color: #104041; 
                                          color: white; 
                                          transition: background-color 0.2s ease;"
                                   onmouseover="this.style.backgroundColor='#0a2626'"
                                   onmouseout="this.style.backgroundColor='#104041'">
                                    <i class="fas fa-eye me-1"></i> Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p class="col-12 text-center">Tidak ada komunitas yang ditemukan.</p>
                    @endforelse
                </div>
            </div>
        </section>
    </div>
</div>

<style>
    /* Specific scrollbar styling for community container */
    .community-container::-webkit-scrollbar {
        width: 12px;
        height: 12px;
        display: block;
    }

    .community-container::-webkit-scrollbar-track {
        background: #e0e0e0;
        border-radius: 6px;
    }

    .community-container::-webkit-scrollbar-thumb {
        background: #104041;
        border-radius: 6px;
        border: 2px solid #e0e0e0;
        min-height: 40px;
    }

    .community-container::-webkit-scrollbar-thumb:hover {
        background: #0a2626;
    }

    /* Firefox */
    .community-container {
        scrollbar-width: auto;
        scrollbar-color: #104041 #e0e0e0;
    }
</style>

@endsection