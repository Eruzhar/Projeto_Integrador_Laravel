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
})->name('home');

Route::get('/galeria',function (){
    return view('galeria');
})->name('galeria');

Route::resource('curriculo', CurriculoController::class);
Route::resource('categoriabar', CategoriaBarController::class);
Route::resource('categoriaevento', CategoriaEventoController::class);
Route::resource('categoriapost', CategoriaPostController::class);
Route::resource('cotacao', CotacaoController::class);
Route::resource('statuscotacao', StatusCotacaoController::class);
Route::resource('profissao', ProfissaoController::class);
Route::resource('post', PostController::class);

Route::get('/galeriaDashboard',function (){
    return view('galeriaDashboard');
});
Route::get('/galerianew',function (){
    return view('adcionarItensGaleria');
});
Route::get('/dashboard',function (){
    return view('menuDashboard');
});
Route::get('/login',function (){
    return view('login');
});
Route::get('/dashboard/orcamento/novo',function (){
    return view('orcamento,index.novo');
});
Route::get('/dashboard/orcamento/novo',function (){
    return view('orcamento.index.novo');
});
Route::get('/dashboard/orcamento/pendente',function (){
    return view('orcamento.index.pendente');
});
Route::get('/dashboard/orcamento/concluidos',function (){
    return view('orcamento.index.concluidos');
});
