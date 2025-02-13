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
        return view("categoria_evento", [
            "categoria_evento" => $ces
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("categoria_evento.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'descricao' =>'required'
        ]);

        $ces = new CategoriaEvento();
        
        $ces->name = $request->input('name');
        $ces->descricao = $request->input('descricao');
        $ces->save();
        return View('categoria_evento.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ces = Categoriaces::findOrFail($id);
        return view("categoria_post.show", [
            "categoria_post"=> $ces
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ces = CategoriaEvento::findOrFail($id);
        return view("categoria_post.edit", [
            "categoria_post"=> $ces
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' =>'required',
            'descricao' =>'required'
        ]);

        $ces = CategoriaEvento::findOrFail($id);
        
        $ces->name = $request->input('name');
        $ces->descricao = $request->input('descricao');
        $ces->update();
        return redirect()->route('categoria_evento.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ces = CategoriaEvento::findOrFail($id);
        $ces->delete();
        return view("categoria_evento.index");
    }
}
