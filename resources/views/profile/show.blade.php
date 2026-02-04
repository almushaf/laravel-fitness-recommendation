@extends('layouts.app')

@section('content')
<div class="container mt-4" style="max-width: 720px;">

    {{-- Header --}}
    <div class="text-center mb-4">
        <h2 class="fw-bold mb-1">Profil Kebugaran</h2>
        <p class="text-muted mb-0">
            Ringkasan preferensi latihan yang digunakan untuk rekomendasi program
        </p>
    </div>

    {{-- Alert --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Card Profile --}}
    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body p-4">

            <div class="row g-3">

                {{-- Tujuan --}}
                <div class="col-md-6">
                    <div class="p-3 bg-light rounded-3 h-100">
                        <small class="text-muted d-block mb-1">Tujuan Kebugaran</small>
                        <strong class="fs-6">
                            @switch($profile->goal)
                                @case('weight_loss') Penurunan Berat Badan @break
                                @case('muscle_gain') Pembentukan Otot @break
                                @case('strength') Kekuatan @break
                                @default -
                            @endswitch
                        </strong>
                    </div>
                </div>

                {{-- Frekuensi --}}
                <div class="col-md-6">
                    <div class="p-3 bg-light rounded-3 h-100">
                        <small class="text-muted d-block mb-1">Frekuensi Latihan</small>
                        <strong class="fs-6">
                            {{ $profile->frequency }} kali / minggu
                        </strong>
                    </div>
                </div>

                {{-- Durasi --}}
                <div class="col-md-6">
                    <div class="p-3 bg-light rounded-3 h-100">
                        <small class="text-muted d-block mb-1">Durasi Latihan</small>
                        <strong class="fs-6">
                            {{ $profile->duration }} menit / sesi
                        </strong>
                    </div>
                </div>

                {{-- Level --}}
                <div class="col-md-6">
                    <div class="p-3 bg-light rounded-3 h-100">
                        <small class="text-muted d-block mb-1">Tingkat Pengalaman</small>
                        <strong class="fs-6">
                            {{ ucfirst($profile->experience_level) }}
                        </strong>
                    </div>
                </div>

            </div>

            {{-- Action --}}
            <div class="d-flex justify-content-between align-items-center mt-4">
                <a href="{{ route('profile.edit') }}" class="btn btn-outline-warning">
                    ✏️ Edit Profil
                </a>

                <a href="{{ route('recommendation') }}" class="btn btn-primary">
                    💪 Lihat Rekomendasi
                </a>
            </div>

        </div>
    </div>
</div>
@endsection
