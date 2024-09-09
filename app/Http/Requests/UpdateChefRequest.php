<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateChefRequest extends FormRequest
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
            "address" => 'nullable|min:3|max:150',
            "CV" => 'nullable|file|max:250',
            "photograph" => 'nullable|file|max:2000',
            "telephone" => 'required|min:7|max:15',
            "specializations" => 'required|array|exists:specializations,id',
            "visibility" => 'nullable|boolean',
        ];
    }
}
