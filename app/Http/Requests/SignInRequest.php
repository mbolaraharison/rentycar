<?php

namespace App\Http\Requests;

use App\MyMethods\MyMethods;
use Illuminate\Foundation\Http\FormRequest;

class SignInRequest extends FormRequest
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
        $rules = [
            'email_signin' => 'required',
            'mot_de_passe_signin' => 'required',
        ];
        return $rules;
    }

    public function messages(){
        $messages = [
            'email_signin.required' => MyMethods::generateMessageRequired('email_signin', 'nm', 'p', 'n'),
            'mot_de_passe_signin.required' => MyMethods::generateMessageRequired('mot_de_passe_signin', 'm', 'p', 'n'),
        ];
        return $messages;
    }
}
