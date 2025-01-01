@extends('layouts.master2')
@section('title', 'Riwayat Laporan')
@include('layouts.sidebar')
<x-page-title title="Beranda" pagetitle="Laporan" maintitle="Riwayat Laporan" />

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header bg-gradient-light text-black">
                    <h4 class="mb-0 text-center font-semi-bold">Riwayat Laporan</h4>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Laporan</th>
                                    <th>Tanggal Laporan</th>
                                    <th>Deskripsi</th>
                                    <th>Status</th>
                                    <th>File</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($laporans as $L)
                                    <tr>
                                        <td>{{ $L->judul }}</td>
                                        <td>{{ $L->tgl_dibuat }}</td>
                                        <td>{{ $L->desk_lap }}</td>
                                        <td>
                                            @switch($L->status_periksa)
                                                @case('belum diperiksa')
                                                    <span class="badge bg-warning text-dark">Belum Diperiksa</span>
                                                    @break
                                                @case('diterima')
                                                    <span class="badge bg-success">Diterima</span>
                                                    @break
                                                @case('ditolak')
                                                    <span class="badge bg-danger">Ditolak</span>
                                                    @break
                                                @default
                                                    <span class="badge bg-secondary">{{ $L->status_periksa }}</span>
                                            @endswitch
                                        </td>
                                        <td>
                                            @if($L->file)
                                                <a href="{{ asset('storage/' . $L->file) }}" 
                                                   class="btn btn-sm btn-primary" 
                                                   target="_blank">
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
@endsection