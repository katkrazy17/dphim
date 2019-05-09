<?php

namespace App\Http\Requests\V1\Admin\Category;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Category;

class UpdateRequest extends FormRequest
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
        $category = Category::findBySlugOrFail($this->category);
        return [
            'name' => 'required|min:4|max:191|unique:categories,name,' . $category->id . ',id',
            'parent_id' => 'sometimes|nullable|required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên danh mục !',
            'name.min' => 'Tên tag quá ngắn ! (tối thiểu 4 ký tự).',
            'name.max' => 'Tên danh mục quá dài ! (tối đa 191 ký tự).',
            'name.unique' => 'Tên chuyên mục đã tồn tại.',
            'parent_id.required' => 'Bạn chưa chọn danh mục.',
        ];
    }
}
