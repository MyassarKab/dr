<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Response;
class CreateAbout extends FormRequest
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
          'title_en' => 'required|string|max:190',
          'title_ar' => 'required|string|max:190',
          'details_en' => 'required|string',
          'details_ar' => 'required|string',
          'mission_en' => 'required|string',
          'mission_ar' => 'required|string',
          'vision_en' => 'required|string',
          'vision_ar' => 'required|string',
          'image' => 'required|image|mimes:jpg,jpeg,bmp,png,svg,gif|max:60000',
        ];
    }
}
