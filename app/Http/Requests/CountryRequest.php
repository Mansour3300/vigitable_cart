<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountryRequest extends FormRequest
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
            'country_name'=>'required|string|unique:countries,country_name',
            'country_key'=>'required|unique:countries,country_key',
            'image'=>'mimes:jpeg,jpg,png,gif|max:1000|unique:countries,image',
        ];
    }
}
