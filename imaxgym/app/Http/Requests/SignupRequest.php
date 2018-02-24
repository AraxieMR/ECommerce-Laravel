<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
{

public function authorize()
{
    return true;
}

public function rules() 
{
        return [
                    'name'=>'required|min:2',
                    'email' => 'required|email|unique:users,email',
                    'password' => 'required|min:6|max:10|confirmed',
        ];
}

}
