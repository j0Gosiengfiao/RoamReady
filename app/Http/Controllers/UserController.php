<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Index() {
        return view('landing.index');
    }

    public function UserDashboard() {
        return view('user.index');
    }
}
