<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPassRequest extends FormRequest
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
            
            'novasenha'=>'required',
        ];
    }

    public function messages()
    {
        return[
            
            'novasenha.required'=>'Nova Senha é obrigatória!'
             ];
        
    }
    
}
