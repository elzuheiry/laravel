<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            //
            "name" => ['required', 'min:3', 'max:200'],
            "username" => ['required', 'max:100', Rule::unique("users", "username")],
            "password" => ['required', 'min:7'],
        ];
    }
}