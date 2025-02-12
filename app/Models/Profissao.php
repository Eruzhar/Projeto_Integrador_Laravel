<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Curriculo;

class Profissao extends Model
{
    protected $table = 'profissao';

    public function profissao(){
        return $this->belongsTo(Curriculo::class);
    }
}
