<?php

namespace sistema\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        //função para definir se o usuário pode ou não fazer essa requisição
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|max:100',
            'descricao' => 'required|max:255',
            'valor' => 'required|numeric'
];
    }
    public function messages()
    {
        return [
            'nome.required' => 'O :attribute não pode estar vazio.',
            'descricao.required' => 'A :attribute não pode estar vazia.',
            'valor.required' => 'O :attribute não pode ser nulo.'];
    }
}
