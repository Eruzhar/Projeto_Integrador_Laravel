<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\StatusCotacao;
use App\Models\CategoriaBar;
use App\Models\CategoriaEvento;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cotacao extends Model
{
    use HasFactory;
    protected $table = 'cotacao';

    public function categoria_status(){
        return $this->hasOne(StatusCotacao::class, 'status_cotacao_id');
    }
    public function categoria_bar(){
        return $this->hasOne(CategoriaBar::class, 'categoria_bar_id');
    }
    public function categoria_Evento(){
        return $this->hasOne(CategoriaEvento::class, 'categoria_evento_id');
    }
}
