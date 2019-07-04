<?php


namespace App\Http\Requests;


class PizzasRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'p_name'=>'required',
            'type'=>'required',
            'crust'=>'required',
            'cheese'=>'required',
            'mrp'=>'required',
        ];
    }
}