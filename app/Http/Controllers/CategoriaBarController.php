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
        $cbs= CategoriaBar::all();
        return view("categoriabar.index", [
            "categoria_posts" => $cbs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("categoriabar.create");
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

        $cb = new CategoriaBar();
        
        $cb->name = $request->input('name');
        $cb->descricao = $request->input('descricao');
        $cb->save();
        return view('categoria_bar.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cb = CategoriaBar::findOrFail($id);
        return view("categoria_bar.show", [
            "categoria_bar"=> $cb
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cbs = CategoriaBar::findOrFail($id);
        return view("categoria_bar.edit", [
            "categoria_bar"=> $cbs
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

        $cb = CategoriaBar::findOrFail($id);
        
        $cb->name = $request->input('name');
        $cb->descricao = $request->input('descricao');
        $cb->update();
        return view('categoria_bar.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cbs = CategoriaBar::findOrFail($id);
        $cbs->delete();
        return view("categoriabar.index");
    }
}
