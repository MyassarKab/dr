<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Factory as ValidationFactory;

class CreateContact extends FormRequest
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
          'name' => 'required|string|min:3|max:190|alpha_num',
          'email' => 'required|string|min:4|max:190',
          'message' => 'required|string|alpha_num',
          'phone' => 'required|numeric|digits_between:9,20',


        ];
    }
}
