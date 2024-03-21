<?php

namespace App\Http\Requests\Ban;

use Illuminate\Foundation\Http\FormRequest;

class CreateBanRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name_table'         => 'required|min:4',
            'slug_table'         => 'required|min:4',
            'status'             => 'required|numeric',
            'id_area'            => 'exists:khu_vucs,id'
        ];
    }

    public function messages()
    {
        return [
            'required'          => ':attribute cannot be left blank!',
            'min'               => ':attribute must have at least :min character!',
            'numeric'           => ':attribute must be a number!',
        ];
    }

    public function attributes()
    {
        return [
            'name_table'         => 'Name table',
            'slug_table'         => 'Slug table',
            'status'             => 'Status',
        ];
    }
}
