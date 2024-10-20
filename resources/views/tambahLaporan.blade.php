@extends('layouts.master')
@section('title', 'FAQS')

@section('content')

    <x-page-title title="Beranda" pagetitle="Laporan" maintitle="Tambah Laporan" />

    <div class="contact-inner-section-area sp1">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="contact-form-area">
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <div class="form-group">
                                    <label for="community">Nama Laporan*</label>
                                    <div class="input-area">
                                        <input type="text" class="form-control" id="community"
                                            placeholder="Bunda Literasi" value="Komunitas Palsyu" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-4">
                                <div class="form-group">
                                    <label for="community">Tanggal Laporan*</label>
                                    <div class="input-area">
                                        <input type="date" class="form-control " id="datepicker" name="selected_date" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 mb-4">
                                <div class="form-group">
                                    <label for="discussionDescription">Deskripsi Laporan*</label>
                                    <div class="input-area">
                                        <textarea class="form-control" id="discussionDescription" rows="4" placeholder="Masukan Deskripsi Laporan Anda" required></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 mb-5">
                                <div class="form-group">
                                    <label for="formFileMultiple" class="form-label">Upload Laporan*</label>
                                    <div class="input-area">
                                        <input class="form-control" type="file" id="formFileMultiple" multiple required>
                                    </div>
                                    <p class="text-muted mt-1">Klik untuk tambah foto, SVG, PDF</p>
                                </div>
                            </div>

                            <div class="col-lg-12 text-center">
                                <div class="input-area d-flex justify-content-end">
                                    <button type="submit" class="header-btn1 me-2">Simpan Perubahan <span><i
                                                class="fa-solid fa-arrow-right"></i></span></button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
