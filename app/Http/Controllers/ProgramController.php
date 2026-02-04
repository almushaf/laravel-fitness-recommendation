<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramDetail;

class ProgramController extends Controller
{
    public function alternatif(Request $request)
    {
        $latihan = ProgramDetail::where('muscle_focus', $request->muscle)
            ->where('exercise_name', '!=', $request->exclude)
            ->inRandomOrder()
            ->take(3)
            ->get();

        return view('recommendation.alternatif', compact('latihan'));
    }
}
