<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestoRequest extends FormRequest
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
            "resto_name" => 'required|string|max:100',
            "resto_img" => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            "resto_rate" => "required|numeric|min:0",
            "resto_location" => "required|string|max:255",
            "resto_start" => "required|date_format:H:i", // Time format (24-hour) HH:MM
            "resto_end" => [
                "required",
                "date_format:H:i",
                $this->after_startRule() // Apply custom validation rule
            ],
        ];
    }

    protected function after_startRule()
    {
        return function ($attribute, $value, $fail) {
            $start = $this->input('resto_start');
            $end = $this->input('resto_end');

            // Check if end time is later than start time
            if ($start >= $end) {
                $fail('The end time must be later than the start time.');
            }
        };
    }


    public function messages()
    {
        return [
            'resto_name.required' => "The 'restaurant name' field is required.",
            'resto_name.string' => 'The restaurant name must be a string.',
            'resto_name.max' => 'The restaurant name may not be greater than :max characters.',

            'resto_img.image' => 'The restaurant image must be an image file.',
            'resto_img.mimes' => 'The restaurant image must be a file of type: jpeg, png, jpg, gif.',
            'resto_img.max' => 'The restaurant image may not be greater than :max kilobytes in size.',

            'resto_rate.required' => "The 'estimated rate per pax' field is required.",
            'resto_rate.numeric' => 'The estimated rate per pax must be a number.',
            'resto_rate.min' => 'The estimated rate per pax must be at least :min.',

            'resto_location.required' => "The 'location field' is required.",
            'resto_location.string' => 'The location must be a string.',
            'resto_location.max' => 'The location may not be greater than :max characters.',

            'resto_start.required' => "The 'start time of operation hours' field is required.",
            'resto_start.date_format' => 'The start time of operation hours must be in the format: HH:MM.',

            'resto_end.required' => "The 'end time of operation hours' field is required.",
            'resto_end.date_format' => 'The end time of operation hours must be in the format: HH:MM.',
        ];
    }
}
