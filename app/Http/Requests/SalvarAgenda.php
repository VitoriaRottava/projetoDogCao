<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalvarAgenda extends FormRequest
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
                'titulo' => 'required|min:5|max:80',
                'dia' => 'required',
                'hora' => 'required',
                'id_produto' => 'required',
                'id_dono' => 'required',
                'id_cachorro' => 'required',
                'id_funcionario' => 'required',
                'preco' => 'required|min:7|max:15',
                'info' => 'max:200',
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

