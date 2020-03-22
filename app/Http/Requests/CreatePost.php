<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Response;
class CreatePost extends FormRequest
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
          'titel_en' => 'required|string|max:190',
          'titel_ar' => 'required|string|max:190',
          'slug_en' => 'required|string|unique:posts|max:190',
          'slug_ar' => 'required|string|unique:posts|max:190',
          'description_en' => 'required|string',
          'description_ar' => 'required|string',
          'details_en' => 'required|string',
          'details_ar' => 'required|string',
          'category_id' => 'required|numeric|min:1',
          'image' => 'required|image|mimes:jpg,jpeg,bmp,png,svg,gif|max:60000',
        ];
    }
}
