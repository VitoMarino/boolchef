<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            "address"=>'string|min:3|max:150',
            "CV"=>'nullable|file|max:20000000',
            "photograph"=>'nullable|file|max:20000000',
            // Mi rende unico il numero nella create ma mi permette di modificarlo nella edit
            'telephone'=> [Rule::unique('chefs')->ignore($this->chef, 'id')],
            "specializations"=>'array|exists:specializations,id',
            "description_of_dishes"=>'max:255',
            "visibility" => 'nullable|boolean',
        ];
    }
}
