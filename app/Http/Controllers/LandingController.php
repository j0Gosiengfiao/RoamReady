<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function AllCategories() {
        $categories = Category::orderBy('category_name')->get();
        return view('landing.category', compact('categories'));
    }
}
