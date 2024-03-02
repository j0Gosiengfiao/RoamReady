<?php

namespace App\Http\Controllers;
use App\Models\Activity;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Landing() {
        $categories = Category::orderBy('created_at', 'desc')->take(3)->get();
        $activities = Activity::orderBy('created_at', 'desc')->take(3)->get();
        return view('landing.index', compact('categories', 'activities'));
    }

    public function UserIndex() {
        return view('user.index');
    }

    public function UserLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
