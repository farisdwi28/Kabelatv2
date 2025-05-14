@extends('layouts.master')
@section('title', 'Riwayat Laporan')

@section('content')
    <x-page-title title="Beranda" maintitle="Riwayat Laporan" />
    
    <!-- Alert Container -->
    @if(session('success') || session('error'))
        <div style="position: fixed; top: 20px; right: 20px; z-index: 9999; min-width: 300px; max-width: 400px;">
            @if(session('success'))
                <div style="background: linear-gradient(135deg, #064e3b, #149f6c); 
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

    <div class="container-fluid py-4">
        <div class="row">
            <aside class="col-lg-4 col-md-4 pe-0">
                @include('layouts.master2')
            </aside>

            <div class="col-lg-7 col-md-8" style="margin-left: -120px; margin-top:30px">
                <div class="card border-0 rounded-3" style="box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                    <div class="card-header text-black" style="background-color: #7ca1b5;">
                        <h4 class="mb-0 text-center fw-semibold">Riwayat Laporan</h4>
                    </div>
                    <div class="mx-3 my-3" style="height: 650px; 
                                                 overflow-y: auto; 
                                                 background-color: white; 
                                                 border-radius: 0.5rem;
                                                 scrollbar-width: thin;
                                                 scrollbar-color: #104041 #e0e0e0;">
                        <table class="table table-striped align-middle mb-0">
                            <thead style="position: sticky; top: 0; z-index: 1; background-color: #f8f9fa;">
                                <tr class="bg-light border-bottom">
                                    <th class="py-3 ps-3">Nama Laporan</th>
                                    <th class="py-3">Tanggal Laporan</th>
                                    <th class="py-3">Deskripsi</th>
                                    <th class="py-3">Status</th>
                                    <th class="py-3 pe-3">File</th>
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
                                                    <span class="badge bg-danger py-2 px-3" 
                                                          data-bs-toggle="modal" 
                                                          data-bs-target="#reasonModal{{ $L->kd_laporan }}"
                                                          style="cursor: pointer; transition: opacity 0.3s ease;">
                                                        Ditolak
                                                    </span>
                                                @break

                                                @default
                                                    <span class="badge bg-secondary py-2 px-3">{{ $L->status_periksa }}</span>
                                            @endswitch
                                        </td>
                                        <td class="pe-3">
                                            @if ($L->file)
                                                <a href="{{ route('laporan.download', $L->kd_laporan) }}"
                                                   class="btn btn-sm btn-primary"
                                                   style="transition: all 0.3s ease;">
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

    <!-- Enhanced Modals -->
    @foreach ($laporans as $L)
        @if($L->status_periksa == 'ditolak')
            <div class="modal fade" id="reasonModal{{ $L->kd_laporan }}" tabindex="-1" 
                 aria-labelledby="reasonModalLabel{{ $L->kd_laporan }}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" style="border: none; 
                                                     border-radius: 15px; 
                                                     box-shadow: 0 15px 35px rgba(0,0,0,0.2);
                                                     transform: scale(0.95);
                                                     transition: transform 0.3s ease;">
                        <div class="modal-header" style="background: linear-gradient(135deg, #dc3545, #ff6b6b);
                                                        color: white;
                                                        border-top-left-radius: 15px;
                                                        border-top-right-radius: 15px;
                                                        padding: 1.5rem;">
                            <h5 class="modal-title d-flex align-items-center gap-2" 
                                id="reasonModalLabel{{ $L->kd_laporan }}">
                                <i class="fas fa-exclamation-circle"></i>
                                Alasan Penolakan
                            </h5>
                            <button type="button" 
                                    class="btn-close btn-close-white" 
                                    data-bs-dismiss="modal" 
                                    aria-label="Close"
                                    style="transition: transform 0.3s ease;"></button>
                        </div>
                        <div class="modal-body p-4">
                            <div style="background: #eff2f5;
                                      padding: 1.5rem;
                                      border-radius: 10px;">
                                <p class="mb-0">{{ $L->alasan_penolakan ?: 'Tidak ada alasan penolakan yang dicantumkan.' }}</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" 
                                    class="btn btn-secondary d-flex align-items-center gap-2"
                                    data-bs-dismiss="modal"
                                    style="transition: all 0.3s ease;">
                                <i class="fas fa-times"></i>Tutup
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach

    <style>
        @keyframes alertSlideIn {
            from {
                transform: translateX(120%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes alertSlideOut {
            from {
                transform: translateX(0);
                opacity: 1;
            }
            to {
                transform: translateX(120%);
                opacity: 0;
            }
        }

        /* Custom scrollbar styles */
        .mx-3::-webkit-scrollbar {
            width: 8px;
        }

        .mx-3::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 4px;
        }

        .mx-3::-webkit-scrollbar-thumb {
            background: #104041;
            border-radius: 4px;
            transition: background 0.3s ease;
        }

        .mx-3::-webkit-scrollbar-thumb:hover {
            background: #0a2626;
        }

        /* Hover effects */
        .btn-sm:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .badge.bg-danger:hover {
            opacity: 0.9;
        }

        /* Modal show animation */
        .modal.show .modal-content {
            transform: scale(1) !important;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .col-lg-7 {
                margin-left: 0 !important;
                padding: 0 15px;
            }

            .mx-3 {
                height: 500px;
            }

            .modal-dialog {
                margin: 1rem;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Auto-remove alerts
            const alerts = document.querySelectorAll('[style*="animation: alertSlideIn"]');
            alerts.forEach(alert => {
                setTimeout(() => {
                    alert.style.animation = 'alertSlideOut 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards';
                    setTimeout(() => {
                        alert.remove();
                    }, 600);
                }, 5000);
            });

            // Modal animation
            const modals = document.querySelectorAll('.modal');
            modals.forEach(modal => {
                modal.addEventListener('show.bs.modal', function() {
                    setTimeout(() => {
                        this.querySelector('.modal-content').style.transform = 'scale(1)';
                    }, 50);
                });
            });
        });
    </script>
@endsection