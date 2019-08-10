<?php

use Illuminate\Http\Request;

    Route::post('registerUser', 'Api\RegisterController@registerUser');
    Route::get('listProductUnit', 'Api\Inventory\ProductUnitController@listProductUnit');
    Route::post('createProductUnit', 'Api\Inventory\ProductUnitController@createProductUnit');
    Route::post('updateProductUnit', 'Api\Inventory\ProductUnitController@updateProductUnit');
    Route::post('deleteProductUnit', 'Api\Inventory\ProductUnitController@deleteProductUnit');