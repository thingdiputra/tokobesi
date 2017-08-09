<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Admin Interface Routes
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
{
  Route::get('/product/import', 'ExcelController@index')->name('product.import');;
  Route::post('/product/import/process', 'ExcelController@ImportClients');

  // Backpack\CRUD: Define the resources for the entities you want to CRUD.
  CRUD::resource('customer', 'Admin\UserCrudController');
  CRUD::resource('product', 'Admin\ProductCrudController');
  CRUD::resource('discount', 'Admin\DiskonCrudController');
  CRUD::resource('transaction', 'Admin\TransactionCrudController');
  
  // [...] other routes
});