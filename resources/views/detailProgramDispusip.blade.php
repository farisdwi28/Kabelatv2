@extends('layouts.master')
@section('title', 'Case Study')

@section('content')

    <x-page-title title="Beranda" pagetitle="Program Dispusip" maintitle="Program Dispusip" />

    <div class="case-single-section-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="case-auhtor-area sp1">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="case-single-hedaer heading2">
                                    <h2>Jelajah Literasi Asik</h2>
                                    <p>Diinisiasi oleh Sani Kurnia</p>
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="col-lg-7">
                                <div class="case-images image-anime">
                                    <img src="{{ URL::asset('build/img/all-images/contoh3.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="case-lista-area sp1 bg2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="case-pera-area heading2">
                        <h2>Tentang Program</h2>
                        <p>Indonesia tertinggal dalam hal budaya literasi. Data UNESCO tahun 2017 menunjukkan
                            bahwa minat baca masyarakat Indonesia sangat rendah, hanya 0,001%. Artinya, dari
                            1.000 orang Indonesia, hanya 1 orang yang rajin membaca. Hal ini diperparah dengan
                            kondisi di Kabupaten Bandung, di mana nilai indeks baca pada tahun 2022 hanya
                            mencapai 62.68% dengan predikat CUKUP.

                            Kurangnya minat baca ini memiliki dampak yang signifikan terhadap perkembangan
                            intelektual dan kemajuan sosial masyarakat. Masyarakat yang memiliki literasi rendah
                            akan kesulitan untuk memahami informasi, menganalisis dengan kritis, dan
                            berpartisipasi dalam perkembangan budaya dan pengetahuan.
                            Perpustakaan sebagai pusat belajar masyarakat memiliki peran penting dalam
                            meningkatkan literasi. Namun, pada kenyataannya, masih banyak masyarakat yang belum
                            mengetahui manfaat perpustakaan.

                            Berdasarkan kondisi tersebut, Dinas Arsip dan Perpustakaan Kabupaten Bandung
                            mengembangkan inovasi yang diberi nama Jelita atau Jelajah Literasi Asik. Jelita
                            merupakan kegiatan penjelajahan ke perpustakaan desa dalam rangka mensosialisasikan
                            kegiatan-kegiatan literasi diantaranya gerakan GEULIS MANIS, yaitu gerakan literasi
                            membaca dan menulis. Kegiatan ini dilaksanakan dalam rangka mendorong terwujudnya
                            perpustakaan berbasis inklusi sosial. yang bertujuan meningkatkan kesejahteraan
                            masyarakat dengan metode peningkatan pelayanan perpustakaan dan pelatihan-pelatihan
                            yang keren dan Asyik. Jelajah Literasi Asyik dalam pelaksanaanya menggandeng Para
                            Camat, Kepala Desa di 31 Kecamatan di Kabupaten Bandung, TBM (Taman Bacaan
                            Masyarakat), Pegiat Literasi, dan OPD terkait</p>
                        <br>
                        <h2>Tujuan</h2>
                        <p>Inovasi ini bertujuan untuk meningkatkan minat baca masyarakat Kabupaten Bandung dengan cara
                            menggunakan fasilitas perpustakaan sebagai sumber informasi dan warisan budaya bangsa
                            semaksimalnya. Inovasi ini tidak hanya memperbaiki fasilitas perpustakaan tetapi juga mengadakan
                            talk show sebagai salah satu upaya menarik minat masyarakat. Talk show tersebut bertema ‘Bedah
                            Buku Aku Pahlawan Lingkungan’. Tidak hanya itu, Dinas Arsip dan Perpustakaan Kabupaten Bandung
                            juga membuat kegiatan Kemah Literasi dalam inovasi ini, kemah literasi adalah program atau
                            kegiatan yang bertujuan untuk meningkatkan literasi, atau kemampuan membaca, menulis, dan
                            memahami teks, dalam masyarakat. Kemah literasi sering kali diselenggarakan dalam bentuk kamp
                            atau perkemahan, di mana peserta dapat mengikuti berbagai kegiatan dan pelatihan untuk
                            meningkatkan kemampuan literasi mereka.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
