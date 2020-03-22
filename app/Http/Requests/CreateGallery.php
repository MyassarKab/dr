<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateGallery extends FormRequest
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

        // return [
        //   'clinic_id' => 'required|numeric|min:1',
        //   'image.*' => 'required|image|mimes:jpg,jpeg,bmp,png,svg,gif|max:60000',
        //
        // ];

        $rules = [
            'clinic_id' => 'required|numeric|min:1',
        ];
        $photos = count($this->input('image'));
        foreach(range(0, $photos) as $index) {
            $rules['image.' . $index] = 'required|image|mimes:jpg,jpeg,bmp,png,svg,gif|max:2000';
        }

        return $rules;
    }
}
