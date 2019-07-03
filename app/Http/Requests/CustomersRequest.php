<?php


namespace App\Http\Requests;

use App\Http\Requests\Request;

class CustomersRequest extends Request
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'c_name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'password'=>'required'
        ];
    }
}