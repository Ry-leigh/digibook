<?php

namespace App\Http\Controllers;

use App\Models\UserAchievement;
use App\Models\UserProgress;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserAchievementController extends Controller
{

    public function index()
    {
        $count = UserProgress::where('user_id', Auth::user()->id)->count();
        $achievements = UserAchievement::where('user_id', Auth::user()->id)->first();
        return view('achievements', compact('achievements', 'count'));
    }

    public function visitDictionary()
    {
        $user = UserAchievement::where('user_id', Auth::user()->id)->first();
        if ($user->visit_dictionary == 0) {
            $user->update([
                'visit_dictionary' => 1
            ]);
        }
        return redirect()->route('dashboard');
    }

    public function visitAbout()
    {
        $user = UserAchievement::where('user_id', Auth::user()->id)->first();
        if ($user->visit_about == 0) {
            $user->update([
                'visit_about' => 1
            ]);
        }
        return redirect()->route('dashboard');
    }

    public function destroy(UserAchievement $userAchievement)
    {

    }
}
