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

        $cbs = new CategoriaBar();
        
        $cbs->name = $request->input('name');
        $cbs->descricao = $request->input('descricao');
        $cbs->save();
        return view('categoriabar.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cbs = CategoriaBar::findOrFail($id);
        return view("categoriabar.show", [
            "categoria_bar"=> $cbs
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cbs = CategoriaPost::findOrFail($id);
        return view("categoriabar.edit", [
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

        $cbs = CategoriaBar::findOrFail($id);
        
        $cbs->name = $request->input('name');
        $cbs->descricao = $request->input('descricao');
        $cbs->update();
        return view('categoriabar.index');
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
