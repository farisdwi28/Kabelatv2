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
                    <h5 class="mb-0">Riwayat Laporan</h5>
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
                                    <th>File</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($laporans as $L)
                                    <tr>
                                        <td>{{ $L->judul }}</td>
                                        <td>{{ $L->tgl_dibuat }}</td>
                                        <td>{{ $L->desk_lap }}</td>
                                        <td><a href="{{ asset('storage/' . $L->file) }}" target="_blank">Download</a></td>
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
