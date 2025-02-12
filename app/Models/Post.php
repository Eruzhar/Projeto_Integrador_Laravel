<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CategoriaPost;

class Post extends Model
{
    protected $table = 'post';

    public function categoria(){
        return $this->hasOne(CategoriaPost::class, 'categoria_id');
    }
}
