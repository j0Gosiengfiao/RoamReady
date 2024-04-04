<?php

namespace App\Http\Controllers;

use App\Http\Requests\RestoRequest;
use App\Models\Area;
use App\Models\Resto;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Laravel\Facades\Image;

use Illuminate\Http\Request;

class RestoController extends Controller
{
    public function AllRestaurants()
    {
        $userId = Auth::user()->id;
        $restos = Resto::where('user_id', $userId)->latest()->paginate(3);
        return view("user.qnect.restaurant.index", compact("restos"));
    }

    public function AddRestaurant()
    {
        $areas = Area::orderBy('area_name')->get();
        return view("user.qnect.restaurant.create", ['areas' => $areas]);
    }

    public function EditRestaurant(Resto $resto)
    {
        $areas = Area::orderBy('area_name')->get();
        return view("user.qnect.restaurant.update", ['resto' => $resto, 'areas' => $areas]);
    }

    public function StoreRestaurant(RestoRequest $request)
    {
        $userId = Auth::user()->id;
        $validatedData = $request->validated();

        if ($request->hasFile('resto_img')) {
            $image = $request->file('resto_img');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::read($image)->resize(370, 247)->save('upload/resto/' . $name_gen);
            $save_url = 'upload/resto/' . $name_gen;
        }

        //edit according to fillables
        Resto::create([
            'resto_name' => $validatedData['resto_name'],
            'resto_img' => $save_url ?? null,
            "user_id" => $userId,
            "resto_rate" => $validatedData['resto_rate'],
            "resto_location" => $validatedData['resto_location'],
            "resto_start" => $validatedData['resto_start'],
            "resto_end" => $validatedData['resto_end'],
        ]);

        return redirect()->back()->with('success', 'Restaurant registered successfully! Please wait for the administrator to approve the request before starting operation.');
    }

    public function UpdateRestaurant(RestoRequest $request, Resto $resto)
    {
        $validatedData = $request->validated();

        // Check if a new image is being uploaded
        if ($request->hasFile('resto_img')) {
            // Delete old photo if it exists
            if ($resto->resto_img) {
                $oldImagePath = public_path($resto->resto_img);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload new photo
            $image = $request->file('resto_img');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::read($image)->resize(370, 247)->save('upload/resto/' . $name_gen);
            $save_url = 'upload/resto/' . $name_gen;
        } else {
            // If no new image uploaded, keep the existing image path
            $save_url = $resto->resto_img;
        }

        $resto->update([
            'resto_name' => $validatedData['resto_name'],
            'resto_img' => $save_url ?? null,
            "resto_rate" => $validatedData['resto_rate'],
            "resto_location" => $validatedData['resto_location'],
            "resto_start" => $validatedData['resto_start'],
            "resto_end" => $validatedData['resto_end'],
        ]);

        return redirect()->back()->with('success', 'Restaurant updated successfully!');
    }

    public function DeleteRestaurant(Resto $resto)
    {
        if (isset($resto->resto_img)) {
            $img = $resto->resto_img;
            unlink($img);
        }
        $resto->delete();
        return redirect()->route('user.qnect.restaurants')->with('success', 'Restaurant deleted successfully!');
    }
}
