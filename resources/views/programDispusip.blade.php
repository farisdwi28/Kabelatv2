@extends('layouts.master')
@section('title', 'Program Dispusip')

@section('content')

    <x-page-title title="Beranda" maintitle="Program Dispusip" />

    <!--===== BLOG AREA STARTS =======-->
    <div class="blog1-scetion-area sp1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="blog-hedaer-area heading2 text-center">
                        <h5>Program Dispusip</h5>
                    </div>
                </div>
            </div>
            <!--===== SEARCH AREA =====-->
            <div class="container mb-5">
                <div class="row">
                    <div class="col-lg-12 text-right mb-4">
                        <input type="text" id="search-box" placeholder="Cari Program..." class="form-control" style="max-width: 300px; margin-left: auto; border: 2px solid #768080; ">
                    </div>
                </div>
            </div>
            <!--===== Program List =====-->
            <div class="row" id="program-list">
                @foreach ($programs as $program)
                <div class="col-lg-4 col-md-6 mb-4 program-item">
                        <div class="blog-author-boxarea">
                            <div class="img1" style="height: 250px; overflow: hidden; border-radius: 8px;">
                                <!-- Menampilkan gambar dengan ukuran yang lebih besar -->
                                <img src="{{ $program->sampul_program }}" 
                                     alt="Sampul Program" 
                                     style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="content-area">
                                <a href="{{ route('programdispusip.detail', $program->kd_program) }}">
                                    <span style="font-size: 1.50rem; font-weight: semibold;">{{ $program->nm_program }}</span>
                                </a>
                                <p style="font-size: 1.25rem;">{{ Str::limit($program->tentang_program, 150) }}</p>
                                <a href="{{ route('programdispusip.detail', $program->kd_program) }}">
                                    Baca Selengkapnya <i class="bold fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    <!--===== BLOG AREA ENDS =======-->

@endsection

@section('scripts')
<script>
document.getElementById('search-box').addEventListener('input', function() {
    let query = this.value.trim();
    let programList = document.getElementById('program-list');
    
    // Clear the current list
    programList.innerHTML = '';
    
    // Show loading state
    programList.innerHTML = '<div class="col-12 text-center">Mencari...</div>';
    
    // Always use the search endpoint, it will handle empty queries too
    fetch(`/programs/search?search=${encodeURIComponent(query)}`)
        .then(response => response.json())
        .then(data => {
            programList.innerHTML = ''; // Clear loading state
            
            if (data.programs && data.programs.length > 0) {
                data.programs.forEach(program => {
                    addProgramToList(program);
                });
            } else {
                programList.innerHTML = '<div class="col-12 text-center"><p>Program tidak ditemukan.</p></div>';
            }
        })
        .catch(error => {
            console.error('Error:', error);
            programList.innerHTML = '<div class="col-12 text-center"><p>Terjadi kesalahan saat mencari program.</p></div>';
        });
});

function addProgramToList(program) {
    let description = program.tentang_program;
    if (description && description.length > 150) {
        description = description.slice(0, 150) + '...';
    }

    const programElement = document.createElement('div');
    programElement.className = 'col-lg-4 col-md-6 mb-4 program-item';
    programElement.innerHTML = `
        <div class="blog-author-boxarea">
            <div class="img1" style="height: 250px; overflow: hidden; border-radius: 8px;">
                <img src="${program.sampul_program}" 
                     alt="Sampul Program" 
                     style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="content-area">
                <a href="/programdispusip/detail/${program.kd_program}">
                    <span style="font-size: 1.50rem; font-weight: semibold;">${program.nm_program}</span>
                </a>
                <p style="font-size: 1.25rem;">${description || ''}</p>
                <a href="/programdispusip/detail/${program.kd_program}">
                    Baca Selengkapnya <i class="bold fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    `;
    
    document.getElementById('program-list').appendChild(programElement);
}
</script>
@endsection
