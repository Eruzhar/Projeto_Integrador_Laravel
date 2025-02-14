<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriaPost;

class CategoriaPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cps = CategoriaPost::all();
        return view("categoriapost.index", [
            "categoria_posts" => $cps
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("categoriapost.create");
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

        $cps = new CategoriaPost();
        
        $cps->nome = $request->input('nome');
        $cps->descricao = $request->input('descricao');
        $cps->save();
        return view('categoriapost.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cps = CategoriaPost::findOrFail($id);
        return view("categoriapost.show", [
            "categoria_post"=> $cps
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cps = CategoriaPost::findOrFail($id);
        return view("categoriapost.edit", [
            "categoria_post"=> $cps
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

        $cps = CategoriaPost::findOrFail($id);
        
        $cps->nome = $request->input('nome');
        $cps->descricao = $request->input('descricao');
        $cps->update();
        return view('categoriapost.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cps = CategoriaPost::findOrFail($id);
        $cps->delete();
        return view("categoriapost.index");
    }
}
