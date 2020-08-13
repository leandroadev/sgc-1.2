<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateCollaboratorRequest extends FormRequest
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
            'cpf' => 'required|min:11|max:14',
            'name' => 'required|min:3|max:255',
            'email' => 'required|min:3|max:255',
            'telephone' => 'required|min:8|max:255',
            'birth' => 'required|min:10|max:10',
            'address' => 'required|min:3|max:255',
        ];
    }

    public function messages()
    {
        return [
            'cpf.required' => 'CPF é obrigatório',
            'name.required' => 'Nome é obrigatório',
            'email.required' => 'E-mail é obrigatório',
            'telephone.required' => 'Telefone é obrigatório',
            'birth.required' => 'Data de nascimento é obrigatório',
            'address.required' => 'Endereço é obrigatório',
        ];
    }
}
