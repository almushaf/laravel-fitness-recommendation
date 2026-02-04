@extends('layouts.app')

@section('content')
<div class="container mt-4" style="max-width: 720px;">

    {{-- Header --}}
    <div class="text-center mb-4">
        <h2 class="fw-bold mb-1">Buat Profil Kebugaran</h2>
        <p class="text-muted mb-0">
            Lengkapi data latihan untuk mendapatkan rekomendasi program yang sesuai
        </p>
    </div>

    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body p-4">

            <form method="POST" action="{{ route('profile.store') }}">
                @csrf

                {{-- Tujuan --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">Tujuan Kebugaran</label>
                    <select name="goal" class="form-select" required>
                        <option value="">Pilih Tujuan</option>
                        <option value="weight_loss">Penurunan Berat Badan</option>
                        <option value="muscle_gain">Pembentukan Otot</option>
                        <option value="strength">Kekuatan</option>
                    </select>
                </div>

                {{-- Frekuensi --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">Frekuensi Latihan (per minggu)</label>
                    <input type="number"
                           name="frequency"
                           class="form-control"
                           min="1"
                           max="7"
                           placeholder="Contoh: 3"
                           required>
                    <small class="text-muted">
                        Umumnya direkomendasikan 3–5 kali per minggu.
                    </small>
                </div>

                {{-- Durasi --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">Durasi Latihan (menit)</label>
                    <input type="number"
                           name="duration"
                           class="form-control"
                           min="30"
                           max="120"
                           placeholder="Contoh: 60"
                           required>
                    <small class="text-muted">
                        Durasi ideal antara 30–90 menit per sesi.
                    </small>
                </div>

                {{-- Pengalaman --}}
                <div class="mb-4">
                    <label class="form-label fw-semibold">Tingkat Pengalaman</label>
                    <select name="experience_level" class="form-select" required>
                        <option value="">Pilih Level</option>
                        <option value="pemula">Pemula</option>
                        <option value="menengah">Menengah</option>
                        <option value="lanjutan">Lanjutan</option>
                    </select>
                    <small class="text-muted">
                        Pilih sesuai pengalaman latihan rutin atau di gym.
                    </small>
                </div>

                {{-- Action --}}
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('profile') }}" class="btn btn-outline-secondary">
                        Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">
                        Simpan Profil
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection