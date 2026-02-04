@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Program: {{ $program->name }}</h2>

    <form action="{{ route('admin.programs.update', $program->id) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- Form utama --}}
        @include('admin.programs.form', ['program' => $program])

        <hr>
        <h5>Detail Latihan per Hari</h5>
        <small class="text-muted">Latihan yang sudah ada akan ditampilkan dan dapat diedit atau dihapus.</small>

        <div id="exercise-days-container"></div>

        <button type="button" class="btn btn-outline-primary mt-3" onclick="addDay()">+ Tambah Hari</button>

        <div class="mt-4">
            <button type="submit" class="btn btn-success">Update Program</button>
            <a href="{{ route('admin.programs.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
    const existingData = @json($groupedDetails ?? []);

    let dayCount = 0;

    window.onload = function () {
        for (const [dayName, exercises] of Object.entries(existingData)) {
            addDay(dayName, exercises);
        }
    };

    function addDay(dayName = '', exercises = []) {
        dayCount++;
        const container = document.getElementById('exercise-days-container');

        let html = `
            <div class="card mt-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h6 class="mb-0">Hari ke-${dayCount}</h6>
                        <button type="button" class="btn btn-sm btn-danger" onclick="this.closest('.card').remove()">Hapus Hari</button>
                    </div>
                    <div class="mb-3">
                        <label>Nama Hari</label>
                        <input type="text" name="days[${dayCount}][day]" class="form-control" value="${dayName}" placeholder="Contoh: Senin" required>
                    </div>
                    <div class="exercise-group">
        `;

        if (!exercises || exercises.length === 0) {
            html += generateExerciseRow(dayCount, 0);
        } else {
            exercises.forEach((exercise, index) => {
                html += generateExerciseRow(dayCount, index, exercise);
            });
        }

        html += `
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary mt-2" onclick="addExercise(this, ${dayCount})">+ Tambah Latihan</button>
                </div>
            </div>
        `;

        container.insertAdjacentHTML('beforeend', html);
    }

    function generateExerciseRow(dayIndex, exerciseIndex, data = {}) {
        return `
            <div class="row g-2 mb-2">
                <div class="col-md-4">
                    <input type="text" name="days[${dayIndex}][exercises][${exerciseIndex}][name]" class="form-control" value="${data.name ?? ''}" placeholder="Nama Latihan">
                </div>
                <div class="col-md-2">
                    <input type="text" name="days[${dayIndex}][exercises][${exerciseIndex}][muscle]" class="form-control" value="${data.muscle ?? ''}" placeholder="Otot Fokus">
                </div>
                <div class="col-md-2">
                    <input type="text" name="days[${dayIndex}][exercises][${exerciseIndex}][sets]" class="form-control" value="${data.sets ?? ''}" placeholder="Sets">
                </div>
                <div class="col-md-2">
                    <input type="text" name="days[${dayIndex}][exercises][${exerciseIndex}][reps]" class="form-control" value="${data.reps ?? ''}" placeholder="Reps">
                </div>
                <div class="col-md-2">
                    <input type="text" name="days[${dayIndex}][exercises][${exerciseIndex}][duration]" class="form-control" value="${data.duration ?? ''}" placeholder="Durasi (menit)">
                </div>
            </div>
        `;
    }

    function addExercise(button, dayIndex) {
        const group = button.parentElement.querySelector('.exercise-group');
        const index = group.querySelectorAll('.row').length;
        group.insertAdjacentHTML('beforeend', generateExerciseRow(dayIndex, index));
    }
</script>
@endpush
