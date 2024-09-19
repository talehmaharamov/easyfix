<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:admin', 'as' => 'backend.'], function () {
    Route::group(['name' => 'status'], function () {
Route::get('service/{id}/change-status',[App\Http\Controllers\Backend\AutoGenerate\ServiceController::class,'status'])->name('serviceStatus');


    });
    Route::group(['name' => 'delete'], function () {
Route::get('service/{id}/delete',[App\Http\Controllers\Backend\AutoGenerate\ServiceController::class,'delete'])->name('serviceDelete');


    });
    Route::group(['name' => 'resource'], function () {
Route::resource('/service',App\Http\Controllers\Backend\AutoGenerate\ServiceController::class);


    });
});
