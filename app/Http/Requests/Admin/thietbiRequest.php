<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class thietbiRequest extends FormRequest
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
            'tenthietbi' => 'required|min:2|max:100',
            'hinhanh' => 'required',
        ];

    }
    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'max'      => ':attribute không được quá 100 ký tự',
            'min'      => ':attribute không được dưới 2 ký tự',
        ];
    }
    public function attributes()
    {
        return [
            'tenthietbi'         => 'Tên Thiết Bị',
            'hinhanh'      => 'Hình Ảnh',
        ];
    }
}
