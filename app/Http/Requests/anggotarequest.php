<?php

namespace App\Http\Requests;
use App\Http\Request\Request;

use Illuminate\Foundation\Http\FormRequest;

class anggotarequest extends FormRequest
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
            //
            'nama'            =>'required',
            'tanggal_lahir'   =>'required',
            'alamat'          =>'required',
            'email'           =>'required',
            'username'         =>'required',
            'password'         =>'required',

        ];
    }
    public function messages()
    {
        return [
            //
            'nama.required' =>'Nama Wajib Diisi :)',
            'tanggal_lahir.required' =>'Tanggal Lahir Wajib Diisi',
            'alamat.required' =>'Alamat Wajib Diisi',
            'email.required' =>'Email Wajib Diisi',
            'username.required' =>'Username Wajib Diisi',
            'password.required' =>'Password Wajib Diisi',

        ];
    }
}
