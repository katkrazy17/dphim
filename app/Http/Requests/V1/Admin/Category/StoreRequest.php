<?php

namespace App\Http\Requests\V1\Admin\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|max:191|unique:categories',
            'parent_id' => 'required|sometimes|nullable',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên danh mục !',
            'name.max' => 'Tên danh mục quá dài ! (tối đa 191 ký tự).',
            'name.unique' => 'Tên danh mục đã tồn tại.',
            'parent_id.required' => 'Bạn chưa chọn danh mục.',
        ];
    }
}
