<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurriculoController;

Route::get('/', function () {
    return view('index');
});

Route::get('/galeria',function (){
    return view('galeria');
});

Route::resource('curriculo', CurriculoController::class);