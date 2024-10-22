<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Validation\Rule;


class StorePostRequest extends FormRequest
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
            'title' => 'required|max:500',
            'url_clean' => 'max:20',
            'content' => '', //Es un text con posibilidad de nulo, por lo que no tiene ninguna validacion
            'posted' =>  '', //Ninguna validación pues la checkbox solo manda valores booleanos
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
    */
    public function messages(): array
    {
        return [
            'title.required' => 'Se esperaba un título',
            'title.max' => 'El máximo de caracteres es 500',
            'url_clean.max' => 'El máxmio de caracteres es de 20',
            
        ];
    }
}
