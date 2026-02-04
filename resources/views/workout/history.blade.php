@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Riwayat Latihan</h1>

    @forelse($logs as $date => $entries)
        <div class="card mb-4 shadow-sm">
            <div class="card-header bg-light">
                <strong>Hari {{ \Carbon\Carbon::parse($date)->translatedFormat('l, d M Y') }}</strong>
            </div>
            <ul class="list-group list-group-flush">
                @foreach($entries as $log)
                    <li class="list-group-item">
                        <strong>{{ $log->programDetail->exercise_name }}</strong><br>

                        @if($log->actual_duration)
                            Durasi: {{ $log->actual_duration }} menit
                        @else
                            Set: {{ $log->actual_sets ?? '-' }} | 
                            Repetisi: {{ $log->actual_reps ?? '-' }} | 
                            Beban: {{ $log->actual_weight ?? '-' }} kg
                        @endif

                        <small class="text-muted d-block mt-1">
                            Terakhir diperbarui: {{ $log->updated_at->diffForHumans() }}
                        </small>
                        <a href="{{ route('workout.progress', ['exercise' => $log->programDetail->exercise_name]) }}"
                        class="btn btn-sm btn-outline-primary mt-2">
                            📈 Lihat Grafik
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    @empty
        <div class="alert alert-info">Belum ada log latihan.</div>
    @endforelse
</div>
@endsection
