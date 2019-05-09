<?php

namespace App\Http\Requests\V1\Admin\Advertisement;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Advertisement;

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
        $advertisement = Advertisement::find($this->advertisement);
        return [
            'distributor' => 'required|max:191|unique:advertisements,distributor,' . $advertisement->id . ',id',
            'link' => 'required',
            'position' => 'required',
            
        ];
    }

    public function messages()
    {
        return [
            'distributor.required' => 'Vui lòng nhập tên nhà cung cấp dịch vụ quảng cáo !',
            'distributor.max' => 'Tên nhà cung cấp quá dài ! (tối đa 191 ký tự).',
            'distributor.unique' => 'Tên nhà cung cấp đã tồn tại.',
            'link.required' => 'Bạn chưa nhập đường dẫn quảng cáo.',
            'position.required' => 'Bạn chưa nhập vị trí đặt của quảng cáo.',
            
        ];
    }
}
