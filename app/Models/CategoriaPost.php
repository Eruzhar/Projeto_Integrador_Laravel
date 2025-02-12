<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class CategoriaPost extends Model
{
    protected $table = "categoria_post";

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
