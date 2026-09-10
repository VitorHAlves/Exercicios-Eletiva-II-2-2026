<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CenarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('cenario',CenarioController::class);
