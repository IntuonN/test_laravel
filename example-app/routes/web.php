<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudController;

Route::get('/', function () {
    return view('crud');
});

Route::get('/crud', function () {
    return view('crud');
});

Route::resource('/customer',crudController::class);

