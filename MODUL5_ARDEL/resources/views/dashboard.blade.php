@extends('layouts.app')

@section('title', 'Dashboard - Universitas EAD')

@section('content')
    <div class="text-center mb-4">
        <h1 class="fw-bold"> Selamat Datang! </h1>
        <p class="text-secondary"> 😊 Kelola data dosen dan mahasiswa dengan mudah 😊</p>
    </div>

    <div class="row g-4">
        @foreach ([ 
            ['Dosen', 'teacher.png', 'primary', 'dosens.index'], 
            ['Mahasiswa', 'student-male.png', 'danger', 'mahasiswas.index'] 
        ] as $item)
            <div class="col-lg-6">
                <div class="card shadow-lg hover-animate" style="background-color: #{{ $loop->index ? 'FFC1E3' : 'FFECB3' }};">
                    <div class="card-body text-center">
                        <img src="https://img.icons8.com/color/64/{{ $item[1] }}" alt="{{ $item[0] }} Icon" class="mb-3">
                        <h5 class="fw-bold"> Manajemen {{ $item[0] }}</h5>
                        <a href="{{ route($item[3]) }}" class="btn btn-outline-{{ $item[2] }} mt-2">Kelola {{ $item[0] }}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="text-center mt-4">
        <small class="text-secondary">^_^ Universitas EAD ^_^</small>
    </div>

    <style>
        .hover-animate { transition: transform 0.3s, box-shadow 0.3s; }
        .hover-animate:hover { transform: translateY(-8px); box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); }
    </style>
@endsection
