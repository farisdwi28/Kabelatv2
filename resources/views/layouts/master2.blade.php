@php
    $user = Auth::user();
    $memberInfo = null;
    $komunitas = null;
    
    if ($user) {
        $memberInfo = App\Models\MemberKomunitas::where('kd_member', $user->kd_pen)->first();
        if ($memberInfo) {
            $komunitas = App\Models\Komunitas::find($memberInfo->kd_komunitas);
        }
    }
    
    $isLeadership = $memberInfo && in_array($memberInfo->kd_jabatan, ['KETUA', 'WAKIL', 'SEKRE', 'BENDA']);
@endphp

<div class="container-fluid p-0">
    <div class="row g-0">
        <!-- Mobile Toggle Button -->
        <div class="d-lg-none w-100 bg-white border-bottom p-3">
            <button class="btn btn-link text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar">
                <i class="fa-solid fa-bars me-2"></i>
                Menu
            </button>
        </div>

        <!-- Sidebar Section -->
        <nav class="col-12 col-lg-6 bg-white border-end sidebar-wrapper">
            <!-- Mobile Collapsible Content -->
            <div class="collapse d-lg-block" id="mobileSidebar">
                <div class="p-4">
                    <a href="/" class="d-flex align-items-center mb-3 text-dark text-decoration-none">
                        <span class="fs-5 fw-bold">
                            @if($komunitas)
                                {{ $komunitas->nama_komunitas }}
                            @else
                                Galeri Komunitas
                            @endif
                        </span>
                    </a>

                    @if($user && $memberInfo)
                        <div class="user-info mb-3">
                            <div class="fw-bold">{{ $user->name }}</div>
                            <div class="text-muted small">
                                @if($memberInfo->kd_jabatan === 'ANGGT')
                                    Anggota
                                @else
                                    {{ $memberInfo->kd_jabatan }}
                                @endif
                            </div>
                        </div>
                    @endif

                    <hr>

                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="{{ url('galeriKomunitas') }}" 
                               class="nav-link d-flex align-items-center {{ Request::is('kegiatanKomunitas') ? 'active bg-light text-dark' : 'text-dark' }}">
                               <i class="fa-solid fa-cogs me-2"></i>
                               <span>Galeri Komunitas</span>
                            </a>
                        </li>

                        @if($user && $memberInfo)
                            <li class="nav-item">
                                <a href="{{ route('strukturKomunitas.show', $komunitas->kd_komunitas) }}" 
                                   class="nav-link d-flex align-items-center {{ Request::is('strukturKomunitas/*') ? 'active bg-light text-dark' : 'text-dark' }}">
                                     <i class="fa-solid fa-users me-2"></i>
                                     <span>Struktur Komunitas</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ url('forumDiskusi') }}" 
                                   class="nav-link d-flex align-items-center {{ Request::is('forumDiskusi') ? 'active bg-light text-dark' : 'text-dark' }}">
                                    <i class="fa-solid fa-comment-dots me-2"></i>
                                    <span>Forum Diskusi</span>
                                </a>
                            </li>

                            @if($isLeadership)
                                <li class="nav-item">
                                    <a href="{{ route('diskusi.create') }}" 
                                       class="nav-link d-flex align-items-center {{ Request::is('tambahDiskusi') ? 'active bg-light text-dark' : 'text-dark' }}">
                                        <i class="fa-solid fa-comments me-2"></i>
                                        <span>Tambah Diskusi</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('laporan.create') }}" 
                                       class="nav-link d-flex align-items-center {{ Request::is('tambahLaporan') ? 'active bg-light text-dark' : 'text-dark' }}">
                                        <i class="fa-solid fa-file-alt me-2"></i>
                                        <span>Tambah Laporan</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ url('riwayatLaporan') }}" 
                                       class="nav-link d-flex align-items-center {{ Request::is('riwayatLaporan') ? 'active bg-light text-dark' : 'text-dark' }}">
                                        <i class="fa-solid fa-history me-2"></i>
                                        <span>Riwayat Laporan</span>
                                    </a>
                                </li>
                            @endif
                        @else
                            <div class="mt-3 text-muted small">
                                Login dan bergabung dengan komunitas untuk mengakses fitur lainnya
                            </div>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

<style>
    /* Sidebar Styles */
    .sidebar-wrapper {
        min-height: 100vh;
    }

    @media (max-width: 991.98px) {
        .sidebar-wrapper {
            min-height: auto;
            border-bottom: 1px solid #dee2e6;
        }

        .nav-link {
            padding: 0.75rem 1rem;
            border-radius: 0.375rem;
            transition: all 0.2s;
        }

        .nav-link:hover {
            background-color: #f8f9fa;
        }

        .nav-link.active {
            background-color: #e9ecef !important;
        }

        /* Improve touch targets for mobile */
        .nav-item {
            margin-bottom: 0.5rem;
        }

        .nav-link i {
            width: 20px;
            text-align: center;
        }
    }

    /* Animation for mobile menu */
    @media (max-width: 991.98px) {
        #mobileSidebar {
            transition: all 0.3s ease-in-out;
        }

        #mobileSidebar.collapsing {
            height: 0;
            overflow: hidden;
        }

        #mobileSidebar.show {
            height: auto;
        }
    }

    /* Active link styles */
    .nav-link.active {
        font-weight: 600;
    }

    /* Improve hover states */
    .nav-link {
        transition: all 0.2s ease;
    }

    .nav-link:hover {
        background-color: rgba(0,0,0,0.05);
    }

    /* Custom scrollbar for sidebar */
    .sidebar-wrapper {
        scrollbar-width: thin;
        scrollbar-color: #104041 #e0e0e0;
    }

    .sidebar-wrapper::-webkit-scrollbar {
        width: 8px;
    }

    .sidebar-wrapper::-webkit-scrollbar-track {
        background: #e0e0e0;
    }

    .sidebar-wrapper::-webkit-scrollbar-thumb {
        background-color: #104041;
        border-radius: 4px;
        border: 2px solid #e0e0e0;
    }
</style>

<script>
    // Add smooth collapse animation for mobile
    document.addEventListener('DOMContentLoaded', function() {
        const mobileToggle = document.querySelector('[data-bs-toggle="collapse"]');
        const mobileSidebar = document.getElementById('mobileSidebar');

        if (mobileToggle && mobileSidebar) {
            mobileToggle.addEventListener('click', function() {
                mobileSidebar.classList.toggle('show');
            });
        }
    });
</script>