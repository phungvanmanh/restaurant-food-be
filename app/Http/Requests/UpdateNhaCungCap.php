<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNhaCungCap extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id'                    =>  'required|exists:nha_cung_caps,id',
            'ma_so_thue'            =>  'nullable|unique:nha_cung_caps,ma_so_thue,' . $this->id,
            'ten_cong_ty'           =>  'required',
            'ten_nguoi_dai_dien'    =>  'required',
            // 'so_dien_thoai'         =>  'required|digits:10',
            'email'                 =>  'required|email|unique:nha_cung_caps,email,' . $this->id,
            'dia_chi'               =>  'nullable',
            'ten_goi_nho'           =>  'nullable',
            'tinh_trang'            =>  'boolean',

        ];
    }

    public function messages()
    {
        return [
            'id.*'                          => 'Supplier does not exist!',
            'ma_so_thue.*'                  => 'Tax ID already exists in the system!',
            'ten_cong_ty.required'          => 'Company name is required!',
            'ten_nguoi_dai_dien.required'   => 'Representative name is required!',
            // 'so_dien_thoai.required'        => 'Phone number is required!',
            'so_dien_thoai.digits'          => 'Phone number must be 10 digits!',
            'email.required'                => 'Email is required!',
            'email.email'                   => 'Email must be in the correct format!',
            'email.unique'                  => 'Email already exists!',

        ];
    }
}