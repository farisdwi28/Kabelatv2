@extends('layouts.master')
@section('title', 'Riwayat Laporan')

@section('content')
<x-page-title title="Beranda" pagetitle="Laporan" maintitle="Riwayat Laporan" />
<div class="container-fluid py-4">
    <div class="row">
        <aside class="col-lg-4 col-md-4 pe-0">
            @include('layouts.master2')
        </aside>

        <div class="col-lg-7 col-md-8" style="margin-left: -100px;">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header bg-gradient-light text-black">
                    <h4 class="mb-0 text-center fw-semibold">Riwayat Laporan</h4>
                </div>
                <div class="card-body p-0">
                    @if(session('success'))
                        <div class="alert alert-success mx-3 mt-3">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger mx-3 mt-3">
                            {{ session('error') }}
                        </div>
                    @endif
                    
                    <!-- Container dengan tinggi tetap untuk 6 baris -->
                    <div class="mx-3 my-3" style="height: 500px; overflow-y: auto; 
                         scrollbar-width: auto; scrollbar-color: #104041 #e0e0e0;
                         background-color: white; border-radius: 0.5rem;">
                        <table class="table table-striped align-middle mb-0">
                            <thead style="position: sticky; top: 0; z-index: 1; background-color: #f8f9fa;">
                                <tr class="bg-light border-bottom">
                                    <th class="py-3 ps-3" style="background-color: #f8f9fa;">Nama Laporan</th>
                                    <th class="py-3" style="background-color: #f8f9fa;">Tanggal Laporan</th>
                                    <th class="py-3" style="background-color: #f8f9fa;">Deskripsi</th>
                                    <th class="py-3" style="background-color: #f8f9fa;">Status</th>
                                    <th class="py-3 pe-3" style="background-color: #f8f9fa;">File</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($laporans as $L)
                                    <tr style="height: 60px;"> <!-- Tinggi tetap untuk setiap baris -->
                                        <td class="ps-3">{{ $L->judul }}</td>
                                        <td>{{ $L->tgl_dibuat }}</td>
                                        <td>{{ Str::limit($L->desk_lap, 20) }}</td>
                                        <td>
                                            @switch($L->status_periksa)
                                                @case('belum diperiksa')
                                                    <span class="badge bg-warning text-dark py-2 px-3">Belum Diperiksa</span>
                                                    @break
                                                @case('diterima')
                                                    <span class="badge bg-success py-2 px-3">Diterima</span>
                                                    @break
                                                @case('ditolak')
                                                    <span class="badge bg-danger py-2 px-3">Ditolak</span>
                                                    @break
                                                @default
                                                    <span class="badge bg-secondary py-2 px-3">{{ $L->status_periksa }}</span>
                                            @endswitch
                                        </td>
                                        <td class="pe-3">
                                            @if($L->file)
                                                <a href="{{ route('laporan.download', $L->kd_laporan) }}" 
                                                   class="btn btn-sm btn-primary text-decoration-none">
                                                    <i class="fa-solid fa-download me-1"></i> Download
                                                </a>
                                            @else
                                                <span class="text-muted">Tidak ada file</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .container-fluid div::-webkit-scrollbar {
        width: 12px;
        display: block;
    }
    
    .container-fluid div::-webkit-scrollbar-track {
        background: #e0e0e0;
        border-radius: 6px;
    }
    
    .container-fluid div::-webkit-scrollbar-thumb {
        background: #104041;
        border-radius: 6px;
        border: 2px solid #e0e0e0;
        min-height: 40px;
    }
    
    .container-fluid div::-webkit-scrollbar-thumb:hover {
        background: #0a2626;
    }
</style>
@endsection