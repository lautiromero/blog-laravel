<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:50',
            'description' => 'required|min:10',
            'category' => 'required'
        ];
    }

    public function attributes()
    {
        //customizamos el nombre del campo para los mensajes de validacion
        return [
            'name' => 'Nombre'
        ];
    }

    public function messages()
    {
        //podemos personalizar un mensaje para cada validacion
        return [
            'description.required' => 'Debe ingresar una descripción',
            'description.min' => 'Debe tener al menos 10 caracteres' 
        ];
    }
}
