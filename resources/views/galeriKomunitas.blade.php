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
            <div style="max-height: 700px; 
                        overflow-y: scroll; 
                        padding-right: 15px; 
                        min-height: 700px; 
                        background-color: #ffffff;
                        border-radius: 8px;
                        box-shadow: inset 0 0 5px rgba(0,0,0,0.1);
                        scrollbar-width: auto;
                        scrollbar-color: #104041 #e0e0e0;">
                <div class="row">
                    @forelse($komunitasList as $item)
                    <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-start">
                        
                        <div class="card shadow-lg border-0 rounded-3 overflow-hidden h-100" style="width: 100%; margin-left: 0px;">
                            <!-- Link to community details -->
                            <a href="{{ route('komunitas.detail', $item->kd_komunitas) }}" class="stretched-link"></a>
                            
                            <div class="img1 image-anime overflow-hidden position-relative">
                                <img src="{{ $item->logo }}"
                                    class="card-img-top" 
                                    style="object-fit: contain; height: 200px; width: 100%; border-bottom: 1px solid #ddd;" 
                                    alt="{{ $item->nm_komunitas }}">
                            </div>
                            
                            <div class="card-body p-4 text-center">
                                <h5 class="card-title fw-bold text-dark mb-3" style="font-size: 1.25rem; line-height: 1.4;">{{ $item->nm_komunitas }}</h5>
                                <p class="card-text text-muted mb-3" style="font-size: 1rem; line-height: 1.6;">{{ Str::limit($item->desk_komunitas, 100) }}</p>
                            </div>

                            <div class="card-footer bg-transparent border-0 text-center">
                                <a href="{{ route('komunitas.detail', $item->kd_komunitas) }}" class="btn header-btn1 w-100">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p class="col-12 text-center">Tidak ada komunitas yang ditemukan.</p>
                    @endforelse
                </div>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-4">
                {{ $komunitasList->links() }}
            </div>
        </section>
    </div>
</div>

<script>
document.querySelector('.community-container').style.cssText += `
    &::-webkit-scrollbar {
        width: 12px;
        height: 12px;
        display: block;
    }
    &::-webkit-scrollbar-track {
        background: #e0e0e0;
        border-radius: 6px;
    }
    &::-webkit-scrollbar-thumb {
        background: #104041;
        border-radius: 6px;
        border: 2px solid #e0e0e0;
        min-height: 40px;
    }
    &::-webkit-scrollbar-thumb:hover {
        background: #0a2626;
    }
`;
</script>
@endsection