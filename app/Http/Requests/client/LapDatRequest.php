<?php

namespace App\Http\Requests\client;

use Illuminate\Foundation\Http\FormRequest;

class LapDatRequest extends FormRequest
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
            'ten'        =>'required|max:100',
            'std'        =>'required|max:15',
            'theloai'    => 'required',
        ];
    }
}
