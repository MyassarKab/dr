<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateService extends FormRequest
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
          'name_en' => 'required|string|unique:services|max:190',
          'name_ar' => 'required|string|unique:services|max:190',
          'slug_en' => 'required|string|unique:services|max:190',
          'slug_ar' => 'required|string|unique:services|max:190',
          'detalis_en' => 'required|string',
          'detalis_ar' => 'required|string',
          'description_en' => 'required|string',
          'description_ar' => 'required|string',
          'clinic_id' => 'required|numeric|min:1',
          'image' => 'required|image|mimes:jpg,jpeg,bmp,png,svg,gif|max:60000',

        ];
    }
}
