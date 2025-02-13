<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Cotacao;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StatusCotacao extends Model
{
    use HasFactory;
    protected $table = 'status_cotacao';

    public function cotacao_status(){
        return $this->belongsTo(Cotacao::class);
    }
}
