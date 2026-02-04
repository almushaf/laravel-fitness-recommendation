@extends('layouts.app')

@section('content')
<div class="container mt-4">

    {{-- Header --}}
    <div class="mb-4">
        <h2 class="fw-bold mb-0">Riwayat Latihan</h2>
        <small class="text-muted">
            Pengguna: <strong>{{ $user->username }}</strong>
        </small>
    </div>

    {{-- Card --}}
    <div class="card shadow-sm border-0">
        <div class="card-header bg-info text-white">
            <strong>Log Aktivitas Latihan</strong>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Tanggal</th>
                        <th>Latihan</th>
                        <th>Fokus Otot</th>
                        <th>Set × Reps</th>
                        <th>Beban</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($logs as $log)
                        <tr>
                            <td>
                                {{ \Carbon\Carbon::parse($log->log_date)
                                    ->translatedFormat('d M Y') }}
                            </td>

                            <td class="fw-semibold">
                                {{ $log->programDetail->exercise_name ?? '-' }}
                            </td>

                            <td>
                                {{ $log->programDetail->muscle_focus ?? '-' }}
                            </td>

                            <td>
                                {{ $log->actual_sets }} × {{ $log->actual_reps }}
                            </td>

                            <td>
                                @if($log->actual_weight > 0)
                                    {{ $log->actual_weight }} kg
                                @else
                                    <span class="badge bg-secondary">Bodyweight</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted py-4">
                                Belum ada riwayat latihan
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Tombol Kembali --}}
    <div class="mt-3">
        <a href="{{ route('admin.users.index') }}"
           class="btn btn-outline-secondary">
            ← Kembali ke Daftar Pengguna
        </a>
    </div>

</div>
@endsection
