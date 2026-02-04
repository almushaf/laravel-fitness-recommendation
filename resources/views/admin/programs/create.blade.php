@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Tambah Program Latihan</h2>

    <form action="{{ route('admin.programs.store') }}" method="POST">
        @csrf

        {{-- Form utama --}}
        @include('admin.programs.form', ['program' => null])

        <hr>
        <h5>Detail Latihan per Hari</h5>
        <small class="text-muted">Klik "Tambah Hari" untuk mulai mengisi.</small>

        <div id="exercise-days-container"></div>

        <button type="button" class="btn btn-outline-primary mt-3" onclick="addDay()">+ Tambah Hari</button>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.programs.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
    let dayCount = 0;

    function addDay() {
        dayCount++;
        const container = document.getElementById('exercise-days-container');
        const html = `
            <div class="card mt-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h6 class="mb-0">Hari ke-${dayCount}</h6>
                        <button type="button" class="btn btn-sm btn-danger" onclick="this.closest('.card').remove()">Hapus Hari</button>
                    </div>
                    <div class="mb-3">
                        <label>Nama Hari</label>
                        <input type="text" name="days[${dayCount}][day]" class="form-control" placeholder="Contoh: Senin" required>
                    </div>
                    <div class="exercise-group">
                        ${generateExerciseRow(dayCount, 0)}
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary mt-2" onclick="addExercise(this, ${dayCount})">+ Tambah Latihan</button>
                </div>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', html);
    }

    function generateExerciseRow(dayIndex, exerciseIndex) {
        return `
            <div class="row g-2 mb-2">
                <div class="col-md-4">
                    <input type="text" name="days[${dayIndex}][exercises][${exerciseIndex}][name]" class="form-control" placeholder="Nama Latihan">
                </div>
                <div class="col-md-2">
                    <input type="text" name="days[${dayIndex}][exercises][${exerciseIndex}][muscle]" class="form-control" placeholder="Otot Fokus">
                </div>
                <div class="col-md-2">
                    <input type="text" name="days[${dayIndex}][exercises][${exerciseIndex}][sets]" class="form-control" placeholder="Sets">
                </div>
                <div class="col-md-2">
                    <input type="text" name="days[${dayIndex}][exercises][${exerciseIndex}][reps]" class="form-control" placeholder="Reps">
                </div>
                <div class="col-md-2">
                    <input type="text" name="days[${dayIndex}][exercises][${exerciseIndex}][duration]" class="form-control" placeholder="Durasi (menit)">
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
