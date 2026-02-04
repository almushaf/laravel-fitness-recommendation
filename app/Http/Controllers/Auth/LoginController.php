<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);

            // 🔁 Redirect berdasarkan role
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard'); // ✅ redirect ke dashboard
            } else {
                // Jika belum punya profil, arahkan ke form profil
                if (!$user->profile) {
                    return redirect()->route('profile.create')
                        ->with('warning', 'Lengkapi profil Anda terlebih dahulu.');
                }
                return redirect()->route('recommendation');
            }
        }

        return back()->withErrors(['username' => 'Username atau password salah.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
