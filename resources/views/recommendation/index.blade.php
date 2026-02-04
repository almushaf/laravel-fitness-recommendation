@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center">Rekomendasi Program Latihan</h1>

    @if($recommended)
        <section class="mb-5">
            <div class="card border-0 shadow-lg rounded-4">
                <div class="card-body p-4">

                    {{-- Judul --}}
                    <div class="mb-3">
                        <span class="badge bg-primary mb-2">Rekomendasi Terbaik</span>
                        <h3 class="fw-bold mb-1">
                            {{ $recommended->name }}
                        </h3>
                        <small class="text-muted">
                            Skor SAW: {{ number_format($recommended->score, 4) }}
                        </small>
                    </div>

                    {{-- Ringkasan --}}
                    <div class="d-flex flex-wrap gap-2 mb-3">
                        <span class="badge bg-success">Tujuan: {{ $recommended->goal }}</span>
                        <span class="badge bg-info text-dark">{{ $recommended->frequency }}x / minggu</span>
                        <span class="badge bg-warning text-dark">± {{ $recommended->duration }} menit</span>
                        <span class="badge bg-secondary">Level: {{ $recommended->experience_level }}</span>
                    </div>

                    {{-- Deskripsi --}}
                    <p class="mb-0 text-muted">
                        {{ $recommended->description }}
                    </p>

                </div>
            </div>
        </section>
    @endif

    @if($recommended && $recommended->details->count())
        <div class="d-flex justify-content-between align-items-center mt-4 mb-2">
            <h4 class="mb-0">Detail Latihan Program Ini</h4>
            <a href="{{ route('workout.history') }}" class="btn btn-outline-secondary btn-sm">📅 Lihat Riwayat</a>
        </div>

        @foreach ($recommended->details->groupBy('day') as $day => $exercises)
            <div class="d-flex align-items-center gap-2 mt-5 mb-3">
                <div class="badge bg-primary px-3 py-2 rounded-pill">
                    Hari {{ $day }}
                </div>
                <span class="text-muted small">
                    Fokus latihan hari {{ $day }}
                </span>
            </div>
            <ul class="list-group mb-3">
                @foreach ($exercises as $exercise)
                    @php
                        if (!$exercise->duration) {
                            $goal = $recommended->goal;

                            $sets = match($goal) {
                                'strength' => '4–5',
                                'muscle_gain' => '3–4',
                                'weight_loss' => '3–4',
                                default => $exercise->sets,
                            };

                            $reps = match($goal) {
                                'strength' => '3–6',
                                'muscle_gain' => '8–12',
                                'weight_loss' => '12–15',
                                default => $exercise->reps,
                            };
                        }
                    @endphp

                    <li class="list-group-item border-0 p-0 mb-3">
                        <div class="card shadow-sm rounded-4">
                            <div class="card-body p-3">

                                {{-- HEADER --}}
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div>
                                        <h6 class="fw-semibold mb-1">
                                            {{ $exercise->exercise_name }}
                                        </h6>

                                        <div class="small text-muted">
                                            @if($exercise->duration)
                                                Durasi {{ $exercise->duration }} menit
                                            @else
                                                {{ $sets }} set × {{ $reps }} repetisi
                                            @endif

                                            @if($exercise->muscle_focus)
                                                • Fokus: {{ $exercise->muscle_focus }}
                                            @endif
                                        </div>
                                    </div>

                                    <button type="button"
                                        class="btn btn-outline-primary btn-sm toggle-log-btn">
                                        {{ $exercise->logsToday ? 'Edit Log' : 'Isi Log' }}
                                    </button>
                                </div>

                                {{-- FORM LOG --}}
                                <form method="POST"
                                    action="{{ route('workout.log') }}"
                                    class="workout-log-form d-none mt-2">
                                    @csrf
                                    <input type="hidden" name="program_detail_id" value="{{ $exercise->id }}">
                                    <input type="hidden" name="log_date" value="{{ now()->toDateString() }}">

                                    <div class="row g-2 align-items-center">
                                        @if($exercise->duration)
                                            <div class="col-md-4">
                                                <input type="number" name="actual_duration"
                                                    class="form-control"
                                                    placeholder="Durasi (menit)"
                                                    min="1" required
                                                    value="{{ $exercise->logsToday->actual_duration ?? '' }}">
                                            </div>
                                        @else
                                            <div class="col-md-3">
                                                <input type="number" name="actual_sets"
                                                    class="form-control"
                                                    placeholder="Set"
                                                    min="1" required
                                                    value="{{ $exercise->logsToday->actual_sets ?? '' }}">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="number" name="actual_reps"
                                                    class="form-control actual-reps-input"
                                                    placeholder="Repetisi"
                                                    min="1" required
                                                    value="{{ $exercise->logsToday->actual_reps ?? '' }}">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="number" name="actual_weight"
                                                    class="form-control"
                                                    placeholder="Beban (kg)"
                                                    min="0" required
                                                    value="{{ $exercise->logsToday->actual_weight ?? '' }}">
                                            </div>
                                        @endif
                                        <div class="col-md-3">
                                            <button type="submit" class="btn btn-success btn-sm">
                                                Simpan
                                            </button>
                                        </div>
                                    </div>
                                </form>

                                {{-- INFO LOG --}}
                                @if($exercise->logsToday)
                                    <div class="mt-2 text-success small">
                                        ✅ <strong>Dicatat:</strong>
                                        @if($exercise->duration)
                                            {{ $exercise->logsToday->actual_duration }} menit
                                        @else
                                            {{ $exercise->logsToday->actual_sets }} set,
                                            {{ $exercise->logsToday->actual_reps }} rep,
                                            {{ $exercise->logsToday->actual_weight }} kg
                                        @endif
                                        <br>
                                        <small class="text-muted">
                                            Terakhir diperbarui: {{ $exercise->logsToday->updated_at->diffForHumans() }}
                                        </small>
                                    </div>
                                @endif

                            </div>
                        </div>
                    </li>
                    @endforeach

            </ul>
        @endforeach
    @endif

    @if(count($programs))
        <h4 class="mt-5">Program Lainnya</h4>
        <div class="list-group">
            @foreach ($programs as $program)
                <div class="list-group-item rounded-3 mb-2 border">
                    <strong>{{ $program->name }}</strong> – Skor: {{ number_format($program->score, 4) }}<br>
                    <small class="text-muted">
                        Level: {{ $program->experience_level }},
                        Tujuan: {{ $program->goal }},
                        Durasi: {{ $program->duration }} menit,
                        Rata-rata/hari: {{ number_format($program->avg_exercise, 1) }},
                        Variasi otot: {{ $program->muscle_variety }}
                    </small>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection

@push('scripts')
@if($recommended)
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.toggle-log-btn').forEach(button => {
        button.addEventListener('click', function () {
            const card = this.closest('.card');
            const form = card.querySelector('.workout-log-form');

            if (!form) {
                console.error('Form log tidak ditemukan');
                return;
            }

            form.classList.toggle('d-none');
        });
    });

    const goal = @json($recommended->goal ?? null);

    document.querySelectorAll('.actual-reps-input').forEach(input => {
        input.addEventListener('input', function () {
            const reps = parseInt(this.value);
            const alertBox = this.closest('.row').querySelector('.reps-alert');

            let maxReps = 12;
            if (goal === 'strength') maxReps = 6;
            else if (goal === 'muscle_gain') maxReps = 12;
            else if (goal === 'weight_loss') maxReps = 15;

            if (reps > maxReps) {
                if (!alertBox) {
                    const warning = document.createElement('div');
                    warning.className = 'text-warning small reps-alert mt-1';
                    warning.innerText = `⚠️ Repetisi melebihi batas untuk goal "${goal}". Pertimbangkan menambah beban di sesi berikutnya!`;
                    this.closest('.row').appendChild(warning);
                }
            } else {
                if (alertBox) alertBox.remove();
            }
        });
    });
});
</script>
@endif
@endpush
