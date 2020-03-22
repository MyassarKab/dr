<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Response;
class UpdateClinc extends FormRequest
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
      $id = $this->route('clinic')->id;
        return [
          'name_en' => 'required|string|max:190|unique:clinics,name_en,'.$id,
          'name_ar' => 'required|string|max:190|unique:clinics,name_ar,'.$id,
          'slug_en' => 'required|string|max:190',
          'slug_ar' => 'required|string|max:190',
          'detalis_en' => 'required|string',
          'detalis_ar' => 'required|string',
          'description_en' => 'required|string',
          'description_ar' => 'required|string',
          'image' => 'image|mimes:jpg,jpeg,bmp,png,svg,gif|max:60000',
        ];
    }
}
