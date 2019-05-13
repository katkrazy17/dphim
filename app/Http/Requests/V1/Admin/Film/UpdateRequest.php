<?php

namespace App\Http\Requests\V1\Admin\Film;

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
        $film = Film::find($this->film);
        return [
            //
            'title'        => 'required',
            'title_eng'    => 'required',
            'description'  => 'required',
            'avatar'       => 'required',
            'content'      => 'required',
            'release_date' => 'required',
            'run_time'     => 'required',
            'quality'      => 'required',
            'resolution'   => 'required',
            'language'     => 'required',
        ];
    }
    public function message()
    {
            'title.required'        => 'Bạn chưa nhập tiêu đề',
            'title_eng.required'    => 'Bạn chưa nhập tiêu đề tiếng Anh'
            'description.required'  => 'Bạn chưa nhập đường dẫn'
            'avatar.required'       => 'Bạn chưa đặt ảnh đại diện'
            'content.required'      => 'Bạn chưa nhập nội dung'
            'release_date.required' => 'Bạn chưa nhập ngày phát hành'
            'run_time.required'     => 'Bạn chưa nhập thời lượng phim'
            'quality.required'      => 'Bạn chưa nhập chất lượng phim'
            'resolution.required'   => 'Bạn chưa nhập độ phân giải'
            'language.required'     => 'Bạn chưa nhập ngôn ngữ'
    }
}
