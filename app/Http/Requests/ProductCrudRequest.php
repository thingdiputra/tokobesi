<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductCrudRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_product' => 'required|unique:products,id_product',
            'nama_brg' => 'required',
            'harga1' => 'required|numeric',
            'harga2' => 'required|numeric',
            'harga3' => 'required|numeric',
            'harga4' => 'required|numeric',
            'harga5' => 'required|numeric',
        ];
    }

}