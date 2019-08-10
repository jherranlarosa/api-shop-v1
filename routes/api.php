<?php

use Illuminate\Http\Request;

Route::get('listProductCategory', 'Api\Inventory\ProductCategoryController@listProductCategory');
Route::post('createProductCategory', 'Api\Inventory\ProductCategoryController@createProductCategory');
Route::post('updateProductCategory', 'Api\Inventory\ProductCategoryController@updateProductCategory');
Route::post('deleteProductCategory', 'Api\Inventory\ProductCategoryController@deleteProductCategory');

Route::post('registerUser', 'Api\RegisterController@registerUser');
Route::get('listProductUnit', 'Api\Inventory\ProductUnitController@listProductUnit');
Route::post('createProductUnit', 'Api\Inventory\ProductUnitController@createProductUnit');
Route::post('updateProductUnit', 'Api\Inventory\ProductUnitController@updateProductUnit');
Route::post('deleteProductUnit', 'Api\Inventory\ProductUnitController@deleteProductUnit');

