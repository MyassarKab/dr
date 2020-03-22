<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCertificate extends FormRequest
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

      $id = $this->route('certificate')->id;

        return [
          'name_en' => 'required|string|max:190|unique:certificates,name_en,'.$id,
          'name_ar' => 'required|string|max:190|unique:certificates,name_ar,'.$id,
          'detalis_en' => 'required|string',
          'detalis_ar' => 'required|string',
          'doctor_id' => 'required|numeric|min:1',
          'image' => 'image|mimes:jpg,jpeg,bmp,png,svg,gif|max:60000',

        ];
    }
}
