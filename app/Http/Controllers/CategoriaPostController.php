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
        return view("categoria_post.index", [
            "categoria_posts" => $cps
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("categoria_post.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipo' =>'required',
            'name' =>'required',
            'descricao' =>'required'
        ]);

        $cps = new CategoriaPost();
        
        $cps->tipo = $request->input('tipo');
        $cps->name = $request->input('name');
        $cps->descricao = $request->input('descricao');
        $cps->save();
        return redirect()->route('categoria_post.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cps = CategoriaPost::findOrFail($id);
        return view("categoria_post.show", [
            "categoria_post"=> $cps
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cps = CategoriaPost::findOrFail($id);
        return view("categoria_post.edit", [
            "categoria_post"=> $cps
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'tipo' =>'required',
            'name' =>'required',
            'descricao' =>'required'
        ]);

        $cps = CategoriaPost::findOrFail($id);
        
        $cps->tipo = $request->input('tipo');
        $cps->name = $request->input('name');
        $cps->descricao = $request->input('descricao');
        $cps->update();
        return redirect()->route('categoria_post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cps = CategoriaPost::findOrFail($id);
        $cps->delete();
        return view("categoria_post.index");
    }
}
