<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Tampilkan form registrasi.
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Proses registrasi pengguna baru.
     */
    public function register(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'username' => 'required|string|unique:users|max:255',
        'email' => 'required|email|unique:users,email|max:255',
        'password' => 'required|confirmed|min:8',
    ]);

    User::create([
    'name' => $request->name,
    'username' => $request->username,
    'email' => $request->email, // ✅ HARUS ADA INI
    'password' => Hash::make($request->password),
]);

    return redirect()->route('login')->with('status', 'Akun berhasil dibuat!');
}
}