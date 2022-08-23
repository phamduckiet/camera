<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class dankyrequest extends FormRequest
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
                'username'      =>'required|unique:taikhoanadmins,username',
                'password'      =>'required|min:4|max:30',
                'repassword'    =>'required|same:password',
        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'max'      => ':attribute không được quá 12 ký tự',
            'min'      => ':attribute không được dưới 5 ký tự',
            'unique'   =>  ':attribute đã có trong hệ thống',
            'same'   =>  ':attribute và mật khẩu không trùng nhau',
        ];
    }
    public function attributes()
    {
        return [
            'username'         => 'Tên đăng nhập',
            'password'      => 'Mật khẩu',
            'repassword'      => 'Nhập lại mật khẩu',
        ];
    }
}
