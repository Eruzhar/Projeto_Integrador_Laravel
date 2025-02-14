<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Profissao;
class Curriculo extends Model
{
    use HasFactory;
    protected $table = 'curriculo';

    protected $fillable = ['nome', 'arquivo', 'informacoes', 'profissao_id'];

    public function trabalho(){
        return $this->hasOne(Profissao::class, 'profissao_id');
    }
}
