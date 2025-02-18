<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriaBar;

class CategoriaBarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cbs = CategoriaBar ::all();
        return view("categoria.bar.index", [
            "categoria_bares" => $cbs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("categoria.bar.create");
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

        $cb = new CategoriaBar();
        
        $cb->nome = $request->input('nome');
        $cb->descricao = $request->input('descricao');
        $cb->save();
        $cbs = CategoriaBar ::all();
        return view("categoria.bar.index", [
            "categoria_bares" => $cbs
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cb = CategoriaBar::findOrFail($id);
        return view("categoria.bar.show", [
            "categoria_bar"=> $cb
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cb = CategoriaBar::findOrFail($id);
        return view("categoria.bar.edit", [
            "categoria_bar"=> $cb
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

        $cb = CategoriaBar::findOrFail($id);
        
        $cb->nome = $request->input('nome');
        $cb->descricao = $request->input('descricao');
        $cb->update();
        $cbs = CategoriaBar ::all();
        return view("categoria.bar.index", [
            "categoria_bares" => $cbs
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cb = CategoriaBar::findOrFail($id);
        $cb->delete();
        $cbs = CategoriaBar ::all();
        return view("categoria.bar.index", [
            "categoria_bares" => $cbs
        ]);
    }
}
