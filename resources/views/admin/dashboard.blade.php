@extends('layouts.app')

@section('content')
<div class="container mt-4">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-0">Dashboard Admin</h2>
            <small class="text-muted">Monitoring pengguna dan program latihan</small>
        </div>
    </div>

    {{-- Statistik Ringkas --}}
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6 class="text-muted">Total Pengguna</h6>
                    <h3 class="fw-bold">{{ $users->count() }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6 class="text-muted">Pengguna Punya Profil</h6>
                    <h3 class="fw-bold">
                        {{ $users->filter(fn($u) => $u->profile)->count() }}
                    </h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6 class="text-muted">Program Aktif</h6>
                    <h3 class="fw-bold">
                        {{ $users->filter(fn($u) => optional($u->profile)->program)->count() }}
                    </h3>
                </div>
            </div>
        </div>
    </div>

    {{-- Tabel Pengguna --}}
    <div class="card shadow-sm border-0">
        <div class="card-header bg-dark text-white">
            <strong>Data Pengguna</strong>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Goal</th>
                        <th>Level</th>
                        <th>Program</th>
                        <th>Frekuensi</th>
                        <th>Durasi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td class="fw-semibold">{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>

                            {{-- Goal --}}
                            <td>
                                @if($user->profile)
                                    <span class="badge bg-primary">
                                        {{ ucfirst(str_replace('_',' ', $user->profile->goal)) }}
                                    </span>
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>

                            {{-- Level --}}
                            <td>
                                @if($user->profile)
                                    <span class="badge bg-info text-dark">
                                        {{ ucfirst($user->profile->experience_level) }}
                                    </span>
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>

                            {{-- Program --}}
                            <td>{{ $user->profile->program->name ?? '-' }}</td>

                            {{-- Frekuensi --}}
                            <td>
                                {{ $user->profile->program->frequency ?? '-' }}
                                @if($user->profile && $user->profile->program)
                                    x/minggu
                                @endif
                            </td>

                            {{-- Durasi --}}
                            <td>
                                @if($user->profile && $user->profile->program)
                                    ±{{ $user->profile->program->duration }} menit
                                @else
                                    -
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted py-4">
                                Tidak ada data pengguna
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
