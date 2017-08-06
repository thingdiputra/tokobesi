<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trans_product extends Model
{
    protected $fillable = [
    	'id_trans',
    	'id_product',
    	'jumlah'
    ];

    public function transactions(){
    	return $this->belongsTo('App\Transaction');
    }

}
