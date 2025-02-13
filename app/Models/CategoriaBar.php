<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Cotacao;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoriaBar extends Model
{
    use HasFactory;
    protected $table = 'categoria_bar';

    public function cotacao_bar(){
        return $this->belongsTo(Cotacao::class);
    }
}
