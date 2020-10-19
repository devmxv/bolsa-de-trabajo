<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearVacanteRequest extends FormRequest
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
            //
            'titulo' => 'required',
            'descripcion' => 'required',
            'categoria_id' => 'required',
            'salario' => 'required',
            //'status_id' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            //'comentarios' => 'required'
        ];
    }
}
