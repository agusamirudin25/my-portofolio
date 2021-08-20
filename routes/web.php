<?php

use App\Http\Controllers\HomeCT;
use Illuminate\Support\Facades\Route;



Route::group(['middleware' => 'logroute'], function () {
    Route::get('/', HomeCT::class);
    Route::view('/', 'home');
});
