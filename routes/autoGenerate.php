<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:admin', 'as' => 'backend.'], function () {
    Route::group(['name' => 'status'], function () {

    });
    Route::group(['name' => 'delete'], function () {

    });
    Route::group(['name' => 'resource'], function () {

    });
});
