@extends('layouts.master')
@section('title', 'Tambah Berita')

@section('content')
<div class="container-fluid py-5 px-4">
    <div class="about-header-area" style="background-image: url({{ URL::asset('build/img/bg/header1.jpg') }}); background-repeat: no-repeat; background-size: cover; background-position: center; margin: -24px -24px -24px;">
        <img src="{{ URL::asset('build/img/elements/elements1.png') }}" alt="" class="elements1 aniamtion-key-1">
        <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt="" class="star2 keyframe5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="about-inner-header heading9">
                        <h1>Tambah Berita</h1>
                        <a href="/">Beranda</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            {{-- Sidebar --}}
            <aside class="col-lg-4 col-md-4 pe-0">
                @include('layouts.master2')
            </aside>

            {{-- Main Content --}}
            <div class="col-lg-6 col-md-8" style="margin-left: -75px; margin-top:30px;">
                <div class="card border-0 shadow-lg rounded-4 hover-shadow">
                    <div class="card-header text-center py-3 text-black rounded-top" style="background-color: #7ca1b5;">
                        <h3 class="fw-semibold mb-0">Tambah Berita</h3>
                    </div>
                    <div class="card-body px-5 py-4">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <form action="{{ route('informasi.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="judul_berita" class="form-label">Judul Berita *</label>
                                        <input type="text" name="judul_berita" id="judul_berita"
                                            class="form-control @error('judul_berita') is-invalid @enderror"
                                            value="{{ old('judul_berita') }}" placeholder="Masukkan judul berita" required>
                                        @error('judul_berita')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <small class="form-text text-muted">Contoh: Literasi Maju Bandung</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="status_info">Status *</label>
                                        <input type="text" class="form-control" id="status_info" name="status_info"
                                            value="draft" readonly>
                                        <small class="form-text text-muted">
                                            Status berita otomatis berubah menjadi draft saat berita berhasil ditambahkan.
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label for="author[]" class="form-label">Author *</label>
                                        <div id="inisiator-wrapper">
                                            <div class="input-group mb-2">
                                                <input type="text" class="form-control" name="author[]"
                                                    placeholder="Masukkan nama author" required>
                                                <button type="button" class="btn btn-success" id="add-inisiator">+</button>
                                            </div>
                                        </div>
                                        @error('author.0')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <small class="form-text text-muted">Tekan tombol "+" untuk menambahkan lebih banyak author.</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="kategori_berita" class="form-label">Kategori Berita *</label>
                                    <div class="mb-4">
                                        <select name="kategori_berita" id="kategori_berita"
                                            class="form-select @error('kategori_berita') is-invalid @enderror" required>
                                            <option value="" disabled selected>Pilih kategori</option>
                                            <option value="semua berita" {{ old('kategori_berita') == 'semua berita' ? 'selected' : '' }}>Semua Berita</option>
                                            <option value="kegiatan" {{ old('kategori_berita') == 'kegiatan' ? 'selected' : '' }}>Kegiatan</option>
                                            <option value="layanan" {{ old('kategori_berita') == 'layanan' ? 'selected' : '' }}>Layanan</option>
                                            <option value="koleksi" {{ old('kategori_berita') == 'koleksi' ? 'selected' : '' }}>Koleksi</option>
                                            <option value="fasilitas" {{ old('kategori_berita') == 'fasilitas' ? 'selected' : '' }}>Fasilitas</option>
                                            <option value="prestasi" {{ old('kategori_berita') == 'prestasi' ? 'selected' : '' }}>Prestasi</option>
                                            <option value="kerjasama" {{ old('kategori_berita') == 'kerjasama' ? 'selected' : '' }}>Kerjasama</option>
                                            <option value="events" {{ old('kategori_berita') == 'events' ? 'selected' : '' }}>Events</option>
                                        </select>
                                        @error('kategori_berita')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="foto_berita" class="form-label">Foto Berita (Maks 2MB) *</label>
                                        <input type="file" name="foto_berita" id="foto_berita"
                                            class="form-control @error('foto_berita') is-invalid @enderror"
                                            accept="image/*" onchange="previewImage()" required>
                                        <img id="image-preview" class="img-thumbnail mt-2" style="display: none;"
                                            alt="Preview Foto">
                                        @error('foto_berita')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <small class="form-text text-muted">Ukuran foto harus 1920x800px</small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label for="isi_berita" class="form-label">Isi Berita *</label>
                                        <textarea name="isi_berita" id="isi_berita"
                                            class="form-control @error('isi_berita') is-invalid @enderror"
                                            rows="8" placeholder="Tuliskan isi berita" required>{{ old('isi_berita') }}</textarea>
                                        @error('isi_berita')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Simpan Berita</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
// Move the previewImage function outside of DOMContentLoaded to make it globally accessible
function previewImage() {
    const preview = document.getElementById('image-preview');
    const fileInput = document.getElementById('foto_berita');
    const file = fileInput.files[0];
    
    // Reset preview if file is empty
    if (!file) {
        preview.style.display = 'none';
        return;
    }

    const reader = new FileReader();
    reader.onload = function(e) {
        preview.src = e.target.result;
        preview.style.display = 'block';

        // Wait until the image is loaded to check dimensions
        preview.onload = function() {
            // Check image dimensions
            const validWidth = 1920;
            const validHeight = 800;

            if (preview.naturalWidth !== validWidth || preview.naturalHeight !== validHeight) {
                alert(`Ukuran foto harus ${validWidth}x${validHeight} piksel`);
                preview.style.display = 'none'; // Hide preview
                fileInput.value = ''; // Reset input
            }
        };
    };

    reader.readAsDataURL(file);
}

document.addEventListener('DOMContentLoaded', function() {
    // Handle adding authors
    const addButton = document.getElementById('add-inisiator');
    const wrapper = document.getElementById('inisiator-wrapper');

    addButton.addEventListener('click', function() {
        // Create new input group
        const newInputGroup = document.createElement('div');
        newInputGroup.classList.add('input-group', 'mb-2');

        newInputGroup.innerHTML = `
            <input type="text" class="form-control" name="author[]" placeholder="Masukkan nama author" required>
            <button type="button" class="btn btn-danger remove-inisiator">-</button>
        `;

        // Add new input to wrapper
        wrapper.appendChild(newInputGroup);

        // Add event listener for remove button
        newInputGroup.querySelector('.remove-inisiator').addEventListener('click', function() {
            newInputGroup.remove();
        });
    });

    // Add event listeners to existing remove buttons (if any)
    document.querySelectorAll('.remove-inisiator').forEach(function(button) {
        button.addEventListener('click', function() {
            this.closest('.input-group').remove();
        });
    });
});
</script>
@endsection