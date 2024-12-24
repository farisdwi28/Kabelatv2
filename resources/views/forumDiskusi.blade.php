@extends('layouts.master2')

@section('title', 'Forum Diskusi')
@include('layouts.sidebar')

<x-page-title title="Beranda" pagetitle="Forum Diskusi" maintitle="Forum Diskusi" />
@section('content')
    <div class="forum-discussion-area mt-5">
        <div class="container">
            <div class="discussion-list">
                @foreach ($diskusi as $d)
                    <div class="discussion-item mb-4 p-4 border rounded">
                        <h4 class="text-2xl font-bold">{{ $d->topik_diskusi }}</h4>
                        <p class="text-muted">
                            Diposting pada {{ \Carbon\Carbon::parse($d->tglpost_diskusi)->translatedFormat('d F Y H:i') }}
                        </p>
                        <p class="mt-3">{{ $d->isi_diskusi }}</p>
                        <a href="{{ route('detaildiskusi', $d->kd_diskusi) }}" 
                            class="btn btn-sm text-white shadow-sm mt-3 mb-3"
                            style="background-color: #104041;">
                            Lihat Detail
                         </a>                      
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
