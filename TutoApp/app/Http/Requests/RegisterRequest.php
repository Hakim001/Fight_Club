<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email' => 'required|email|max:110|unique:users',
			'names' => 'nullable|max:110',
			'password' => 'required|min:6',
			'passwordConfirm' => 'required|same:password',
        ];
    }
	
	public function messages() 
	{
		return [
			'email.required' => 'E-mail est obligatoire',
			'email.email' => 'E-mail n\'est pas au format E-mail',
			'email.max' => 'E-mail trop long max 110',
			'email.unique' => 'E-mail existe déjà',
			
			'names.max' => 'le nom est trop long max 110',
			'names.nullable' => 'il est null',
			
			'password.required' => 'le mot de passe est requis',
			'password.min' => 'le mot de passe doit avoir 6 caractère',
			
			'passwordConfirm.required' => 'le mot de passe de confirmation est requis',
			'passwordConfirm.same' => 'les mots de passe sont différent',
		];
	}
}
