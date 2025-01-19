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

   <div class="container-fluid">
    <div class="row">
        <!-- Sidebar Section -->
        <nav class="col-12 col-md-6 d-md-block bg-white border-end min-vh-100 p-4">
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
                           class="nav-link {{ Request::is('kegiatanKomunitas') ? 'active bg-light text-dark' : 'text-dark' }}">
                           <i class="fa-solid fa-cogs me-2"></i>
                            Galeri Komunitas
                        </a>
                    </li>

                    @if($user && $memberInfo)
                        <li class="nav-item">
                            <a href="{{ route('strukturKomunitas.show', $komunitas->kd_komunitas) }}" 
                                class="nav-link {{ Request::is('strukturKomunitas/*') ? 'active bg-light text-dark' : 'text-dark' }}">
                                 <i class="fa-solid fa-users me-2"></i>
                                 Struktur Komunitas
                             </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('forumDiskusi') }}" 
                               class="nav-link {{ Request::is('forumDiskusi') ? 'active bg-light text-dark' : 'text-dark' }}">
                                <i class="fa-solid fa-comment-dots me-2"></i>
                                Forum Diskusi
                            </a>
                        </li>

                        @if($isLeadership)
                            <li class="nav-item">
                                <a href="{{ route('diskusi.create') }}" 
                                   class="nav-link {{ Request::is('tambahDiskusi') ? 'active bg-light text-dark' : 'text-dark' }}">
                                    <i class="fa-solid fa-comments me-2"></i>
                                    Tambah Diskusi
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('laporan.create') }}" 
                                   class="nav-link {{ Request::is('tambahLaporan') ? 'active bg-light text-dark' : 'text-dark' }}">
                                    <i class="fa-solid fa-file-alt me-2"></i>
                                    Tambah Laporan
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ url('riwayatLaporan') }}" 
                                   class="nav-link {{ Request::is('riwayatLaporan') ? 'active bg-light text-dark' : 'text-dark' }}">
                                    <i class="fa-solid fa-history me-2"></i>
                                    Riwayat Laporan
                                </a>
                            </li>
                        @endif
                    @else
                        <div class="mt-3 text-muted small">
                            Login dan bergabung dengan komunitas untuk mengakses fitur lainnya
                        </div>
                    @endif
                </ul>
            </nav>
