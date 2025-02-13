<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Cotacao;

class StatusCotacao extends Model
{
    protected $table = 'status_cotacao';

    public function cotacao_status(){
        return $this->belongsTo(Cotacao::class);
    }
}
