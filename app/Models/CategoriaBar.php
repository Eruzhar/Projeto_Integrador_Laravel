<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Cotacao;

class CategoriaBar extends Model
{
    protected $table = 'categoria_bar';

    public function cotacao_bar(){
        return $this->belongsTo(Cotacao::class);
    }
}
