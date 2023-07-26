<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadoRequest extends FormRequest
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
            'nombre' => 'required',
            'a_pat' => 'required',
            'a_mat' => 'required',
            'edad' => 'nullable|numeric',
            'f_nacimiento' => 'required|date_format:Y-m-d',
            'genero' => 'nullable|string',
            's_base' => 'nullable|numeric',
        ];
    }
}
