<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalvarCachorro extends FormRequest
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
                'nome' => 'required|min:2|max:40',
                'porte' => 'required|min:5|max:20',
                'pelagem' => 'required|min:5|max:50',
                'sexo' => 'required|min:8|max:20',
                'idade' => 'required|min:4|max:40',
                'cor' => 'required|min:3|max:80',
                'id_produto' => 'required',
                'id_dono' => 'required',
            ];
    }

    public function messages()
    {
        return [
            'min' => 'Atenção: O campo de :attribute deve ter no mínimo :min caracteres!',
            'max' => 'Atenção: O campo de :attribute deve ter no máximo :max caracteres!',
            'required' => 'Atenção: O campo de :attribute é de preenchimento obrigatório!'
        ];
    }

}


