<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDoctor extends FormRequest
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

      $id = $this->route('doctor')->id;

        return [
          'name_en' => 'required|string|max:190|unique:doctors,name_en,'.$id,
          'name_ar' => 'required|string|max:190|unique:doctors,name_ar,'.$id,
          'slug_en' => 'required|string|max:190',
          'slug_ar' => 'required|string|max:190',
          'sp_name_en' => 'required|string|max:190|unique:doctors,sp_name_en,'.$id,
          'sp_name_ar' => 'required|string|max:190|unique:doctors,sp_name_ar,'.$id,
          'detalis_en' => 'required|string',
          'detalis_ar' => 'required|string',
          'description_en' => 'required|string',
          'description_ar' => 'required|string',
          'specialist_en' => 'required|string',
          'specialist_ar' => 'required|string',
          'clinic_id' => 'required|numeric|min:1',
          'image' => 'image|mimes:jpg,jpeg,bmp,png,svg,gif|max:60000',

        ];
    }
}
