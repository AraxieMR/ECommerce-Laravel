<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ProductRequest extends FormRequest
{
  
public function authorize()
{
        return true;
}

public function rules(Request $request)
{
        $unique= !empty($request['item_id'] )  ?  ','.$request['item_id'] : '';
        return [
        'categorie_id'=>'required',
        'title' => 'required|',
        'article' => 'required|',
        'image'=>'required|image',
        'url'=>'required|regex:/^[a-z\d-]+$/|unique:products,url'.$unique, 
        'price'=>'required|numeric',
        'rating'=>'integer|min:0|max:10',
        'stock'=>'required|integer|min:0|max:255',
        ];
}
}
