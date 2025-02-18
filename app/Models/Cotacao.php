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

    public function cotacao_status(){
        return $this->hasOne(StatusCotacao::class, 'id');
    }
    public function categoria_bar(){
        return $this->hasOne(CategoriaBar::class, 'id');
    }
    public function categoria_evento(){
        return $this->hasOne(CategoriaEvento::class, 'id');
    }
    protected $fillable = ["nome", 'data_evento', 'telefone', 'email', 'localidade', 'qtd_convidados', 'observacoes', 'status_cotacao_id', 'categoria_bar_id', 'categoria_evento_id'];
}
