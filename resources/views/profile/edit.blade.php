@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            {{-- Card --}}
            <div class="card shadow-sm border-0 rounded-4">

                {{-- Header --}}
                <div class="card-header bg-warning bg-gradient text-dark rounded-top-4">
                    <h4 class="mb-0 fw-semibold">
                        ✏️ Edit Profil Kebugaran
                    </h4>
                </div>

                {{-- Body --}}
                <div class="card-body px-4 py-4">

                    <p class="text-muted mb-4">
                        Perbarui data profil kebugaran Anda untuk menyesuaikan rekomendasi program latihan yang diberikan sistem.
                    </p>

                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PUT')

                        {{-- Tujuan Kebugaran --}}
                        <div class="mb-3">
                            <label for="goal" class="form-label fw-semibold">
                                Tujuan Kebugaran
                            </label>
                            <select name="goal" id="goal" class="form-select" required>
                                <option value="">Pilih Tujuan</option>
                                <option value="weight_loss" {{ $profile->goal == 'weight_loss' ? 'selected' : '' }}>
                                    Penurunan Berat Badan
                                </option>
                                <option value="muscle_gain" {{ $profile->goal == 'muscle_gain' ? 'selected' : '' }}>
                                    Pembentukan Otot
                                </option>
                                <option value="strength" {{ $profile->goal == 'strength' ? 'selected' : '' }}>
                                    Kekuatan
                                </option>
                            </select>
                        </div>

                        {{-- Frekuensi --}}
                        <div class="mb-3">
                            <label for="frequency" class="form-label fw-semibold">
                                Frekuensi Latihan / Minggu
                            </label>
                            <input type="number"
                                   name="frequency"
                                   id="frequency"
                                   class="form-control"
                                   min="1"
                                   max="7"
                                   value="{{ $profile->frequency }}"
                                   required>
                            <small class="text-muted">
                                Contoh: 3–5 kali latihan per minggu
                            </small>
                        </div>

                        {{-- Durasi --}}
                        <div class="mb-3">
                            <label for="duration" class="form-label fw-semibold">
                                Durasi Latihan per Sesi (menit)
                            </label>
                            <input type="number"
                                   name="duration"
                                   id="duration"
                                   class="form-control"
                                   min="30"
                                   max="120"
                                   value="{{ $profile->duration }}"
                                   required>
                            <small class="text-muted">
                                Disarankan antara 30–120 menit per sesi
                            </small>
                        </div>

                        {{-- Level --}}
                        <div class="mb-4">
                            <label for="experience_level" class="form-label fw-semibold">
                                Tingkat Pengalaman
                            </label>
                            <select name="experience_level" id="experience_level" class="form-select" required>
                                <option value="">Pilih Level</option>
                                <option value="pemula" {{ $profile->experience_level == 'pemula' ? 'selected' : '' }}>
                                    Pemula
                                </option>
                                <option value="menengah" {{ $profile->experience_level == 'menengah' ? 'selected' : '' }}>
                                    Menengah
                                </option>
                                <option value="lanjutan" {{ $profile->experience_level == 'lanjutan' ? 'selected' : '' }}>
                                    Lanjutan
                                </option>
                            </select>
                        </div>

                        {{-- Button --}}
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('profile') }}" class="btn btn-outline-secondary">
                                ⬅ Kembali
                            </a>

                            <button type="submit" class="btn btn-warning fw-semibold">
                                💾 Simpan Perubahan
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection