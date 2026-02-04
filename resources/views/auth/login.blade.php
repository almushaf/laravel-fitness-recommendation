@extends('layouts.app')

@section('content')
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<div class="container-fluid min-vh-100">
    <div class="row min-vh-100">

        {{-- LEFT: Branding --}}
        <div class="login-left col-md-6 d-none d-md-flex flex-column justify-content-center align-items-center text-white px-5">
            <i class='bx bx-dumbbell mb-3' style="font-size: 4rem;"></i>
            <h1 class="fw-bold">GYM SYSTEM</h1>
            <p class="text-center opacity-75 mt-2">
                Sistem Rekomendasi Program Latihan Kebugaran<br>
                Berbasis Web
            </p>
        </div>

        {{-- RIGHT: Login --}}
        <div class="login-right col-12 col-md-6 d-flex justify-content-center align-items-center">
            <div class="login-card p-4 w-100" style="max-width: 420px;">
                <h5 class="fw-semibold mb-4 text-center">Masuk ke Akun</h5>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username"
                            class="form-control"
                            value="{{ old('username') }}"
                            required autofocus>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <input type="password" name="password"
                            class="form-control"
                            required>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary w-100 login-btn">
                            <span class="btn-text">
                                <i class='bx bx-log-in-circle me-1'></i> Login
                            </span>
                            <span class="btn-loading d-none">
                                <span class="spinner-border spinner-border-sm me-1"></span>
                                Memproses...
                            </span>
                        </button>
                    </div>
                </form>
                <script>
                    const loginForm = document.querySelector('form');
                    const loginButton = loginForm.querySelector('.login-btn');
                    const btnText = loginButton.querySelector('.btn-text');
                    const btnLoading = loginButton.querySelector('.btn-loading');

                    loginForm.addEventListener('submit', () => {
                        loginButton.disabled = true;
                        btnText.classList.add('d-none');
                        btnLoading.classList.remove('d-none');
                    });
                </script>
            </div>
        </div>

    </div>
</div>


@endsection