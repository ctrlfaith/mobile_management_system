<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\OperatingSystemController;
use App\Http\Controllers\MobilePhoneController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('brands', BrandController::class);
Route::resource('operating_systems', OperatingSystemController::class);
Route::resource('mobile_phones', MobilePhoneController::class);