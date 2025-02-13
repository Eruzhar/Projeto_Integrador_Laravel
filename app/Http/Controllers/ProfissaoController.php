<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profissao;

class ProfissaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profissoes = Profissao::all();
        return view('profissao.index',[
            'profissoes'=> $profissoes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profissao.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'nome'=> 'required',
            'descricao'=> 'required'
            ]);

        $profissao = new Profissao();

        $profissao->nome = $request->input('nome');
        $profissao->descricao = $request->input('descricao');
        $profissao->save();

        return view('profissao.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $profisoes = Profissao::findOrFail($id);
        return view('profissao.show',[
            'profissoes'=> $profisoes
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $profisoes = Profissao::findOrFail($id);
        return view('profissao.edit',[
            'profissoes'=> $profisoes
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        request()->validate([
            'nome'=> 'required',
            'descricao'=> 'required'
            ]);

        $profissao = Profissao::findOrFail($id);

        $profissao->nome = $request->input('nome');
        $profissao->descricao = $request->input('descricao');
        $profissao->update();
        
        return view('profissao.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $profissao = Profissao::findOrFail($id);
        $profissao->delete();
        return view('profissao.index');
    }
}
