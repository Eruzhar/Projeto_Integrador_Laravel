<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cotacao;

class CotacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cotacoes = Cotacao::with()->get();
        return view("",[
            "cotacoes"=> $cotacoes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("cotacao.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            "nome"=> "required",
            "data_evento"=> "rerquered",
            "telefone"=> "requered|min:11",
            "email"=>"requered",
            "localidade"=> "requered",
            "observacoes"=>"required",
            "status_cotacao_id"=> "required|exists:,id",
            "categoria_bar_id"=> "required|exists:,id",
            "categoria_evento_id"=> "required|exists:,id"
            ]);

        $cotacao = new Cotacao();

        $cotacao->nome = $request->input("nome");
        $cotacao->data_evento = $request->input("data_evento");
        $cotacao->telefone = $request->input("telefone");
        $cotacao->email = $request->input("email");
        $cotacao->localidade = $request->input("localidade");
        $cotacao->observacoes = $request->input("observacoes");
        $cotacao->status_cotacao_id = $request->input("status_cotacao_id");
        $cotacao->categoria_evento_id = $request->input("categoria_evento_id");
        $cotacao->categoria_bar_id = $request->input("categoria_bar_id");
        $cotacao->save();
        return view("cotacao.index");
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
        request()->validate([
            "nome"=> "required",
            "data_evento"=> "rerquered",
            "telefone"=> "requered|min:11",
            "email"=>"requered",
            "localidade"=> "requered",
            "observacoes"=>"required",
            "status_cotacao_id"=> "required|exists:,id",
            "categoria_bar_id"=> "required|exists:,id",
            "categoria_evento_id"=> "required|exists:,id"
            ]);
        $cotacao = Cotacao::findOrFail($id);

        $cotacao->nome = $request->input("nome");
        $cotacao->data_evento = $request->input("data_evento");
        $cotacao->telefone = $request->input("telefone");
        $cotacao->email = $request->input("email");
        $cotacao->localidade = $request->input("localidade");
        $cotacao->observacoes = $request->input("observacoes");
        $cotacao->status_cotacao_id = $request->input("status_cotacao_id");
        $cotacao->categoria_evento_id = $request->input("categoria_evento_id");
        $cotacao->categoria_bar_id = $request->input("categoria_bar_id");
        $cotacao->update();
        return view("cotacao.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cotacao = Cotacao::findOrFail($id);
        $cotacao->delete();
        return view("cotacao.index");
    }
}
