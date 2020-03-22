<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Response;
class UpdateInfo extends FormRequest
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
          'address_en' => 'required|string|max:190',
          'address_ar' => 'required|string|max:190',
          'longitude' => 'required|string|max:190',
          'latitude' => 'required|string|max:190',
          'email' => 'required|string|max:190',
          'phone.*' => 'required|string|max:190',
          'icon.*' => 'required|string|max:190',
        ];
    }
}
