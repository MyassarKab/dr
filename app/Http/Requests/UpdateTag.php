<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTag extends FormRequest
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
$id = $this->route('tag')->id;
        return [
          'name_en' => 'required|string|max:190|unique:tags,name_en,'.$id,
          'name_ar' => 'required|string|max:190|unique:tags,name_ar,'.$id,
        ];
    }
}
