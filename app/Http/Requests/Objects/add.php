<?php

namespace App\Http\Requests\Objects;

use Illuminate\Foundation\Http\FormRequest;

class add extends FormRequest
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
            'name'=>'required|unique:objects',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Chú ý, Không được để trống',
            'name.unique'=>'Biểu mẫu này đã được dựng từ trước, vui lòng nhập tên khác để dể phân biệt.'
        ];
    }
}
