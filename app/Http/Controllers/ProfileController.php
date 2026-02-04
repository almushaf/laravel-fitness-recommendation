<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $profile = $user->profile;

        if (!$profile) {
            return redirect()->route('profile.create')->with('warning', 'Silakan lengkapi profil Anda terlebih dahulu.');
        }

        return view('profile.show', compact('profile'));
    }

    public function create()
    {
        return view('profile.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'goal' => 'required|in:weight_loss,muscle_gain,strength',
            'frequency' => 'required|integer|min:1|max:7',
            'duration' => 'required|integer|min:30|max:120',
            'experience_level' => 'required|in:pemula,menengah,lanjutan',
        ]);

        Profile::updateOrCreate(
            ['user_id' => auth()->id()],
            $request->only('goal', 'frequency', 'duration', 'experience_level') + ['user_id' => auth()->id()]
        );

        return redirect()->route('profile')->with('success', 'Profil berhasil disimpan.');
    }

    public function edit()
    {
        $user = Auth::user();
        $profile = $user->profile;

        return view('profile.edit', compact('profile'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'goal' => 'required|in:weight_loss,muscle_gain,strength',
            'frequency' => 'required|integer|min:1|max:7',
            'duration' => 'required|integer|min:30|max:120',
            'experience_level' => 'required|in:pemula,menengah,lanjutan',
        ]);

        Profile::updateOrCreate(
            ['user_id' => auth()->id()],
            $request->only('goal', 'frequency', 'duration', 'experience_level')
        );

        return redirect()->route('profile')->with('success', 'Profil berhasil diperbarui.');
    }
}
