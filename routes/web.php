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

Route::get('/dashboard',function (){
    return view('dashboard.menuDashboard');
})->name('menu');

Route::get('/dashboard/galeria',function (){
    return view('dashboard.galeriaDashboard');
})->name('galeriaDashboard');

Route::get('/dashboard/ambiente',function (){
    return view('dashboard.ambienteDashboard');
})->name('ambienteDashboard');

Route::get('/dashboard/cardapio',function (){
    return view('dashboard.cardapioDashboard');
})->name('cardapioDashboard');

Route::get('/dashboard/galeria/novo',function (){
    return view('dashboard.adcionarItensGaleria');
})->name('galeriaNovo');

Route::get('/dashboard/ambiente/novo',function (){
    return view('dashboard.adcionarItensAmbiente');
})->name('ambienteNovo');

Route::get('/dashboard/cardapio/novo',function (){
    return view('dashboard.adcionarItensCardapio');
})->name('cardapioNovo');

Route::get('/dashboard/login',function (){
    return view('dashboard.login');
})->name('login');

Route::get('/dashboard/orcamento/novo',function (){
    return view('dashboard.orcamentos.novo');
})->name('orcamentosNovos');

Route::get('/dashboard/orcamento/pendente',function (){
    return view('dashboard.orcamentos.pendente');
})->name('orcamentosPendentes');

Route::get('/dashboard/orcamento/concluidos',function (){
    return view('dashboard.orcamentos.concluidos');
})->name('orcamentosConcluidos');
