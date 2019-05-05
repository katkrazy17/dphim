<?php

namespace App\Http\Requests\V1\Admin\Login;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
            'password_old' => ['required', 'min:6'],
            'password_new' => ['required', 'string', 'min:6', 'confirmed'],
            'password_new_confirmation' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'password_old.required' => 'Vui lòng nhập mật khẩu cũ !',
            'password_old.min' => 'Mật khẩu quá ngắn ( tối thiểu 6 ký tự ).',
            'password_new.required' => 'Vui lòng nhập mật khẩu mới !',
            'password_new.min' => 'Mật khẩu quá ngắn ( tối thiểu 6 ký tự ).',
            'password_new.confirmed' => 'Mật khẩu xác nhận mới không khớp.',
            'password_new_confirmation.required' => 'Xác nhận lại mật khẩu.',
        ];
    }
}
