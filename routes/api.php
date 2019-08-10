<?php

use Illuminate\Http\Request;

    Route::post('registerUser', 'Api\RegisterController@registerUser');
    Route::get('listProductUnit', 'Api\Inventory\ProductUnitController@listProductUnit');