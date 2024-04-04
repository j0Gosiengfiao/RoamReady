<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoomRequest;
use App\Models\Activity;
use App\Models\Area;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Laravel\Facades\Image;

class AccommodationController extends Controller
{
    public function AllAccommodations()
    {
        $userId = Auth::user()->id;
        $rooms = Room::where('user_id', $userId)->latest()->paginate(3);
        return view('user.qnect.accommodation.index', compact("rooms"));
    }

    public function AddAccommodation()
    {
        $areas = Area::orderBy('area_name')->get();
        return view("user.qnect.accommodation.create", ['areas' => $areas]);
    }

    public function EditAccommodation(Room $accommodation)
    {
        //dd($room);
        $areas = Area::orderBy('area_name')->get();
        return view("user.qnect.accommodation.update", ['room' => $accommodation, 'areas' => $areas]);
    }

    public function StoreAccommodation(RoomRequest $request)
    {
        $userId = Auth::user()->id;
        $validatedData = $request->validated();

        if ($request->hasFile('room_img')) {
            $image = $request->file('room_img');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::read($image)->resize(370, 247)->save('upload/room/' . $name_gen);
            $save_url = 'upload/room/' . $name_gen;
        }

        //edit according to fillables
        Room::create([
            'room_name' => $validatedData['room_name'],
            'room_img' => $save_url ?? null,
            "user_id" => $userId,
            "room_rate" => $validatedData['room_rate'],
            "room_location" => $validatedData['room_location'],
            "room_start" => $validatedData['room_start'],
            "room_end" => $validatedData['room_end'],
            "room_max" => $validatedData['room_max']
        ]);

        return redirect()->back()->with('success', 'Accommodation registered successfully! Please wait for the administrator to approve the accommodation before starting operation.');
    }

    public function UpdateAccommodation(RoomRequest $request, Room $accommodation)
    {
        $validatedData = $request->validated();

        // Check if a new image is being uploaded
        if ($request->hasFile('room_img')) {
            // Delete old photo if it exists
            if ($accommodation->room_img) {
                $oldImagePath = public_path($accommodation->room_img);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload new photo
            $image = $request->file('room_img');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::read($image)->resize(370, 247)->save('upload/room/' . $name_gen);
            $save_url = 'upload/room/' . $name_gen;
        } else {
            // If no new image uploaded, keep the existing image path
            $save_url = $accommodation->room_img;
        }

        $accommodation->update([
            'room_name' => $validatedData['room_name'],
            'room_img' => $save_url ?? null,
            "room_rate" => $validatedData['room_rate'],
            "room_location" => $validatedData['room_location'],
            "room_start" => $validatedData['room_start'],
            "room_end" => $validatedData['room_end'],
            "room_max" => $validatedData['room_max']
        ]);

        return redirect()->back()->with('success', 'Accommodation updated successfully!');
    }

    public function DeleteAccommodation(Room $accommodation)
    {
        if (isset($accommodation->room_img)) {
            $img = $accommodation->room_img;
            unlink($img);
        }
        $accommodation->delete();
        return redirect()->route('user.qnect.accommodations')->with('success', 'Accommodation deleted successfully!');
    }
}
