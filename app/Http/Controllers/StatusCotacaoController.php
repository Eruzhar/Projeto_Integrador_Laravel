<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StatusCotacao;

class StatusCotacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $status = StatusCotacao::all();
        return view('status_cotacao.index', [
           'status' => $status
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('status_cotacao.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'nome'=> 'required',
            'descricao'=> 'requered'
        ]);
        
        $status = new StatusCotacao();
        
        $status->nome = $request->input('nome');
        $status->descricao = $request->input('descricao');
        $status->save();
        
        return view('status_cotacao.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $status = StatusCotacao::findOrFail($id);
        return view('status.cotacao.show', [
            'status'=> $status
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $status = StatusCotacao::findOrFail($id);
        return view('status_cotacao.edit', [
           'status'=> $status
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        request()->validate([
            'nome'=> 'required',
            'descricao'=> 'requered'
            ]);
        
        $status = StatusCotacao::findOrFail($id);
        
        $status->nome = $request->input('nome');
        $status->descricao = $request->input('descricao');
        $status->save();
        
        return view('status_cotacao.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $status = StatusCotacao::findOrFail($id);
        $status->delete();
        return view('status_cotacao.index');
    }
}
