<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreChefRequest extends FormRequest
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
            "address"=>'nullable|string|min:3|max:150',
            "CV"=>'nullable|file|min:10|max:250',
            "photograph"=>'nullable|file|min:10|max:2000',
            "telephone"=>'required|numeric|unique:chefs',
            "specializations"=>'required|array|exists:specializations,id',
            "visibility" => 'nullable|boolean',
        ];
    }
}
