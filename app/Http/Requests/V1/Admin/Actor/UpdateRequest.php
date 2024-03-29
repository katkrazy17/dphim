<?php

namespace App\Http\Requests\V1\Admin\Actor;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            $actor = Actor::find($this->actor);
            //
            'first_name' => 'required',
            'last_name'  => 'required',
            'height'     => 'required',
            'weight'     => 'required',
            'hobby'      => 'required',
            'country'    => 'required',
            'avatar'     => 'required'
        ];
    }
    public function message()
    {
        return [
            'first_name' => 'Bạn chưa nhập tên đệm',
            'last_name'  => 'Bạn chưa nhập tên',
            'height'     => 'Bạn chưa nhập chiều cao',
            'weight'     => 'Bạn chưa nhập cân nặng',
            'hobby'      => 'Bạn chưa nhập sở thích',
            'country'    => 'Bạn chưa nhập quốc tịch',
            'avatar'     => 'Bạn chưa đặt ảnh đại diện'
        ];
    }
}
