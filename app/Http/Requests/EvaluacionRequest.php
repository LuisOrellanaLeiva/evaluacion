<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EvaluacionRequest extends FormRequest
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
            'pregunta1' => 'required',
            'pregunta2' => 'required',
            'pregunta3' => 'required',
            'pregunta4' => 'required',
            'pregunta5' => 'required',
            'pregunta6' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'pregunta1.required' => 'Seleccione una opcion',
            'pregunta2.required' => 'Seleccione una opcion',
            'pregunta3.required' => 'Seleccione una opcion',
            'pregunta4.required' => 'Seleccione una opcion',
            'pregunta5.required' => 'Seleccione una opcion',
            'pregunta6.required' => 'Seleccione una opcion'
        ];
    }
}
