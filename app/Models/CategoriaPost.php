<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoriaPost extends Model
{
    use HasFactory;
    protected $table = "categoria_post";

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
