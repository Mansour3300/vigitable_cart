<?php

namespace App\Http\Requests\Driver;

use Illuminate\Foundation\Http\FormRequest;

class CarUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'driver_liscense_image'=> 'mimes:jpeg,jpg,png,gif|max:1000',
            'car_liscense_image'=> 'mimes:jpeg,jpg,png,gif|max:1000',
            'car_insurance_image'=> 'mimes:jpeg,jpg,png,gif|max:1000',
            'car_front_image'=> 'mimes:jpeg,jpg,png,gif|max:1000',
            'car_back_image'=> 'mimes:jpeg,jpg,png,gif|max:1000'
        ];
    }
}
