<?php

use Illuminate\Http\Request;

    Route::post('registerUser', 'Api\RegisterController@registerUser');
    Route::get('listProductUnit', 'Api\Inventory\ProductUnitController@listProductUnit');
    Route::post('deleteProductUnit', 'Api\Inventory\ProductUnitController@deleteProductUnit');