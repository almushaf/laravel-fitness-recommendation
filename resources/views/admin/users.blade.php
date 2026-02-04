@extends('layouts.app')

@section('content')
<div class="container mt-4">

    {{-- Header --}}
    <div class="mb-4">
        <h2 class="fw-bold mb-0">Daftar Pengguna</h2>
        <small class="text-muted">Manajemen data pengguna sistem</small>
    </div>

    {{-- Card Wrapper --}}
    <div class="card shadow-sm border-0">
        <div class="card-header bg-dark text-white">
            <strong>Data Pengguna</strong>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Goal</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($users as $user)
                        <tr>
                            <td class="fw-semibold">{{ $user->name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>

                            {{-- Role --}}
                            <td>
                                @if($user->role === 'admin')
                                    <span class="badge bg-danger">Admin</span>
                                @else
                                    <span class="badge bg-secondary">User</span>
                                @endif
                            </td>

                            {{-- Goal --}}
                            <td>
                                @if($user->role === 'user' && $user->profile)
                                    <span class="badge bg-primary">
                                        {{ ucfirst(str_replace('_',' ', $user->profile->goal)) }}
                                    </span>
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>

                            {{-- Aksi --}}
                            <td class="text-center">
                                @if($user->role === 'user')
                                    <a href="{{ route('admin.users.logs', $user->id) }}"
                                       class="btn btn-sm btn-outline-info">
                                        Log
                                    </a>

                                    <a href="{{ route('admin.users.edit', $user->id) }}"
                                       class="btn btn-sm btn-outline-warning">
                                        Password
                                    </a>
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted py-4">
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