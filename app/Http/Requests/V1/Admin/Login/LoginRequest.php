<?php

namespace App\Http\Requests\V1\Admin\Login;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'admin_name' => ['required', 'max:191'],
            'password' => ['required', 'min:6'],
        ];
    }

    public function messages()
    {
        return [
            'admin_name.required' => 'Vui lòng nhập tên tài khoản hoặc e-mail đăng nhập !',
            'admin_name.max' => 'Tên đăng nhập quá dài ! (tối đa 191 ký tự).',
            'password.required' => 'Vui lòng nhập mật khẩu !',
            'password.min' => 'Mật khẩu phải ít nhất 6 ký tự.'
        ];
    }
}
