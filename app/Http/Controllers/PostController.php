<?php

namespace App\Http\Controllers;

use App\Models\CategoriaPost;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        return view("dashboard.galeriaDashboard", [
            "posts" => $posts
        ]);
    }
    public function indexAmbiente()
    {
        $posts = Post::all();

        return view("dashboard.ambienteDashboard", [
            "posts" => $posts
        ]);
    }
    public function indexCardapio()
    {
        $posts = Post::all();

        return view("dashboard.cardapioDashboard", [
            "posts" => $posts
        ]);
    }
    public function indexGaleria()
    {
        $posts = Post::all();

        return view("dashboard.galeriaDashboard", [
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
    public function store(Request $request, CategoriaPost $categoria)
    {
    }
    public function storeGaleria(Request $request)
    {
        $request->validate([
            'titulo' =>'required|max:255',
            'descricao' =>'required',
            'arquivo' =>'required',
        ]);

        $categorias = CategoriaPost::all();

        foreach ($categorias as $categoria){
            if ($request->input('tag') == $categoria->nome){
                $post = new Post();

                $post->titulo = $request->input('titulo');
                $post->descricao = $request->input('descricao');
                $post->visibilidade = true;
                $post->arquivo = $request->input('arquivo');
                $post->categoria_id = $categoria->id;
                $post->save();                        
                return view("dashboard.galeriaDashboard");
            }
        }
        return view("dashboard.adcionarItensGaleria");
    }
    public function storeCardapio(Request $request)
    {
        $request->validate([
            'titulo' =>'required|max:255',
            'descricao' =>'required',
            'arquivo' =>'required',
        ]);

        $categorias = CategoriaPost::all();

        foreach ($categorias as $categoria){
            if ($request->input('tag') == $categoria->nome){
                $post = new Post();
        
                $post->titulo = $request->input('titulo');
                $post->descricao = $request->input('descricao');
                $post->visibilidade = true;
                $post->arquivo = $request->input('arquivo');
                $post->categoria_id = $categoria->id;
                $post->save();
                return view("dashboard.cardapioDashboard");
            }
        }
        return view("dashboard.adcionarItensCardapio");
    }
    public function storeAmbiente(Request $request)
    {
        $request->validate([
            'titulo' =>'required|max:255',
            'descricao' =>'required',
            'arquivo' =>'required',
        ]);

        $categorias = CategoriaPost::all();

        foreach ($categorias as $categoria){
            if ($request->input('tag') == $categoria->nome){
                $post = new Post();
        
                $post->titulo = $request->input('titulo');
                $post->descricao = $request->input('descricao');
                $post->visibilidade = true;
                $post->arquivo = $request->input('arquivo');
                $post->categoria_id = $categoria->id;
                $post->save();
                return view("dashboard.ambienteDashboard");
            }
        }
        return view("dashboard.adcionarItensAmbiente");
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
        return view("dashboard.adcionarItensGaleria", [
            "post"=> $post
        ]);
    }
    public function editGaleria(string $id)
    {
        $post = Post::findOrFail($id);
        return view("dashboard.adcionarItensGaleria", [
            "post"=> $post
        ]);
    }
    public function editAmbiente(string $id)
    {
        $post = Post::findOrFail($id);
        return view("dashboard.adcionarItensAmbiente", [
            "post"=> $post
        ]);
    }
    public function editCardapio(string $id)
    {
        $post = Post::findOrFail($id);
        return view("dashboard.adcionarItensCardapio", [
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
            'arquivo' =>'required',
            'categoria_id' =>'required|exists:categorias,id'
        ]);

        $post = Post::findOrFail($id);
        
        $post->titulo = $request->input('titulo');
        $post->descricao = $request->input('descricao');
        $post->visibilidade = $request->input('visibilidade');
        $post->arquivo = $request->input('arquivo');
        $post->categoria_id = $request->input('categoria_id');
        $post->update();
        return view('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return view("post.index"); 
    }
    public function destroyGaleria(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('indexGaleria');
    }
}
