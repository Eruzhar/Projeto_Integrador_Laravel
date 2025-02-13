<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurriculoController;
use App\Http\Controllers\CategoriaBarController;
use App\Http\Controllers\CategoriaEventoController;
use App\Http\Controllers\CategoriaPostController;
use App\Http\Controllers\CotacaoController;
use App\Http\Controllers\StatusCotacaoController;
use App\Http\Controllers\ProfissaoController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('index');
});

Route::get('/galeria',function (){
    return view('galeria');
});

Route::resource('curriculo', CurriculoController::class);
Route::resource('curriculo', CategoriaBarController::class);
Route::resource('curriculo', CategoriaEventoController::class);
Route::resource('curriculo', CategoriaPostController::class);
Route::resource('curriculo', CotacaoController::class);
Route::resource('curriculo', StatusCotacaoController::class);
Route::resource('curriculo', ProfissaoController::class);
Route::resource('curriculo', PostController::class);