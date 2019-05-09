<?php

namespace App\Http\Requests\V1\Admin\Tag;

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
            'name' => 'required|min:2|max:191|unique:tags',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên tag !',
            'name.max' => 'Tên tag quá dài ! (tối đa 191 ký tự).',
            'name.min' => 'Tên tag quá ngắn ! (tối thiểu 2 ký tự).',
            'name.unique' => 'Tên tag đã tồn tại.',
        ];
    }
}
