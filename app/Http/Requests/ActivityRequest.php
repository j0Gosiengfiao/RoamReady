<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivityRequest extends FormRequest
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
            "activity_name" => 'required|string|max:20',
            "activity_img" => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            "category_id" => 'required|exists:categories,id',
            "activity_price" => "required|numeric|min:0",
            "activity_location" => "required|string|max:255",
            "activity_age_limit" => "required|boolean",
            "activity_start" => "required|date_format:H:i", // Time format (24-hour) HH:MM
            "activity_end" => [
                "required",
                "date_format:H:i",
                $this->after_startRule() // Apply custom validation rule
            ],
            "activity_desc" => "required|string|max:255",
            "activity_max" => "required|integer|min:1"
        ];
    }

    protected function after_startRule()
    {
        return function ($attribute, $value, $fail) {
            $start = $this->input('activity_start');
            $end = $this->input('activity_end');

            // Check if end time is later than start time
            if ($start >= $end) {
                $fail('The end time must be later than the start time.');
            }
        };
    }

    public function messages()
    {
        return [
            'activity_name.required' => 'The activity name field is required.',
            'activity_name.string' => 'The activity name must be a string.',
            'activity_name.max' => 'The activity name may not be greater than :max characters.',

            'activity_img.image' => 'The activity image must be an image file.',
            'activity_img.mimes' => 'The activity image must be a file of type: jpeg, png, jpg, gif.',
            'activity_img.max' => 'The activity image may not be greater than :max kilobytes in size.',

            'category_id.required' => 'The category field is required.',
            'category_id.exists' => 'The selected category is invalid.',

            'activity_price.required' => 'The price field is required.',
            'activity_price.numeric' => 'The price must be a number.',
            'activity_price.min' => 'The price must be at least :min.',

            'activity_location.required' => 'The location field is required.',
            'activity_location.string' => 'The location must be a string.',
            'activity_location.max' => 'The location may not be greater than :max characters.',

            'activity_age_limit.required' => 'The age limit field is required.',
            'activity_age_limit.boolean' => "The age limit must be either 'all ages' or 'adults only.'",

            'activity_start.required' => 'The start time of operation hours field is required.',
            'activity_start.date_format' => 'The start time of operation hours must be in the format: HH:MM.',

            'activity_end.required' => 'The end time of operation hours field is required.',
            'activity_end.date_format' => 'The end time of operation hours must be in the format: HH:MM.',

            'activity_desc.required' => 'The description field is required.',
            'activity_desc.string' => 'The description must be a string.',
            'activity_desc.max' => 'The description may not be greater than :max characters.',

            'activity_max.required' => 'The maximum number of people in a day field is required.',
            'activity_max.integer' => 'The maximum number of people in a day must be an integer.',
            'activity_max.min' => 'The maximum number of people in a day must be at least :min.',
        ];
    }
}
