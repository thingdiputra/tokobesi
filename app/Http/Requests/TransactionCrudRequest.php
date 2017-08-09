<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TransactionCrudRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest {

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
            'tgl' => 'required',
            'id_trans' => 'required',
            'id_user' => 'required'
        ];
    }

}