<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('categoria')->get();

        return view("post.index", [
            "posts" => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("post.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->titulo = $request->titulo;
        $post->descricao = $request->descricao;
        $post->visibilidade = $request->visibilidade;
        $post->arquivo = $request->arquivo;
        $post->categoria_id = $request->categoria_id;
        $post->save();
        return redirect()->route("post.create");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view("post.show", [
            "post"=> $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view("post.edit", [
            "post"=> $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'titulo' =>'required|max:255',
            'descricao' =>'required',
            'visibilidade' =>'required',
            'arquivo' =>'required|mimes:jpeg,png,jpg',
            'categoria_id' =>'required|exists:categorias,id'
        ]);

        $post = Post::findOrFail($id);
        
        $post->titulo = $request->input('titulo');
        $post->descricao = $request->input('descricao');
        $post->visibilidade = $request->input('visibilidade');
        $post->arquivo = $request->input('arquivo');
        $post->categoria_id = $request->input('categoria_id');
        $post->update();
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route("post.index"); 
    }
}
