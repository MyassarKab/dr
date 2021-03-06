<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Response;
class UpdatePost extends FormRequest
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
        $id = $this->route('post')->id;
        return [
          'titel_en' => 'required|string|max:190',
          'titel_ar' => 'required|string|max:190',
          'slug_en' => 'required|string|max:190|unique:posts,slug_en,'.$id,
          'slug_ar' => 'required|string|max:190|unique:posts,slug_ar,'.$id,
          'description_en' => 'required|string',
          'description_ar' => 'required|string',
          'details_en' => 'required|string',
          'details_ar' => 'required|string',
          'category_id' => 'required|numeric|min:1',
          'image' => 'image|mimes:jpg,jpeg,bmp,png,svg,gif|max:60000',
        ];
    }
}
