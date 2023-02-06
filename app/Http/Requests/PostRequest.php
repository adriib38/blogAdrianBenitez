<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'titulo' => 'required|min:10|max:50',
            'contenido' => 'required|min:30|max:12000'
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'El titulo es obligatorio',
            'titulo.min' => 'El título debe tener minimo 10 caracteres',
            'titulo.max' => 'El título debe tener máximo 50 caracteres',
            'contenido.required' => 'El contendio es obligatorio',
            'contenido.min' => 'El contenido debe tener minimo 10 caracteres',
            'contenido.max' => 'El contenido debe tener máximo 12000 caracteres',
        ];
    }
}
