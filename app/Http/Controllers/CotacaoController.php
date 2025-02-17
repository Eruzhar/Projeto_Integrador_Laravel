<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cotacao;
use App\Models\StatusCotacao;

class CotacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cotacoes = Cotacao::with(["categoria_status","categoria_bar","categoria_Evento"])->get();
        return view("cotacao.index",[
            "cotacoes"=> $cotacoes
        ]);
    }
    public function indexConcluido()
    {
        $statusCotacao_id = $this->getStatusCotacao_id("Concluído");
        $cotacoes = $this->getIndex($statusCotacao_id);
        return view("dashboard.orcamentos.concluido", [
            "cotacoes" => $cotacoes
        ]);
    
    }public function indexPendente()
    {
        $statusCotacao_id = $this->getStatusCotacao_id("Pendente");
        $cotacoes = $this->getIndex($statusCotacao_id);
        return view("dashboard.orcamentos.pendente", [
            "cotacoes" => $cotacoes
        ]);
    }
    public function indexNovo()
    {
        $statusCotacao_id = $this->getStatusCotacao_id("Novo");
        $cotacoes = $this->getIndex($statusCotacao_id);
        return view("dashboard.orcamentos.novo", [
            "cotacoes" => $cotacoes
        ]);
    }
    
    
    private function getIndex($statusCotacao_id){
        $cotacoes = Cotacao::all()->where('status_cotacao_id', $statusCotacao_id);
        return $cotacoes;
    }

    private function getStatusCotacao_id($nome){

        $statusCotacoes = StatusCotacao::all();
        foreach ($statusCotacoes as $statusCotacao){
            if($statusCotacao->nome == $nome){
                return $statusCotacao->id;
            }
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias_bar = CategoriaBar::all();
        $categorias_evento = CategoriaEvento::all();
        return view("cotacao.create",[            
            'categorias_bar'=> $categorias_bar,
            'categorias_evento'=> $categorias_evento,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            "nome"=> "required",
            "data_evento"=> "required",
            "telefone"=> "required|min:11",
            "email"=>"required",
            "localidade"=> "required",
            "observacoes"=>"required",
            "qtd_convidados"=> "required|integer|min:0",
            "categoria_bar_id"=> "required|exists:categoria_bar,id",
            "categoria_evento_id"=> "required|exists:categoria_evento,id"
            ]);

        $cotacao = new Cotacao();

        $cotacao->nome = $request->input("nome");
        $cotacao->data_evento = $request->input("data_evento");
        $cotacao->telefone = $request->input("telefone");
        $cotacao->email = $request->input("email");
        $cotacao->localidade = $request->input("localidade");
        $cotacao->observacoes = $request->input("observacoes");
        $cotacao->qtd_convidados = $request->input("qtd_convidados");
        $cotacao->status_cotacao_id = 1;
        $cotacao->categoria_evento_id = $request->input("categoria_evento_id");
        $cotacao->categoria_bar_id = $request->input("categoria_bar_id");
        $cotacao->save();

        $categorias_bar = CategoriaBar::all();
        $categorias_evento = CategoriaEvento::all();
        return view("cotacao.create",[
            'categorias_bar'=> $categorias_bar,
            'categorias_evento'=> $categorias_evento,
        ])->with('message', 'Orçamento cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cotacao = Cotacao::findOrFail($id);
        return view("cotacao.show", [
            "cotacao"=> $cotacao
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cotacao = Cotacao::findOrFail($id);
        return view("cotacao.edit", [
            "cotacao"=> $cotacao
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cotacao = Cotacao::findOrFail($id);
        if(isset($request["Pendente"])){
            $cotacao->status_cotacao_id = 2;
            $cotacao->update();
        }
        if(isset($request["Concluido"])){
            $cotacao->status_cotacao_id = 3;
            $cotacao->update();
        }

        return redirect()->to(url()->previous());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        $cotacao = Cotacao::findOrFail($id);
        $cotacao->delete();
        return redirect()->to(url()->previous());
    }
}
