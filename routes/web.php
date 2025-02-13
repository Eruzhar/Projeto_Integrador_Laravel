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
Route::resource('categoriabar', CategoriaBarController::class);
Route::resource('categoriaevento', CategoriaEventoController::class);
Route::resource('categoriapost', CategoriaPostController::class);
Route::resource('cotacao', CotacaoController::class);
Route::resource('statuscotacao', StatusCotacaoController::class);
Route::resource('profissao', ProfissaoController::class);
Route::resource('post', PostController::class);