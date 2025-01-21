@extends('layouts.master')
@section('title', 'Riwayat Laporan')

@section('content')
    <x-page-title title="Beranda" pagetitle="Laporan" maintitle="Riwayat Laporan" />
    <div class="container-fluid py-4">
        <div class="row">
            <aside class="col-lg-4 col-md-4 pe-0">
                @include('layouts.master2')
            </aside>

            <div class="col-lg-7 col-md-8" style="margin-left: -120px; margin-top:30px">
                <div class="card shadow-sm border-0 rounded-3">
                    <div class="card-header text-black" style="background-color:  #7ca1b5;">
                        <h4 class="mb-0 text-center fw-semibold">Riwayat Laporan</h4>
                    </div>
                    <div class="card-body p-0">
                        @if (session('success'))
                            <div class="alert alert-success mx-3 mt-3">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger mx-3 mt-3">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="mx-3 my-3"
                            style="height: 650px; overflow-y: auto; 
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
                                        <tr style="height: 60px;">
                                            <td class="ps-3">{{ $L->judul }}</td>
                                            <td>{{ Carbon\Carbon::parse($L->tgl_dibuat)->format('d M Y') }}</td>
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
                                                @if ($L->file)
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
        /* Common styles */
        .hover-shadow {
            transition: all 0.3s ease;
        }

        .hover-shadow:hover {
            transform: translateY(-2px);
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
        }

        /* Scrollbar Customization */
        div.mx-3::-webkit-scrollbar {
            width: 10px;
        }

        div.mx-3::-webkit-scrollbar-thumb {
            background: #104041;
            border-radius: 5px;
        }

        div.mx-3::-webkit-scrollbar-thumb:hover {
            background: #0a2626;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            aside {
                margin-bottom: 20px;
            }

            .col-lg-7 {
                margin-left: 0 !important;
                padding: 0 15px;
            }

            .mx-3 {
                padding-right: 10px;
                max-height: 600px;
            }

            .card-body {
                padding: 1rem;
            }

            .table-responsive {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .btn-sm {
                width: 100%;
                margin-top: 0.5rem;
            }

            /* Make table scrollable horizontally on mobile */
            .table {
                min-width: 800px;
                /* Ensure table can be scrolled horizontally */
            }

            /* Adjust spacing for mobile */
            .container-fluid {
                padding: 1rem;
            }

            /* Improve readability of table on mobile */
            .table td,
            .table th {
                white-space: nowrap;
                padding: 0.5rem;
            }
        }
    </style>
@endsection
