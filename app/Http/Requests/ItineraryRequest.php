<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItineraryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "itinerary_name" => 'required|string|max:20',
            "itinerary_price" => "required|numeric|min:0",
            "itinerary_location" => "required|exists:provinces,id",
            "itinerary_start" => "required|date", // Time format (24-hour) HH:MM
            "itinerary_end" => [
                "required",
                "date",
                $this->after_startRule() // Apply custom validation rule
            ],
            "itinerary_pax" => "required|integer|min:1"
        ];
    }

    public function after_startRule()
    {
        return function ($attribute, $value, $fail) {
            $start = $this->input('itinerary_start');
            $end = $this->input($attribute);

            if ($start && $end && strtotime($end) <= strtotime($start)) {
                $fail('The end date must be after the start date.');
            }
        };
    }

    public function messages()
    {
        return [
            'itinerary_name.required' => "The 'itinerary name' field is required.",
            'itinerary_name.string' => 'The itinerary name must be a string.',
            'itinerary_name.max' => 'The itinerary name may not be greater than :max characters.',

            'itinerary_price.required' => "The 'budget' field is required.",
            'itinerary_price.numeric' => 'The budget must be a number.',
            'itinerary_price.min' => 'The budget must be at least :min.',

            'itinerary_location.required' => "The 'starting location' field is required.",
            'itinerary_location.exists' => 'The starting location is invalid',

            'itinerary_start.required' => "The 'start date' field is required.",
            'itinerary_start.date_format' => 'The start date must be in a date format.',

            'itinerary_end.required' => "The 'end date' field is required.",
            'itinerary_end.date_format' => 'The end date must be in a date format.',

            'itinerary_pax.required' => "The 'pax' field is required.",
            'itinerary_pax.integer' => 'The pax must be an integer.',
            'itinerary_pax.min' => 'The pax must be at least :min.',
        ];
    } 
}
