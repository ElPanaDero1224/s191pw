<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validador extends FormRequest
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
            "isbn" => 'required|numeric|digits:13',
            "titulo" => 'required|string|max:150',
            "autor" => 'required|string',
            "paginas" => 'required|numeric|min:1',
            "anio" => 'required|numeric|digits:4|max:2024',
            "editorial" => 'required|string',
            "email" => 'required|email:rfc,dns',
        ];
    }
}
