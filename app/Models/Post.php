<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\CategoriaPost;

class Post extends Model
{
    use HasFactory;
    protected $table = 'post';

    protected $fillable = ['titulo','descricao','visibilidade','arquivo', 'categoria_id'];

    public function categoria(){
        return $this->hasOne(CategoriaPost::class, 'categoria_id');
    }
}
