<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Curriculo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profissao extends Model
{
    use HasFactory;
    protected $table = 'profissao';

    public function profissao(){
        return $this->belongsTo(Curriculo::class);
    }
    protected $fillable = ["nome","descricao"];
}
