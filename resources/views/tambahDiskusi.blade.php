@extends('layouts.master2')
@section('title', 'FAQS')

@section('content')
<x-page-title title="Beranda" pagetitle="Forum Diskusi" maintitle="Tambah Diskusi" />

<div class="contact-inner-section-area sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="contact-form-area">
                    <div class="row">
                        <div class="col-lg-15">
                            <div class="form-group">
                                <label for="discussionInformation"><strong>Informasi Diskusi</strong></label>
                                <p>Tempat bertukar pikiran dan berdiskusi mengenai buku dan literatur</p>
                                <hr class="mt-3" style="border: 1px solid #000; margin: 5px 0 20px 0;" />
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="form-group">
                                <label for="community">Pilih Komunitas *</label>
                                <div class="input-area">
                                    <input type="text" class="form-control" id="community" placeholder="Bunda Literasi" value="Bunda Literasi" required readonly>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="form-group">
                                <label for="discussionTitle">Judul Diskusi</label>
                                <div class="input-area">
                                    <input type="text" class="form-control" id="discussionTitle" placeholder="Masukan Judul Diskusi Anda">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 mb-4">
                            <div class="form-group">
                                <label for="discussionDescription">Deskripsi Diskusi</label>
                                <div class="input-area">
                                    <textarea class="form-control" id="discussionDescription" rows="4" placeholder="Masukan Deskripsi Diskusi Anda"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 text-center">
                            <div class="input-area d-flex justify-content-end">
                                <button type="submit" class="header-btn1 me-2">Simpan Perubahan <span><i class="fa-solid fa-arrow-right"></i></span></button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
