<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curriculo;

class CurriculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $curriculos = Curriculo::with('trabalho')-get();

        return view('curriculo.index',[
            'curriculos'=> $curriculos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('curriculo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'nome'=> 'required',
            'arquivo'=> 'required',
            'informacoes'=> 'required',
            'profissao_id'=> 'required|exists:trabalho,id'
        ]);

        $curriculo = new Curriculo();
        $curriculo->nome = $request->input('nome');
        $curriculo->arquivo = $request->input('arquivo');
        $curriculo->informacoes = $request->input('informacoes');
        $curriculo->profissao = $request->input('profissao_id');
        $curriculo->save();
        return redirect()->route('curriculo.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $curriculo = Curriculo::findOrFail($id);
        return view('curriculo.show',[
            'curriculo'=> $curriculo
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $curriculo = Curriculo::findOrFail($id);
        return view('curriculo.edit',[
            'curriculo'=> $curriculo
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        request()->validate([
            'nome'=> 'required',
            'arquivo'=> 'required',
            'informacoes'=> 'required',
            'profissao_id'=> 'required|exists:trabalho,id'
        ]);

        $curriculo = Curriculo::findOrFail($id);
        $curriculo->nome = $request->input('nome');
        $curriculo->arquivo = $request->input('arquivo');
        $curriculo->informacoes = $request->input('informacoes');
        $curriculo->profissao = $request->input('profissao_id');
        $curriculo->update();
        return redirect()->route('curriculo.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $curriculo = Curriculo::findOrFail($id);
        $curriculo->delete();
        return redirect()->route("curriculo.index"); 
    }
}
