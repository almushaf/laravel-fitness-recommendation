<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WorkoutLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Ambil semua user yang punya profile + program terkait
        $users = User::with(['profile.program'])
        ->where('role', 'user') // ⬅️ hanya user biasa
        ->whereHas('profile')
        ->get();

        return view('admin.dashboard', compact('users'));
    }

    public function users()
    {
        $users = User::with('profile')->get();
        return view('admin.users', compact('users'));
    }

    public function userLogs($userId)
    {
        $user = User::with('profile')->findOrFail($userId);
        $logs = WorkoutLog::with('programDetail')
            ->where('user_id', $userId)
            ->latest('log_date')
            ->get();

        return view('admin.user_logs', compact('user', 'logs'));
    }

    // ✅ Tampilkan halaman edit user (termasuk ubah password)
    public function editUser(User $user)
    {
        return view('admin.edit_user_password', compact('user'));
    }
    // ✅ Simpan password baru yang diubah oleh admin
    public function updatePassword(Request $request, User $user)
    {
        $request->validate([
            'new_password' => 'required|min:6',
        ]);

        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        return back()->with('success', 'Password pengguna berhasil diubah.');
    }
}