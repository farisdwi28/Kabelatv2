@extends('layouts.master2')
@section('title', 'Riwayat Laporan')
@include('layouts.sidebar')
<x-page-title title="Beranda" pagetitle="Laporan" maintitle="Riwayat Laporan" />

<div class="container py-5">
    <h3>Riwayat Laporan</h3>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Deskripsi</th>
                <th>Status</th>
                <th>File</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laporans as $laporan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $laporan->judul }}</td>
                    <td>{{ $laporan->tgl_dibuat }}</td>
                    <td>{{ $laporan->desk_lap }}</td>
                    <td>{{ $laporan->status }}</td>
                    <td>
                        @if ($laporan->file)
                            <a href="{{ asset('storage/' . $laporan->file) }}" target="_blank">Lihat File</a>
                        @else
                            Tidak ada file
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
