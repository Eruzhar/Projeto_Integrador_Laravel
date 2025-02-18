<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curriculo;
use App\Models\Profissao;

class CurriculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $curriculos = Curriculo::all();
        $profissoes = Profissao::all();
        return view('curriculo.index',[
            'curriculos'=> $curriculos,
            'profissoes'=> $profissoes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //adicionado por Eric: a página de submissão precisa saber quais são as vagas disponiveis
        $profissoes = Profissao::all();

        return view('curriculo.create',[
            'profissoes'=> $profissoes,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'nome'=> 'required',
            'arquivo'=> 'required|file|mimes:pdf,doc,docx|max:2048',
            'informacoes'=> 'required',
            'profissao_id'=> 'required|exists:profissao,id'
        ]);

        $curriculo = new Curriculo();

        // Salvar o arquivo na pasta 'uploads' dentro de 'storage/app/public'
        if($request->hasFile('arquivo')){
            //$path = $request->file('arquivo')->store('curriculos', 'public');            
            $path = uniqid() . '.' . $request->file('arquivo')->getClientOriginalExtension();
            $request->file('arquivo')->storeAs('curriculos',$path,'public');
            $curriculo->arquivo = $path;
        }                        
        $curriculo->nome = $request->input('nome');        
        $curriculo->informacoes = $request->input('informacoes');
        $curriculo->profissao_id = $request->input('profissao_id');
        //dd($curriculo);
        $curriculo->save();
        $profissoes = Profissao::all();
        return view('curriculo.create',[
            'profissoes'=> $profissoes,
        ])->with('message', 'Curriculo enviado!');
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
        return view('curriculo.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $curriculo = Curriculo::findOrFail($id);
        $curriculo->delete();
        return redirect()->to(url()->previous());
    }
}
