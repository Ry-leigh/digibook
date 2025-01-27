<?php

namespace App\Http\Controllers;

use App\Models\UserProgress;
use Illuminate\Support\Facades\Auth;

class UserProgressController extends Controller
{
    public function index()
    {
        $count = UserProgress::where('user_id', Auth::user()->id)->count();
        return view('chapters', compact('count'));
    }

    public function show($chapter)
    {
        return view('chapter.'.$chapter, compact('chapter'));
    }

    public function create($chapter)
    {
        UserProgress::firstOrCreate([
            'user_id' =>Auth::user()->id,
            'finished' => $chapter
        ]);

        return redirect()->route('chapters.index');
    }

}
