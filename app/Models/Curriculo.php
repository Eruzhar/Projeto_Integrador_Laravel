<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Profissao;
class Curriculo extends Model
{
    protected $table = 'curriculo';

    public function trabalho(){
        return $this->hasOne(Profissao::class, 'profissao_id');
    }
}
