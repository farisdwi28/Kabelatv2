@extends('layouts.master')
@section('title', 'Detail Program Dispusip')

@section('content')
    <x-page-title title="Beranda" maintitle="Detail Program Dispusip" />

    <div style="position: relative; margin-bottom: 3rem;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 position-relative p-0">
                    <img src="{{ $program->sampul_program }}" 
                         alt="Sampul Program" 
                         style="width: 100%; height: 450px; object-fit: cover;">
                    
                    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.5); padding: 2rem; display: flex; align-items: center;">
                        <div class="container">
                            <h1 style="color: #fff; font-size: clamp(2rem, 4vw, 2.8rem); font-weight: bold; margin-bottom: 1rem;">
                                {{ $program->nm_program }}
                            </h1>
                            <div>
                                <h4 style="color: #fff; font-size: clamp(1rem, 2vw, 1.3rem); margin-bottom: 0.5rem;">
                                    Tanggal Dibuat: {{ $program->tanggal_dibuat }}
                                </h4>
                                <p style="color: #fff; font-size: clamp(1rem, 2vw, 1.2rem); margin: 0;">
                                    Status: {{ ucfirst($program->status_program) }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="padding: 3rem 0;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div style="margin-bottom: 4rem;">
                        <h2 style="font-size: clamp(1.5rem, 3vw, 2rem); margin-bottom: 1.5rem;">
                            Tentang Program
                        </h2>
                        <div style="margin-bottom: 2rem;">
                            <p style="font-size: clamp(1rem, 2vw, 1.3rem); line-height: 1.6; color: #333;">
                                {{ $program->tentang_program }}
                            </p>
                        </div>
                    </div>

                    <div style="margin-bottom: 4rem;">
                        <h2 style="font-size: clamp(1.5rem, 3vw, 2rem); margin-bottom: 1.5rem;">
                            Tujuan
                        </h2>
                        <div>
                            <p style="font-size: clamp(1rem, 2vw, 1.3rem); line-height: 1.6; color: #333;">
                                {{ $program->tujuan_program }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection