<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
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
            "room_name" => 'required|string|max:40',
            "room_img" => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            "room_rate" => "required|numeric|min:0",
            "room_location" => "required|string|max:255",
            "room_start" => "required|date_format:H:i", // Time format (24-hour) HH:MM
            "room_end" => "required|date_format:H:i",
            "room_max" => "required|integer|min:1"
        ];
    }

    public function messages()
    {
        return [
            'room_name.required' => "The 'accommodation name' field is required.",
            'room_name.string' => 'The accommodation name must be a string.',
            'room_name.max' => 'The accommodation name may not be greater than :max characters.',

            'room_img.image' => 'The accommodation image must be an image file.',
            'room_img.mimes' => 'The accommodation image must be a file of type: jpeg, png, jpg, gif.',
            'room_img.max' => 'The accommodation image may not be greater than :max kilobytes in size.',

            'room_rate.required' => "The 'rate per night' field is required.",
            'room_rate.numeric' => 'The rate per night must be a number.',
            'room_rate.min' => 'The rate per night must be at least :min.',

            'room_location.required' => "The 'location field' is required.",
            'room_location.string' => 'The location must be a string.',
            'room_location.max' => 'The location may not be greater than :max characters.',

            'room_start.required' => "The 'check-in time' field is required.",
            'room_start.date_format' => 'The check-in time must be in the format: HH:MM.',

            'room_end.required' => "The 'check-out time' field is required.",
            'room_end.date_format' => 'The check-out time must be in the format: HH:MM.',

            'room_max.required' => "The 'maximum number of guests' field is required.",
            'room_max.integer' => 'The maximum number of guests must be an integer.',
            'room_max.min' => 'The maximum number of guests must be at least :min.',
        ];
    }
}
