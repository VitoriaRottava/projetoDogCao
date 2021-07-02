<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalvarProduto extends FormRequest
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
                'nome' => 'required|min:7|max:40',
                'marca' => 'required|min:3|max:40',
                'qtd_estoque' => 'required|min:8|max:20',
                'custo' => 'required|min:8|max:10',
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
