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
        $categoria_id = $this->getCategoria_id("galeria");
        $posts = $this->getIndex($categoria_id);
        return view("dashboard.ambienteDashboard", [
            "posts" => $posts
        ]);
    }
    public function indexCardapio()
    {
        $categoria_id = $this->getCategoria_id("galeria");
        $posts = $this->getIndex($categoria_id);
        return view("dashboard.cardapioDashboard", [
            "posts" => $posts
        ]);
    }
    public function indexGaleria()
    {
        $categoria_id = $this->getCategoria_id("galeria");
        $posts = $this->getIndex($categoria_id);
        return view("dashboard.galeriaDashboard", [
            "posts" => $posts
        ]);
    }
    private function getIndex($categoria_id){
        $posts = Post::all()->where('categoria_id', $categoria_id);
        $i = 0;
        foreach ($posts as $post) {
            if($post->categoria_id != $categoria_id){
                //reirar item de um array
                $posts->forget($i);
            }
            $i++;
        }
        return $posts;
    }

    private function getCategoria_id($nome){

        $categorias = CategoriaPost::all();
        foreach ($categorias as $categoria){
            if($categoria->nome == $nome){
                return $categoria->id;
            }
        }
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
                return redirect()->route('indexGaleria');
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
            'arquivo' =>'required',
        ]);
        $post = Post::findOrFail($id);
        
        $post->titulo = $request->input('titulo');
        $post->descricao = $request->input('descricao');
        $post->arquivo = $request->input('arquivo');
        $post->update();
        return view('menu');
    }

    public function updateVisibilidade(Request $request, string $id)
    {
        $post = Post::findOrFail($id);
        
        $post->visibilidade = !$post->visibilidade;
        $post->update();
        return redirect()->to(url()->previous());
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->to(url()->previous());
    }
    public function destroyGaleria(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('indexGaleria');
    }
}
