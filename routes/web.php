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

Route::get('/curriculo',[CurriculoController::class,'create'])->name('curriculo.create');
Route::post('/curriculo',[CurriculoController::class,'store'])->name('curriculo.store');

Route::get('/orcamento', [CotacaoController::class,'create'])->name('cotacao.create');
Route::post('/orcamento',[CotacaoController::class,'store'])->name('cotacao.store');

//Route::resource('curriculo', CurriculoController::class);
//Route::resource('cotacao',CotacaoController::class);
//Route::resource('categoriabar', CategoriaBarController::class);
//Route::resource('categoriaevento', CategoriaEventoController::class);
//Route::resource('categoriapost', CategoriaPostController::class);
//Route::resource('cotacao', CotacaoController::class);
//Route::resource('statuscotacao', StatusCotacaoController::class);
//Route::resource('profissao', ProfissaoController::class);
//Route::resource('post', PostController::class);

Route::get('/dashboard',function (){return view('dashboard.menuDashboard');})->name('menu');

Route::get('/dashboard/login',function (){    return view('dashboard.login');})->name('login');


Route::get('/dashboard/curriculo',[CurriculoController::class, 'index'])->name('curriculo.index');

Route::delete('/dashboard/categoria/profissao/{id}/destroy', [ProfissaoController::class, 'destroy'])->name('categoria.profissao.destroy');
Route::get('/dashboard/categoria/profissao/{id}/edit',[ProfissaoController::class, 'edit'])->name('categoria.profissao.edit');
Route::put('/dashboard/categoria/profissao/{id}/update', [ProfissaoController::class, 'update'])->name('categoria.profissao.update');
Route::get('/dashboard/categoria/profissao',[ProfissaoController::class, 'index'])->name('categoria.profissao.index');
Route::get('/dashboard/categoria/profissao/novo',function (){    return view('categoria.profissao.novo');})->name('categoria.profissao.novo');
Route::post('/dashboard/categoria/profissao/store',[ProfissaoController::class, 'store'])->name('categoria.profissao.store');



Route::delete('/dashboard/categoria/bar/{id}/destroy', [CategoriaBarController::class, 'destroy'])->name('categoria.bar.destroy');
Route::get('/dashboard/categoria/bar/{id}/edit',[CategoriaBarController::class, 'edit'])->name('categoria.bar.edit');
Route::put('/dashboard/categoria/bar/{id}/update', [CategoriaBarController::class, 'update'])->name('categoria.bar.update');
Route::get('/dashboard/categoria/bar',[CategoriaBarController::class, 'index'])->name('categoria.bar.index');
Route::get('/dashboard/categoria/bar/novo',function (){    return view('categoria.bar.novo');})->name('categoria.bar.novo');
Route::post('/dashboard/categoria/bar/store',[CategoriaBarController::class, 'store'])->name('categoria.bar.store');

Route::delete('/dashboard/categoria/evento/{id}/destroy', [CategoriaEventoController::class, 'destroy'])->name('categoria.evento.destroy');
Route::get('/dashboard/categoria/evento/{id}/edit',[CategoriaEventoController::class, 'edit'])->name('categoria.evento.edit');
Route::put('/dashboard/categoria/evento/{id}/update', [CategoriaEventoController::class, 'update'])->name('categoria.evento.update');
Route::get('/dashboard/categoria/evento',[CategoriaEventoController::class, 'index'])->name('categoria.evento.index');
Route::get('/dashboard/categoria/evento/novo',function (){    return view('categoria.evento.novo');})->name('categoria.evento.novo');
Route::post('/dashboard/categoria/evento/store',[CategoriaEventoController::class, 'store'])->name('categoria.evento.store');


//Orçamentos
Route::delete('/dashboard/orcamento/{id}/destroy', [CotacaoController::class, 'destroy'])->name('cotacao.destroy');
Route::get('/dashboard/orcamento/{id}/edit',[CotacaoController::class, 'edit'])->name('cotacao.edit');
Route::put('/dashboard/orcamento/update', [CotacaoController::class, 'update'])->name('cotacao.update');

//Novos
Route::get('/dashboard/orcamento/novo',[CotacaoController::class, 'indexNovo'])->name('orcamentosNovo');
Route::get('/dashboard/orcamento/novo/index',[CotacaoController::class, 'indexNovo'])->name('indexOrcamentosNovo');

//Pendentes
Route::get('/dashboard/orcamento/pendente',[CotacaoController::class, 'indexPendente'])->name('orcamentosPendente');
Route::get('/dashboard/orcamento/pendente/index',[CotacaoController::class, 'indexPendente'])->name('indexOrcamentosPendente');

//Concluidos
Route::get('/dashboard/orcamento/concluido',[CotacaoController::class, 'indexConcluido'])->name('orcamentosConcluido');
Route::get('/dashboard/orcamento/concluido/index',[CotacaoController::class, 'indexConcluido'])->name('indexOrcamentosConcluido');



//Ambiente
Route::post('/dashboard/ambiente/store', [PostController::class, 'storeAmbiente'])->name('storeAmbiente');
Route::get('/dashboard/ambiente',[PostController::class, 'indexAmbiente'])->name('ambienteDashboard');
Route::get('/dashboard/ambiente/novo',function (){    return view('dashboard.adcionarItensAmbiente');})->name('ambienteNovo');
Route::get('/dashboard/ambiente/{id}/edit', [PostController::class, 'editAmbiente'])->name('editAmbiente');
Route::get('/dashboard/ambiente/index', [PostController::class, 'indexAmbiente'])->name('indexAmbiente');

//Cardapio
Route::post('/dashboard/cardapio/store', [PostController::class, 'storeCardapio'])->name('storeCardapio');
Route::get('/dashboard/cardapio',[PostController::class, 'indexCardapio'])->name('cardapioDashboard');
Route::get('/dashboard/cardapio/novo',function (){    return view('dashboard.adcionarItensCardapio');})->name('cardapioNovo');
Route::get('/dashboard/cardapio/{id}/edit', [PostController::class, 'editCardapio'])->name('editCardapio');
Route::get('/dashboard/cardapio/index', [PostController::class, 'indexCardapio'])->name('indexCardapio');

//Galeria
Route::post('/dashboard/galeria/store', [PostController::class, 'storeGaleria'])->name('storeGaleria');
Route::get('/dashboard/galeria',[PostController::class, 'indexGaleria'])->name('galeriaDashboard');
Route::get('/dashboard/galeria/novo',function (){    return view('dashboard.adcionarItensGaleria');})->name('galeriaNovo');
Route::get('/dashboard/galeria/{id}/edit', [PostController::class, 'editGaleria'])->name('editGaleria');
Route::delete('/dashboard/galeria{id}/destroy', [PostController::class, 'destroy'])->name('post.destroy');
Route::get('/dashboard/galeria/index', [PostController::class, 'indexGaleria'])->name('indexGaleria');
Route::put('/post/{id}/updateVisibilidade', [PostController::class, 'updateVisibilidade'])->name('updateVisibilidade');
Route::put('/post/{id}update', [PostController::class, 'update'])->name('post.update');



Route::delete('/dashboard/curriculo/{id}/destroy', [CurriculoController::class, 'destroy'])->name('curriculo.destroy');
Route::put('/dashboard/orcamento/{id}/update', [CotacaoController::class, 'update'])->name('cotacao.update');