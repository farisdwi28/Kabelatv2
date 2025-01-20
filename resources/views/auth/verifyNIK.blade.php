@extends('layouts.auth')

@section('title', 'Verifikasi NIK')

@section('content')
<div class="container-fluid p-0">
    <div class="row no-gutters" style="height: 100vh; background-image: url('{{ asset('build/img/bg/login-background.jpg') }}'); background-size: cover; background-position: center;">
        <div class="col-lg-6 d-flex justify-content-center align-items-center">
            <div class="card rounded-4 shadow-sm border-0 p-4" style="background-color: rgba(255, 255, 255, 0.8);">
                <div class="text-center mb-4">
                    <img src="{{ asset('build/img/logo/kabelat.png') }}" alt="Logo Kabelat" style="max-width: 120px;">
                    <h4 class="fw-bold">Verifikasi NIK</h4>
                    <p class="mb-4 text-dark">Masukkan NIK Anda untuk verifikasi</p>
                </div>

                @if (session('error'))
                    <div class="alert alert-danger mb-3">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="{{ route('password.verify.submit') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" name="nik" id="nik" 
                            class="form-control @error('nik') is-invalid @enderror"
                            value="{{ old('nik') }}" 
                            required
                            pattern="\d{16}"
                            title="NIK harus 16 digit angka">
                        @error('nik')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-dark">Verifikasi NIK</button>
                        <a href="{{ route('login') }}" class="btn btn-outline-secondary">Kembali ke Login</a>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-lg-6 d-flex justify-content-center align-items-center">
            <img src="{{ asset('build/img/logo/img.png') }}" class="img-fluid" alt="Gambar Kabelat">
        </div>
    </div>
</div>
@endsection