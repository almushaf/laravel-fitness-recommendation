<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Rekomendasi Latihan Kebugaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    @stack('styles')
</head>
<body class="app-bg app-layout">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg app-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Sistem Latihan Kebugaran</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Kiri -->
                <ul class="navbar-nav me-auto">
                    @auth
                        {{-- Menu untuk User Biasa --}}
                        @if(Auth::user()->role === 'user')
                            {{-- Profil selalu tampil --}}
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('profile*') ? 'active' : '' }}"
                                href="{{ route('profile') }}">
                                    Profil
                                </a>
                            </li>

                            {{-- Rekomendasi & Riwayat hanya muncul jika:
                                1. User punya profile
                                2. BUKAN di halaman create/edit --}}
                            @if(
                                Auth::user()->profile &&
                                !request()->routeIs('profile.create') &&
                                !request()->routeIs('profile.edit')
                            )
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->routeIs('recommendation*') ? 'active' : '' }}"
                                    href="{{ route('recommendation') }}">
                                        Rekomendasi
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link {{ request()->routeIs('workout.history*') ? 'active' : '' }}"
                                    href="{{ route('workout.history') }}">
                                        Riwayat Latihan
                                    </a>
                                </li>
                            @endif
                        @endif



                        {{-- Menu untuk Admin --}}
                        @if(Auth::user()->role === 'admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard Admin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.users.index') }}">Kelola Pengguna</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.programs.index') }}">Kelola Program</a>
                            </li>
                        @endif
                    @endauth
                </ul>

                <!-- Kanan -->
                <ul class="navbar-nav ms-auto">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Daftar</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <button class="btn btn-light border dropdown-toggle d-flex align-items-center gap-2"
                                data-bs-toggle="dropdown">
                                <i class="bx bx-user-circle fs-5"></i>
                                {{ Auth::user()->username }}
                            </button>

                            <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                                <li>
                                    <a class="dropdown-item" href="{{ route('profile') }}">
                                        👤 Profil Saya
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button class="dropdown-item text-danger">
                                            🚪 Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten Utama -->
    <main class="app-main">
    <div class="container">
        @yield('content')
    </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
    @stack('scripts')
</body>
</html>
