<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItineraryRequest;
use App\Models\Activity;
use App\Models\Activity_Itinerary;
use App\Models\Itinerary;
use App\Models\Province;
use App\Models\Resto;
use App\Models\Room;
use App\Models\Room_Itinerary;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItineraryController extends Controller
{
    public function AllItineraries()
    {
        $userId = Auth::user()->id;
        $itineraries = Itinerary::where('user_id', $userId)->latest()->paginate(6);
        return view('user.itinerary.index', compact("itineraries"));
    }

    public function AddItinerary()
    {
        $provinces = Province::orderBy('province_name')->get();
        return view("user.itinerary.create", ['provinces' => $provinces]);
    }

    public function ShowItinerary($itinerary, $day)
    {
        $itinerary = Itinerary::findOrFail($itinerary);

        $start = new DateTime($itinerary->itinerary_start);
        $end = new DateTime($itinerary->itinerary_end);
        $days = $start->diff($end)->days + 1;

        $activities = Activity_Itinerary::where('itinerary_id', $itinerary->id)
            ->where('day', $day)
            ->get();

        if ($days > 2 && $day != 1) {
            $noonActivity = Activity_Itinerary::where('itinerary_id', $itinerary->id)
                ->where('day', $day)
                ->where('order', 1)
                ->first();

                $noonLocation = $noonActivity->activity->activity_location;
                $lunch = Resto::where('resto_location', $noonLocation)
                    ->inRandomOrder()
                    ->get();
        }

        $room = Room_Itinerary::where('itinerary_id', $itinerary->id)
            ->first();

        $restos = Resto::where('resto_location', $room->room->room_location)
            ->inRandomOrder()
            ->get();

        return view(
            "user.itinerary.show",
            [
                'itinerary' => $itinerary,
                'days' => $days,
                'activities' => $activities,
                'selectedDay' => $day,
                'room' => $room,
                'restos' => $restos,
                'lunch' => isset($lunch) ? $lunch : null
            ]
        );
    }

    public function StoreItinerary(ItineraryRequest $request)
    {
        $userId = Auth::user()->id;
        $validatedData = $request->validated();

        //Preparing the variables
        $budget = $validatedData['itinerary_price'];
        $start = new DateTime($validatedData['itinerary_start']);
        $end = new DateTime($validatedData['itinerary_end']);
        $startingLocation = Province::findOrFail($validatedData['itinerary_location']);
        // Compute the difference in days
        $numberOfNights = $start->diff($end)->days;
        $numberOfPax = $validatedData['itinerary_pax'];

        //Compute Estimated fare
        $distance = $startingLocation->distance;
        $fare = $distance * 25; //Save later
        $budget -= ($fare * 2);
        if ($budget < 0) {
            return redirect()->back()->with('error', "Insufficient budget.");
        }

        //Estimated budget for each meal and each person
        $budget -= (3 * 200 * $numberOfNights * $numberOfPax);
        if ($budget < 0) {
            return redirect()->back()->with('error', "Insufficient budget.");
        }

        //Estimated transfer from one municapilty to another
        $budget -= 3 * 100 * $numberOfNights * $numberOfPax;

        //Getting a hotel
        $room = Room::query()
            ->select('id', 'room_location', 'room_rate')
            ->inRandomOrder()
            ->whereRaw('(? > (room_rate * ?))', [$budget, $numberOfNights])
            ->where('room_max', '>=', $numberOfPax)
            ->first();

        if (!$room) {
            // Room not found, redirect back with flash message
            return redirect()->back()->with('error', "Sorry, we couldn't find a suitable room for your trip.");
        }

        $budget -= ($room->room_rate * $numberOfNights);

        $itinerary = Itinerary::create([
            'itinerary_name' => $validatedData['itinerary_name'], // Ensure that category_name is provided
            "user_id" => $userId,
            "itinerary_price" => $validatedData['itinerary_price'],
            "itinerary_location" => $validatedData['itinerary_location'],
            "itinerary_start" => $validatedData['itinerary_start'],
            "itinerary_end" => $validatedData['itinerary_end'],
            "itinerary_pax" => $validatedData['itinerary_pax']
        ]);

        Room_Itinerary::create([
            'itinerary_id' => $itinerary->id, // Ensure that category_name is provided
            'room_id' => $room->id
        ]);

        //Start of the selection of activities
        $activities = [];
        $addedActivityIds = [];
        $currentLoc = $room->room_location;

        //Number of nights is less than one
        if ($numberOfNights == 1) {
            for ($i = 0; $i < 2; $i++) {
                $activity = Activity::query()
                    ->select('id', 'activity_price')
                    ->inRandomOrder()
                    ->whereRaw('(? > (activity_price * ?))', [$budget, $numberOfPax])
                    ->where('activity_location', '=', $currentLoc)
                    ->whereNotIn('id', $addedActivityIds)
                    ->first();
                if (!$activity) {
                    break;
                }
                $activities[] = $activity;
                $addedActivityIds[] = $activity->id;
                $budget -= $activity->activity_price;
            }
        }

        //Number of nights is more than one
        if ($numberOfNights > 1) {
            for ($i = 0; $i < 3 * ($numberOfNights - 1); $i++) {
                $activity = Activity::query()
                    ->select('id', 'activity_location', 'activity_price')
                    ->inRandomOrder()
                    ->whereRaw('(? > (activity_price * ?))', [$budget, $numberOfPax])
                    ->whereNotIn('id', $addedActivityIds)
                    ->first();
                // Check if the activity is not empty
                if (!$activity) {
                    break;
                }
                $activities[] = $activity;
                $addedActivityIds[] = $activity->id;
                $budget -= $activity->activity_price;
            }
        }

        if (!empty($activities) && $numberOfNights == 1) {
            $order = 1;
            $day = 1;
            foreach ($activities as $activity) {
                Activity_Itinerary::create([
                    'itinerary_id' => $itinerary->id, // Ensure that category_name is provided
                    'activity_id' => $activity->id,
                    'lunch_location' => $currentLoc,
                    'order' => $order,
                    'day' => $day,
                    'fare' => 0,
                ]);
                $day++;
            }
        }

        if (!empty($activities) && $numberOfNights > 1) {
            $order = 1;
            $day = 2;
            foreach ($activities as $activity) {
                if ($currentLoc == $activity->activity_location) {
                    $fare = 0;
                } else {
                    $fare = 1;
                    $currentLoc = $activity->activity_location;
                }
                Activity_Itinerary::create([
                    'itinerary_id' => $itinerary->id, // Ensure that category_name is provided
                    'activity_id' => $activity->id,
                    'order' => $order,
                    'day' => $day,
                    'fare' => $fare,
                ]);
                $order++;
                if ($order > 3) {
                    $order = 1;
                    $currentLoc = $room->room_location;
                    $day++;
                }
            }
        }

        return redirect()->route('user.itineraries.show', ['itinerary' => $itinerary->id, '1'])->with('success', 'Itinerary generated successfully!');

    }

    public function DeleteItinerary(Itinerary $itinerary)
    {
        $itinerary->delete();
        return redirect()->route('user.itineraries')->with('success', 'Itinerary deleted successfully!');
    }
}
