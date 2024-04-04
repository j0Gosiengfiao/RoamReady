<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActivityRequest;
use App\Models\Activity;
use App\Models\Area;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Laravel\Facades\Image;

class ActivityController extends Controller
{
    public function AllActivities()
    {
        $userId = Auth::user()->id;
        $activities = Activity::where('user_id', $userId)->latest()->paginate(3);
        return view("user.qnect.activity.index", compact("activities"));
    }

    public function AddActivity()
    {
        $categories = Category::orderBy('category_name')->get();
        $areas = Area::orderBy('area_name')->get();
        return view("user.qnect.activity.create", ['areas' => $areas, 'categories' => $categories]);
    }

    public function EditActivity(Activity $activity)
    {
        //dd($activity);
        $categories = Category::orderBy('category_name')->get(); // Retrieve all categories
        $areas = Area::orderBy('area_name')->get();
        return view("user.qnect.activity.update", ['activity' => $activity, 'categories' => $categories, 'areas' => $areas]);
    }

    public function StoreActivity(ActivityRequest $request)
    {
        $userId = Auth::user()->id;
        $validatedData = $request->validated();

        if ($request->hasFile('activity_img')) {
            $image = $request->file('activity_img');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::read($image)->resize(370, 247)->save('upload/activity/' . $name_gen);
            $save_url = 'upload/activity/' . $name_gen;
        }

        //edit according to fillables
        Activity::create([
            'activity_name' => $validatedData['activity_name'], // Ensure that category_name is provided
            'activity_img' => $save_url ?? null, // Make category_img optional
            "category_id" => $validatedData['category_id'],
            "user_id" => $userId,
            "activity_price" => $validatedData['activity_price'],
            "activity_location" => $validatedData['activity_location'],
            "activity_age_limit" => $validatedData['activity_age_limit'],
            "activity_start" => $validatedData['activity_start'],
            "activity_end" => $validatedData['activity_end'],
            "activity_desc" => $validatedData['activity_desc'],
            "activity_max" => $validatedData['activity_max']
        ]);

        return redirect()->back()->with('success', 'Activity registered successfully! Please wait for the administrator to approve the activity before starting operation.');
    }

    public function UpdateActivity(ActivityRequest $request, Activity $activity)
    {
        $validatedData = $request->validated();

        // Check if a new image is being uploaded
        if ($request->hasFile('activity_img')) {
            // Delete old photo if it exists
            if ($activity->activity_img) {
                $oldImagePath = public_path($activity->activity_img);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload new photo
            $image = $request->file('activity_img');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::read($image)->resize(370, 247)->save('upload/activity/' . $name_gen);
            $save_url = 'upload/activity/' . $name_gen;
        } else {
            // If no new image uploaded, keep the existing image path
            $save_url = $activity->activity_img;
        }

        $activity->update([
            'activity_name' => $validatedData['activity_name'], // Ensure that category_name is provided
            'activity_img' => $save_url ?? null, // Make category_img optional
            "category_id" => $validatedData['category_id'],
            "activity_price" => $validatedData['activity_price'],
            "activity_location" => $validatedData['activity_location'],
            "activity_age_limit" => $validatedData['activity_age_limit'],
            "activity_start" => $validatedData['activity_start'],
            "activity_end" => $validatedData['activity_end'],
            "activity_desc" => $validatedData['activity_desc'],
            "activity_max" => $validatedData['activity_max']
        ]);

        return redirect()->back()->with('success', 'Activity updated successfully!');
    }

    public function DeleteActivity(Activity $activity)
    {
        if (isset($activity->activity_img)) {
            $img = $activity->activity_img;
            unlink($img);
        }
        $activity->delete();
        return redirect()->route('user.qnect.activities')->with('success', 'Activity deleted successfully!');
    }
}
