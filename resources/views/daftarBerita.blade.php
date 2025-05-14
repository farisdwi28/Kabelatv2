@extends('layouts.master')
@section('title', 'Daftar Berita')

@section('content')
    <x-page-title title="Beranda" maintitle="Daftar Berita" />

    <!-- Alert Container -->
    @if (session('success') || session('error'))
        <div style="position: fixed; top: 20px; right: 20px; z-index: 9999; min-width: 300px; max-width: 400px;">
            @if (session('success'))
                <div
                    style="background: linear-gradient(135deg, #064e3b, #149f6c); 
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

            @if (session('error'))
                <div
                    style="background: linear-gradient(135deg, #dc3545, #f86d7d); 
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
    @endif

    <div class="container-fluid py-4">
        <div class="row">
            <aside class="col-lg-4 col-md-4 pe-0">
                @include('layouts.master2')
            </aside>

            <div class="col-lg-7 col-md-8" style="margin-left: -120px; margin-top:30px">
                <div class="card border-0 rounded-3 shadow-sm">
                    <div class="card-header text-white d-flex align-items-center"
                        style="background: linear-gradient(to bottom, #509dad, #215e7e);">>
                        <h4 class="mb-0 text-center fw-semibold flex-grow-1">Daftar Informasi</h4>
                        <button type="button" class="btn btn-light btn-sm d-flex align-items-center" data-bs-toggle="modal"
                            data-bs-target="#createModal">
                            <i class="fas fa-plus-circle me-1"></i> Tambah
                        </button>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive" style="max-height: 650px;">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="sticky-top bg-light">
                                    <tr>
                                        <th class="py-3 ps-3">Judul</th>
                                        <th class="py-3">Tanggal</th>
                                        <th class="py-3">Status</th>
                                        <th class="py-3">Views</th>
                                        <th class="py-3 pe-3">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($informasi as $info)
                                        <tr>
                                            <td class="ps-3">{{ Str::limit($info->judul_berita, 40) }}</td>
                                            <td>{{ Carbon\Carbon::parse($info->tanggal_dibuat)->format('d M Y') }}</td>
                                            <td>
                                                @switch($info->status_info)
                                                    @case('draft')
                                                        <span class="badge bg-secondary">Draft</span>
                                                    @break

                                                    @case('terbit')
                                                        <span class="badge bg-success">Terbit</span>
                                                    @break

                                                    @case('sembunyi')
                                                        <span class="badge bg-warning text-dark">Sembunyi</span>
                                                    @break

                                                    @default
                                                        <span class="badge bg-light text-dark">{{ $info->status_info }}</span>
                                                @endswitch
                                            </td>
                                            <td>
                                                <span class="d-flex align-items-center text-muted">
                                                    <i class="fas fa-eye me-1"></i> {{ $info->views }}
                                                </span>
                                            </td>
                                            <td class="pe-3">
                                                <div class="d-flex gap-2">
                                                    <button type="button" class="btn btn-sm btn-warning text-white"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editModal{{ $info->kd_info }}" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-danger"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal{{ $info->kd_info }}" title="Hapus">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center py-4 text-muted">
                                                    <i class="fas fa-info-circle me-1"></i> Belum ada data informasi
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Create Modal -->
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0 shadow-lg">
                    <div class="modal-header text-white py-3" style="background: linear-gradient(to bottom, #509dad, #215e7e);">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="fas fa-plus-circle me-2"></i>
                            Tambah Informasi Baru
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-4">
                        <form id="createForm" action="{{ route('informasi.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="judul_berita" id="judul_berita" class="form-control"
                                            placeholder="Judul Berita" required>
                                        <label for="judul_berita" class="text-muted">Judul Berita *</label>
                                        <div class="form-text text-muted">Contoh: Literasi Maju Bandung</div>
                                        <div id="judul-error" class="invalid-feedback"></div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <select name="status_info" class="form-select pe-5" id="status_info" required>
                                            <option value="draft">Draft</option>
                                            <option value="terbit">Terbit</option>
                                            <option value="sembunyi">Sembunyi</option>
                                        </select>
                                        <label for="status_info" class="text-muted">Status *</label>
                                    </div>
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label text-muted">Author *</label>
                                    <div id="author-wrapper">
                                        <div class="input-group mb-2">
                                            <input type="text" class="form-control" name="author[]"
                                                placeholder="Masukkan nama author" required>
                                            <button type="button" class="btn btn-outline-success add-author">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <small class="text-muted">Tekan tombol "+" untuk menambahkan lebih banyak author.</small>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <select name="kategori_berita" class="form-select pe-5" id="kategori_berita"
                                            required>
                                            <option value="semua berita">Semua Berita</option>
                                            <option value="kegiatan">Kegiatan</option>
                                            <option value="layanan">Layanan</option>
                                            <option value="koleksi">Koleksi</option>
                                            <option value="fasilitas">Fasilitas</option>
                                            <option value="prestasi">Prestasi</option>
                                            <option value="kerjasama">Kerjasama</option>
                                            <option value="events">Events</option>
                                        </select>
                                        <label for="kategori_berita" class="text-muted">Kategori *</label>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="foto_berita" class="form-label text-muted">Foto Berita (Maks 2MB)</label>
                                    <input type="file" name="foto_berita" id="foto_berita" class="form-control"
                                        accept="image/*" onchange="previewCreateImage()">

                                    <div class="mt-2 text-center">
                                        <img id="image-preview-create" class="img-fluid rounded border"
                                            style="display: none; max-height: 150px;" alt="Preview Foto">
                                    </div>

                                    <div class="form-text text-muted">Ukuran foto harus 1920x800px</div>
                                    <div id="foto-error" class="invalid-feedback"></div>
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="isi_berita" class="form-label text-muted">Isi Berita *</label>
                                    <textarea name="isi_berita" id="isi_berita" class="form-control" rows="6" placeholder="Masukkan isi berita"
                                        required></textarea>
                                    <div id="isi-error" class="invalid-feedback"></div>
                                </div>
                            </div>

                            <div class="modal-footer border-top-0 pt-3">
                                <button type="button" class="btn btn-outline-secondary rounded-pill px-4"
                                    data-bs-dismiss="modal">
                                    <i class="fas fa-times me-1"></i> Batal
                                </button>
                                <button type="submit" class="btn btn-primary rounded-pill px-4">
                                    <i class="fas fa-save me-1"></i> Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Modals -->
        @foreach ($informasi as $info)
            <div class="modal fade" id="editModal{{ $info->kd_info }}" tabindex="-1"
                aria-labelledby="editModalLabel{{ $info->kd_info }}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content border-0 shadow-lg">
                        <div class="modal-header text-white py-3"
                            style="background: linear-gradient(to bottom, #509dad, #215e7e);">
                            <h5 class="modal-title d-flex align-items-center">
                                <i class="fas fa-edit me-2"></i>
                                Edit Informasi
                            </h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <div class="modal-body p-4">
                            <form action="{{ route('informasi.update', $info->kd_info) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="judul_berita" id="judul_berita{{ $info->kd_info }}"
                                                class="form-control" value="{{ $info->judul_berita }}"
                                                placeholder="Judul Berita" required>
                                            <label for="judul_berita{{ $info->kd_info }}" class="text-muted">Judul Berita
                                                *</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <select name="status_info" class="form-select pe-5"
                                                id="status_info{{ $info->kd_info }}">
                                                <option value="draft" {{ $info->status_info == 'draft' ? 'selected' : '' }}>
                                                    Draft</option>
                                                <option value="terbit" {{ $info->status_info == 'terbit' ? 'selected' : '' }}>
                                                    Terbit</option>
                                                <option value="sembunyi"
                                                    {{ $info->status_info == 'sembunyi' ? 'selected' : '' }}>Sembunyi</option>
                                            </select>
                                            <label for="status_info{{ $info->kd_info }}" class="text-muted">Status *</label>
                                        </div>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label class="form-label text-muted">Author *</label>
                                        <div id="inisiator-wrapper-{{ $info->kd_info }}">
                                            @if (is_array($info->author))
                                                @foreach ($info->author as $index => $author)
                                                    <div class="input-group mb-2">
                                                        <input type="text" class="form-control" name="author[]"
                                                            value="{{ $author }}" placeholder="Masukkan nama author"
                                                            required>
                                                        @if ($index > 0)
                                                            <button type="button"
                                                                class="btn btn-outline-danger remove-inisiator">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                        @else
                                                            <button type="button"
                                                                class="btn btn-outline-success add-inisiator"
                                                                data-id="{{ $info->kd_info }}">
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="input-group mb-2">
                                                    <input type="text" class="form-control" name="author[]"
                                                        value="{{ $info->author }}" placeholder="Masukkan nama author"
                                                        required>
                                                    <button type="button" class="btn btn-outline-success add-inisiator"
                                                        data-id="{{ $info->kd_info }}">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </div>
                                            @endif
                                        </div>
                                        <small class="text-muted">Tekan tombol "+" untuk menambahkan lebih banyak
                                            author.</small>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <select name="kategori_berita" class="form-select pe-5"
                                                id="kategori_berita{{ $info->kd_info }}">
                                                <option value="semua berita"
                                                    {{ $info->kategori_berita == 'semua berita' ? 'selected' : '' }}>Semua
                                                    Berita</option>
                                                <option value="kegiatan"
                                                    {{ $info->kategori_berita == 'kegiatan' ? 'selected' : '' }}>Kegiatan
                                                </option>
                                                <option value="layanan"
                                                    {{ $info->kategori_berita == 'layanan' ? 'selected' : '' }}>Layanan
                                                </option>
                                                <option value="koleksi"
                                                    {{ $info->kategori_berita == 'koleksi' ? 'selected' : '' }}>Koleksi
                                                </option>
                                                <option value="fasilitas"
                                                    {{ $info->kategori_berita == 'fasilitas' ? 'selected' : '' }}>Fasilitas
                                                </option>
                                                <option value="prestasi"
                                                    {{ $info->kategori_berita == 'prestasi' ? 'selected' : '' }}>Prestasi
                                                </option>
                                                <option value="kerjasama"
                                                    {{ $info->kategori_berita == 'kerjasama' ? 'selected' : '' }}>Kerjasama
                                                </option>
                                                <option value="events"
                                                    {{ $info->kategori_berita == 'events' ? 'selected' : '' }}>Events</option>
                                            </select>
                                            <label for="kategori_berita{{ $info->kd_info }}" class="text-muted">Kategori
                                                *</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="foto_berita{{ $info->kd_info }}" class="form-label text-muted">Foto
                                            Berita (Maks 2MB)</label>
                                        <input type="file" name="foto_berita" id="foto_berita{{ $info->kd_info }}"
                                            class="form-control" accept="image/*"
                                            onchange="previewImage('{{ $info->kd_info }}')">

                                        <div class="mt-2 text-center">
                                            @if ($info->foto_berita)
                                                <img src="{{ asset('storage/' . $info->foto_berita) }}"
                                                    id="current-image-{{ $info->kd_info }}"
                                                    class="img-fluid rounded border mb-2" style="max-height: 150px;"
                                                    alt="Foto Berita">
                                                <div class="form-text text-muted">Foto saat ini</div>
                                            @endif
                                            <img id="image-preview-{{ $info->kd_info }}" class="img-fluid rounded border"
                                                style="display: none; max-height: 150px;" alt="Preview Foto">
                                        </div>

                                        <div class="form-text text-muted">Ukuran foto harus 1920x800px. Biarkan kosong jika
                                            tidak ingin mengubah foto.</div>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="isi_berita{{ $info->kd_info }}" class="form-label text-muted">Isi Berita
                                            *</label>
                                        <textarea name="isi_berita" id="isi_berita{{ $info->kd_info }}" class="form-control" rows="6"
                                            placeholder="Masukkan isi berita" required>{{ $info->isi_berita }}</textarea>
                                    </div>
                                </div>

                                <div class="modal-footer border-top-0 pt-3">
                                    <button type="button" class="btn btn-outline-secondary rounded-pill px-4"
                                        data-bs-dismiss="modal">
                                        <i class="fas fa-times me-1"></i> Batal
                                    </button>
                                    <button type="submit" class="btn btn-primary rounded-pill px-4">
                                        <i class="fas fa-save me-1"></i> Simpan Perubahan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <!-- Delete Modals -->
        @foreach ($informasi as $info)
            <div class="modal fade" id="deleteModal{{ $info->kd_info }}" tabindex="-1"
                aria-labelledby="deleteModalLabel{{ $info->kd_info }}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content border-0 shadow-lg">
                        <div class="modal-header bg-danger text-white py-3">
                            <h5 class="modal-title d-flex align-items-center">
                                <i class="fas fa-exclamation-triangle me-2"></i>
                                Konfirmasi Hapus
                            </h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="mb-0">Apakah Anda yakin ingin menghapus informasi
                                <strong>{{ $info->judul_berita }}</strong>? Tindakan ini tidak dapat dibatalkan dan semua data
                                terkait akan dihapus secara permanen.</p>
                        </div>
                        <div class="modal-footer border-top-0">
                            <button type="button" class="btn btn-outline-secondary rounded-pill px-4"
                                data-bs-dismiss="modal">
                                <i class="fas fa-times me-1"></i> Batal
                            </button>
                            <form action="{{ route('informasi.destroy', $info->kd_info) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger rounded-pill px-4">
                                    <i class="fas fa-trash-alt me-1"></i> Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <style>
            /* Alert Notification */
            .alert-notification-container {
                position: fixed;
                top: 20px;
                right: 20px;
                z-index: 9999;
                min-width: 300px;
                max-width: 400px;
            }

            /* Card Styling */
            .card {
                border-radius: 12px;
                overflow: hidden;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            }

            .card-header {
                padding: 1rem 1.5rem;
                border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            }

            /* Table Styling */
            .table {
                margin-bottom: 0;
            }

            .table th {
                font-weight: 600;
                background-color: #f8f9fa;
                color: #495057;
                border-bottom-width: 1px;
            }

            .table td,
            .table th {
                vertical-align: middle;
                padding: 0.75rem 1rem;
            }

            .table-hover tbody tr:hover {
                background-color: rgba(13, 110, 253, 0.05);
            }

            /* Badges */
            .badge {
                padding: 0.5em 0.75em;
                font-weight: 500;
                border-radius: 6px;
                font-size: 0.85em;
            }

            /* Buttons */
            .btn {
                border-radius: 8px;
                padding: 0.5rem 1rem;
                font-weight: 500;
                transition: all 0.2s ease;
            }

            .btn-sm {
                padding: 0.35rem 0.7rem;
                font-size: 0.85rem;
            }

            .btn-primary {
                background-color: #1a5b5b;
                border-color: #1a5b5b;
            }

            .btn-primary:hover {
                background-color: #1a5b5b;
                border-color: #1a5b5b;
            }

            .btn-outline-secondary {
                border-color: #6c757d;
                color: #6c757d;
            }

            .btn-outline-secondary:hover {
                background-color: #6c757d;
                color: white;
            }

            .rounded-pill {
                border-radius: 50rem !important;
            }

            /* Modal Styling */
            .modal-content {
                border-radius: 12px;
                overflow: hidden;
            }

            .modal-header {
                padding: 1rem 1.5rem;
                border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            }

            .modal-title {
                font-weight: 600;
            }

            .modal-body {
                padding: 1.5rem;
            }

            .modal-footer {
                padding: 1rem 1.5rem;
                background-color: #f8f9fa;
                border-top: 1px solid #eee;
            }

            /* Form Elements */
            .form-floating>label {
                color: #6c757d;
                font-size: 0.9rem;
            }

            .form-control,
            .form-select {
                border-radius: 8px;
                padding: 0.75rem 1rem;
                border: 1px solid #ced4da;
            }

            .form-control:focus,
            .form-select:focus {
                border-color: #86b7fe;
                box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
            }

            .form-text {
                font-size: 0.8rem;
            }

            /* Input Group */
            .input-group .btn {
                padding: 0.5rem 0.75rem;
            }

            /* Image Preview */
            .img-fluid {
                max-width: 100%;
                height: auto;
            }

            /* Animation */
            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .modal.fade .modal-dialog {
                animation: fadeIn 0.3s ease-out;
            }

            /* Scrollbar */
            ::-webkit-scrollbar {
                width: 8px;
                height: 8px;
            }

            ::-webkit-scrollbar-track {
                background: #f1f1f1;
                border-radius: 4px;
            }

            ::-webkit-scrollbar-thumb {
                background: #c1c1c1;
                border-radius: 4px;
            }

            ::-webkit-scrollbar-thumb:hover {
                background: #a8a8a8;
            }
        </style>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Author management menggunakan event delegation
                document.addEventListener('click', function(e) {
                    
                    // Handle create form author
                    if (e.target.classList.contains('add-author')) {
                        const wrapper = document.getElementById('author-wrapper');
                        const newInput = `
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" name="author[]" required>
                        <button type="button" class="btn btn-outline-danger remove-author">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>`;
                        wrapper.insertAdjacentHTML('beforeend', newInput);
                    }

                    // Handle remove author
                    if (e.target.classList.contains('remove-author') ||
                        e.target.classList.contains('remove-inisiator')) {
                        e.target.closest('.input-group').remove();
                    }

                    // Handle edit form author
                    if (e.target.classList.contains('add-inisiator')) {
                        const infoId = e.target.dataset.id;
                        const wrapper = document.getElementById(`inisiator-wrapper-${infoId}`);
                        const newInput = `
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" name="author[]" required>
                        <button type="button" class="btn btn-outline-danger remove-inisiator">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>`;
                        wrapper.insertAdjacentHTML('beforeend', newInput);
                    }
                });

                // Image preview handler
                function handleImagePreview(inputId, previewId, currentImageId = null) {
                    const input = document.getElementById(inputId);
                    const preview = document.getElementById(previewId);
                    const currentImage = currentImageId ? document.getElementById(currentImageId) : null;

                    input.addEventListener('change', function() {
                        const file = this.files[0];
                        if (!file) {
                            if (preview) preview.style.display = 'none';
                            if (currentImage) currentImage.style.display = 'block';
                            return;
                        }

                        const reader = new FileReader();
                        reader.onload = function(e) {
                            if (preview) {
                                preview.src = e.target.result;
                                preview.style.display = 'block';
                            }
                            if (currentImage) currentImage.style.display = 'none';

                            // Check dimensions
                            const img = new Image();
                            img.onload = function() {
                                if (img.width !== 1920 || img.height !== 800) {
                                    alert('Ukuran foto harus 1920x800 piksel');
                                    input.value = '';
                                    if (preview) preview.style.display = 'none';
                                    if (currentImage) currentImage.style.display = 'block';
                                }
                            };
                            img.src = e.target.result;
                        };
                        reader.readAsDataURL(file);
                    });
                }

                // Initialize image previews
                handleImagePreview('foto_berita', 'image-preview-create');

                @foreach ($informasi as $info)
                    handleImagePreview(
                        'foto_berita{{ $info->kd_info }}',
                        'image-preview-{{ $info->kd_info }}',
                        'current-image-{{ $info->kd_info }}'
                    );
                @endforeach
                

                // Form validation
                const createForm = document.getElementById('createForm');
                if (createForm) {
                    createForm.addEventListener('submit', async function(e) {
                        e.preventDefault();

                        try {
                            const response = await fetch(this.action, {
                                method: 'POST',
                                body: new FormData(this),
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector(
                                        'meta[name="csrf-token"]').content,
                                    'Accept': 'application/json'
                                }
                            });

                            const data = await response.json();

                            if (data.success) {
                                alert('Informasi berhasil ditambahkan!');
                                window.location.reload();
                            } else if (data.errors) {
                                // Handle errors
                            }
                        } catch (error) {
                            console.error('Error:', error);
                        }
                    });
                }

            });
        </script>
    @endsection
