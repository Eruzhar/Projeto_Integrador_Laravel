<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriaEvento;
use View;


class CategoriaEventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ces = CategoriaEvento ::all();
        return view("categoria.evento.index", [
            "categoria_eventos" => $ces
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("categoria.evento.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' =>'required',
            'descricao' =>'required'
        ]);

        $ces = new CategoriaEvento();
        
        $ces->nome = $request->input('nome');
        $ces->descricao = $request->input('descricao');
        $ces->save();
        $ces = CategoriaEvento::all();
        return view('categoria.profissao.index',[
            'categoria_eventos'=> $ces
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ce = CategoriaEvento::findOrFail($id);
        return view("categoria.aevento.show", [
            "categoria_evento"=> $ce
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ce = CategoriaEvento::findOrFail($id);
        return view("categoria.evento.edit", [
            "categoria_evento"=> $ce
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome' =>'required',
            'descricao' =>'required'
        ]);

        $ce = CategoriaEvento::findOrFail($id);
        
        $ce->nome = $request->input('nome');
        $ce->descricao = $request->input('descricao');
        $ce->update();
        $ces = CategoriaEvento ::all();
        return view("categoria.evento.index", [
            "categoria_eventos" => $ces
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ces = CategoriaEvento::findOrFail($id);
        $ces->delete();
        $ces = CategoriaEvento ::all();
        return view("categoria.evento.index", [
            "categoria_eventos" => $ces
        ]);
    }
}
