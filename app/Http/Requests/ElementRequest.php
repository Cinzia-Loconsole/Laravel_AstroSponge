<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ElementRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        // VALIDAZIONI
        return [
            'name'=>'required|min:5',
            'price'=>'required',
            'description'=>'required',
            'img'=>'mimes:jpg,png,webp,bmp'
        ];
    }


    // PERSONALIZZIAMO MESSAGGI DI ERRORE
    public function messages(): array
    {
        return [
            'name.required'=>'Il nome del prodotto é richiesto!',
            'name.min'=>'Il nome del prodotto deve essere minimo di 5 caratteri',
            'price.required'=>'Il prezzo é richiesto!',
            'description.required'=>'La descrizione é richiesta',
           
        ];
    }
}
