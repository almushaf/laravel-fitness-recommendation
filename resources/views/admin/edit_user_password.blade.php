@extends('layouts.app')

@section('content')
<div class="container mt-4">

    {{-- Header --}}
    <div class="mb-4">
        <h2 class="fw-bold mb-1">Edit Password Pengguna</h2>
        <small class="text-muted">
            Username: <strong>{{ $user->username }}</strong>
        </small>
    </div>

    {{-- Alert sukses --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Card --}}
    <div class="card shadow-sm border-0">
        <div class="card-header bg-warning text-dark">
            <strong>Form Ubah Password</strong>
        </div>

        <div class="card-body">
            <form method="POST"
                  action="{{ route('admin.users.password.update', $user->id) }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Password Baru
                    </label>
                    <input type="password"
                           name="new_password"
                           class="form-control"
                           placeholder="Minimal 8 karakter"
                           required>
                    <small class="text-muted">
                        Gunakan password yang kuat dan mudah diingat pengguna.
                    </small>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.users.index') }}"
                       class="btn btn-outline-secondary">
                        ← Kembali
                    </a>

                    <button type="submit"
                            class="btn btn-warning">
                        Update Password
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
