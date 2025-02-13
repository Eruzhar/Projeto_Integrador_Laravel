<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Cotacao;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoriaEvento extends Model
{
    use HasFactory;
    protected $table = 'categoria_evento';

    public function cotacao_evento(){
        return $this->belongsTo(Cotacao::class);
    }
}
