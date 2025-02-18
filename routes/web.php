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
use App\Models\Post;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/galeria',function (){
    $drinks = Post::where('categoria_id', 2)->get();
    return view('galeria',[
        'drinks'=>$drinks,
    ]);
})->name('galeria');

Route::get('/sobrenos',function (){
    return view('sobrenos');
})->name('sobrenos');

Route::resource('curriculo', CurriculoController::class);
Route::resource('cotacao',CotacaoController::class);
//Route::resource('categoriabar', CategoriaBarController::class);
//Route::resource('categoriaevento', CategoriaEventoController::class);
//Route::resource('categoriapost', CategoriaPostController::class);
//Route::resource('cotacao', CotacaoController::class);
//Route::resource('statuscotacao', StatusCotacaoController::class);
//Route::resource('profissao', ProfissaoController::class);
//Route::resource('post', PostController::class);

Route::get('/dashboard',function (){return view('dashboard.menuDashboard');})->name('menu');

Route::get('/dashboard/login',function (){    return view('dashboard.login');})->name('login');


Route::delete('/dashboard/categoria/{id}/destroy', [ProfissaoController::class, 'destroy'])->name('profissao.destroy');
Route::get('/dashboard/categoria/{id}/edit',[ProfissaoController::class, 'edit'])->name('profissao.edit');
Route::put('/dashboard/categoria/{id}/update', [ProfissaoController::class, 'update'])->name('profissao.update');
Route::get('/dashboard/categoria',[ProfissaoController::class, 'index'])->name('profissao.index');
Route::get('/dashboard/categoria/novo',function (){    return view('profissao.novo');})->name('profissao.novo');
Route::post('/dashboard/categoria/store',[ProfissaoController::class, 'store'])->name('profissao.store');



//Orçamentos
Route::delete('/dashboard/orcamento/{id}/destroy', [CotacaoController::class, 'destroy'])->name('cotacao.destroy');
Route::get('/dashboard/orcamento/{id}/edit',[CotacaoController::class, 'edit'])->name('cotacao.edit');
Route::put('/dashboard/orcamento/update', [CotacaoController::class, 'update'])->name('cotacao.update');

//Novos
Route::get('/dashboard/orcamento/novo',[CotacaoController::class, 'indexNovo'])->name('orcamentosNovo');
Route::get('/index/novo',[CotacaoController::class, 'indexNovo'])->name('indexOrcamentosNovo');

//Pendentes
Route::get('/dashboard/orcamento/pendente',[CotacaoController::class, 'indexPendente'])->name('orcamentosPendente');
Route::get('/index/pendente',[CotacaoController::class, 'indexPendente'])->name('indexOrcamentosPendente');

//Concluidos
Route::get('/dashboard/orcamento/concluido',[CotacaoController::class, 'indexConcluido'])->name('orcamentosConcluido');
Route::get('/index/concluido',[CotacaoController::class, 'indexConcluido'])->name('indexOrcamentosConcluido');



//Ambiente
Route::post('/dashboard/ambiente/store', [PostController::class, 'storeAmbiente'])->name('storeAmbiente');
Route::get('/dashboard/ambiente',[PostController::class, 'indexAmbiente'])->name('ambienteDashboard');
Route::get('/dashboard/ambiente/novo',function (){    return view('dashboard.adcionarItensAmbiente');})->name('ambienteNovo');
Route::get('/post/{id}/editAmbiente', [PostController::class, 'editAmbiente'])->name('editAmbiente');
Route::get('/indexAmbiente', [PostController::class, 'indexAmbiente'])->name('indexAmbiente');

//Cardapio
Route::post('/dashboard/cardapio/store', [PostController::class, 'storeCardapio'])->name('storeCardapio');
Route::get('/dashboard/cardapio',[PostController::class, 'indexCardapio'])->name('cardapioDashboard');
Route::get('/dashboard/cardapio/novo',function (){    return view('dashboard.adcionarItensCardapio');})->name('cardapioNovo');
Route::get('/post/{id}/editCardapio', [PostController::class, 'editCardapio'])->name('editCardapio');
Route::get('/indexCardapio', [PostController::class, 'indexCardapio'])->name('indexCardapio');

//Galeria
Route::post('/dashboard/galeria/store', [PostController::class, 'storeGaleria'])->name('storeGaleria');
Route::get('/dashboard/galeria',[PostController::class, 'indexGaleria'])->name('galeriaDashboard');
Route::get('/dashboard/galeria/novo',function (){    return view('dashboard.adcionarItensGaleria');})->name('galeriaNovo');
Route::get('/post/{id}/editGaleria', [PostController::class, 'editGaleria'])->name('editGaleria');
//Route::delete('/post/{id}/destroyGaleria', [PostController::class, 'destroyGaleria'])->name('destroyGaleria');
Route::delete('/post/{id}/destroy', [PostController::class, 'destroy'])->name('post.destroy');
Route::get('/indexGaleria', [PostController::class, 'indexGaleria'])->name('indexGaleria');
Route::put('/post/{id}/updateVisibilidade', [PostController::class, 'updateVisibilidade'])->name('updateVisibilidade');
Route::put('/post/update', [PostController::class, 'update'])->name('post.update');



Route::delete('/dashboard/curriculo/{id}/destroy', [CurriculoController::class, 'destroy'])->name('curriculo.destroy');
Route::put('/dashboard/orcamento/{id}/update', [CotacaoController::class, 'update'])->name('cotacao.update');