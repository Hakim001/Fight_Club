<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'title' => 'required|max:110',
			'body' => 'required',
        ];
    }
	
	public function messages() {
		return [
			
	     'title.required' => 'le titre est obligatoire',
		 'title.max' => 'le titre est trop long et doit avoir 110 caractère',
		
		'body.required' => 'un text est obligatoire',
				
	  ];
	}
}
