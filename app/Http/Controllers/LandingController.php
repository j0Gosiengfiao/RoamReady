<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Category;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function AllCategories()
    {
        $categories = Category::orderBy('category_name')->get();
        return view('landing.category', compact('categories'));
    }
    public function AllActivities()
    {
        $activities = Activity::orderBy('activity_name')->paginate(6);
        return view('landing.activity', compact('activities'));
    }

    public function SelectCategories($category)
    {
        $activities = Activity::where('category_id', $category)
                    ->orderBy('activity_name')
                    ->paginate(6);
        return view('landing.activity', compact('activities'));
    }

    public function ShowActivity(Activity $activity)
    {
        return view('landing.activity-show', ['activity' => $activity]);
    }
}
