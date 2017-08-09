<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use App\URL;
class Product extends Model
{
    use CrudTrait;

    /*
	|--------------------------------------------------------------------------
	| GLOBAL VARIABLES
	|--------------------------------------------------------------------------
	*/

	protected $table = 'products';
	protected $primaryKey = 'id_product';
	public $incrementing = false;
	// protected $guarded = [];
	// protected $hidden = ['id'];
    protected $fillable = [
    	'id_product',
    	'nama_brg',
    	'stok',
    	'harga1',
    	'harga2',
    	'harga3',
    	'harga4',
    	'harga5',
    ];
	public $timestamps = true;

	/*
	|--------------------------------------------------------------------------
	| FUNCTIONS
	|--------------------------------------------------------------------------
	*/
	public function importExcel($crud = false)
    {
    	$button = route('product.import');
        return "<a class='btn btn-default ladda-button' href=".$button." data-toggle='tooltip'><i class='fa fa-paperclip'></i> Import From Excel</a>";
    }
	/*
	|--------------------------------------------------------------------------
	| RELATIONS
	|--------------------------------------------------------------------------
	*/

	/*
	|--------------------------------------------------------------------------
	| SCOPES
	|--------------------------------------------------------------------------
	*/

	/*
	|--------------------------------------------------------------------------
	| ACCESORS
	|--------------------------------------------------------------------------
	*/

	/*
	|--------------------------------------------------------------------------
	| MUTATORS
	|--------------------------------------------------------------------------
	*/
}
