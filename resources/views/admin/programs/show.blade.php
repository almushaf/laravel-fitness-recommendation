@extends('layouts.app')

@section('content')
<div class="container mt-4">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-start mb-4">
        <div>
            <h3 class="fw-bold mb-1">
                Detail Program Latihan
            </h3>
            <small class="text-muted">
                {{ $program->name }}
            </small>
        </div>

        <a href="{{ route('admin.programs.index') }}"
           class="btn btn-outline-secondary">
            ← Kembali
        </a>
    </div>

    {{-- Informasi Program --}}
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">
            <div class="row g-3">

                <div class="col-md-4">
                    <strong>Tujuan</strong>
                    <div class="text-muted">
                        {{ ucfirst(str_replace('_', ' ', $program->goal)) }}
                    </div>
                </div>

                <div class="col-md-4">
                    <strong>Level</strong>
                    <div class="text-muted">
                        {{ ucfirst($program->experience_level) }}
                    </div>
                </div>

                <div class="col-md-4">
                    <strong>Frekuensi</strong>
                    <div class="text-muted">
                        {{ $program->frequency }}x / minggu
                    </div>
                </div>

                <div class="col-md-4">
                    <strong>Durasi Rata-rata</strong>
                    <div class="text-muted">
                        {{ $program->duration }} menit
                    </div>
                </div>

                <div class="col-md-8">
                    <strong>Deskripsi</strong>
                    <div class="text-muted">
                        {{ $program->description ?? 'Tidak ada deskripsi.' }}
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Detail Latihan --}}
    <h5 class="fw-semibold mb-3">
        Rincian Latihan per Hari
    </h5>

    @forelse($grouped as $day => $exercises)
        <div class="card shadow-sm border-0 mb-3">
            <div class="card-header bg-light fw-semibold">
                {{ $day }}
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Latihan</th>
                                <th>Otot Fokus</th>
                                <th>Sets</th>
                                <th>Reps</th>
                                <th>Durasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($exercises as $exercise)
                                <tr>
                                    <td class="fw-semibold">
                                        {{ $exercise->exercise_name }}
                                    </td>
                                    <td>{{ $exercise->muscle_focus }}</td>
                                    <td>{{ $exercise->sets ?? '-' }}</td>
                                    <td>{{ $exercise->reps ?? '-' }}</td>
                                    <td>
                                        {{ $exercise->duration ? $exercise->duration.' menit' : '-' }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @empty
        <div class="alert alert-info">
            Belum ada detail latihan untuk program ini.
        </div>
    @endforelse

</div>
@endsection
