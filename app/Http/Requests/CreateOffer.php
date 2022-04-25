<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class CreateOffer extends FormRequest
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
            //
            "file" => ["required", "image"],
            "name" => ["required", "string"],
            "excerpt" => ["required", Rule::unique("offers", "excerpt")],
            "details" => ["required", "string"],
            "price" => ["required", "numeric"],
            "category_id" => ["required", Rule::exists("categorys", "id")],
        ];
    }
}