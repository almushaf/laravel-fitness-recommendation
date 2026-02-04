@extends('layouts.app')

@section('content')
<div class="container mt-4">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Kelola Program Latihan</h2>
            <small class="text-muted">
                Daftar program latihan yang tersedia dalam sistem
            </small>
        </div>

        <a href="{{ route('admin.programs.create') }}"
           class="btn btn-primary">
            ➕ Tambah Program
        </a>
    </div>

    {{-- Alert --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Card Table --}}
    <div class="card shadow-sm border-0">
        <div class="card-body p-0">

            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Nama Program</th>
                            <th>Tujuan</th>
                            <th>Level</th>
                            <th>Frekuensi</th>
                            <th>Durasi</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($programs as $program)
                            <tr>
                                <td class="fw-semibold">
                                    {{ $program->name }}
                                </td>
                                <td>
                                    {{ ucfirst(str_replace('_',' ', $program->goal)) }}
                                </td>
                                <td>
                                    {{ ucfirst($program->experience_level) }}
                                </td>
                                <td>
                                    {{ $program->frequency }}x / minggu
                                </td>
                                <td>
                                    {{ $program->duration }} menit
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('admin.programs.show', $program->id) }}"
                                       class="btn btn-sm btn-outline-info">
                                        Lihat
                                    </a>

                                    <a href="{{ route('admin.programs.edit', $program->id) }}"
                                       class="btn btn-sm btn-outline-warning">
                                        Edit
                                    </a>

                                    <form action="{{ route('admin.programs.destroy', $program->id) }}"
                                          method="POST"
                                          class="d-inline"
                                          onsubmit="return confirm('Yakin ingin menghapus program ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-outline-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6"
                                    class="text-center text-muted py-4">
                                    Belum ada program latihan yang tersedia.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>

        </div>
    </div>
</div>
@endsection
