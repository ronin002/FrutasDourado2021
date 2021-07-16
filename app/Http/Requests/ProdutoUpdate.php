<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoUpdate extends FormRequest
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
            'ncm' => 'required|string|min:4|max:100',
            'descricao' => 'required|string|min:3|max:500'
             //'gtin' => 'string|min:5|max:100',
             //'tipo' => 'string|min:5|max:100'
        ];
    }
}
