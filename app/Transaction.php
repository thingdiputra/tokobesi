<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
    	'id'
    ];

    public function trans_products(){
        return $this->hasMany('App\Trans_product');
    }
}
