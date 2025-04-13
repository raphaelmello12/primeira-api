<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdutoController;

Route::apiResource('produtos', ProdutoController::class);

Route::get('/', function () {
    return view('welcome');
});
