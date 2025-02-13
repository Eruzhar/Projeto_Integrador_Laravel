<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Cotacao;

class CategoriaEvento extends Model
{
    protected $table = 'categoria_evento';

    public function cotacao_evento(){
        return $this->belongsTo(Cotacao::class);
    }
}
