<?php

namespace App\Http\Controllers;
use App\Models\Activity;
use App\Models\Category;
use App\Models\Resto;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Landing() {
        $categories = Category::orderBy('created_at', 'desc')->take(6)->get();
        $activities = Activity::orderBy('created_at', 'desc')->take(6)->get();
        return view('landing.index', compact('categories', 'activities'));
    }

    public function UserIndex() {
        $activities = Activity::orderBy('created_at')->get();
        $rooms = Room::orderBy('created_at')->get();
        $restos = Resto::orderBy('created_at')->get();
        return view('user.index', compact('activities', 'restos', 'rooms'));
    }

    public function UserLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
