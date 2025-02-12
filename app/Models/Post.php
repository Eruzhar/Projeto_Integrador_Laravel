<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';

    public function categoria(){
        return $this->hasOne(CategoriaPost::class, 'categoria_id');
    }
}
