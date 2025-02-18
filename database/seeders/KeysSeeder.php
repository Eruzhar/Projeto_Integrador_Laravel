<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profissao;
use App\Models\StatusCotacao;
use App\Models\CategoriaBar;
use App\Models\CategoriaEvento;
use App\Models\CategoriaPost;

class KeysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profissao::factory()->create([
            'nome'=> 'Bartender',
            'descricao' => 'BartenderDesc',
        ]);        
        Profissao::factory()->create([
            'nome'=> 'Backbar',
            'descricao' => 'BackbarDesc',
        ]);
        Profissao::factory()->create([
            'nome'=> 'Copeira',
            'descricao' => 'CopeiraDesc',
        ]);
        Profissao::factory()->create([
            'nome'=> 'Garçom',
            'descricao' => 'GarçomDesc',
        ]);
     
        StatusCotacao::factory()->create([
            'nome'=> 'Novo',
            'descricao' => 'NovoDesc',
        ]);
        StatusCotacao::factory()->create([
            'nome'=> 'Pendente',
            'descricao' => 'PendenteDesc',
        ]);
        StatusCotacao::factory()->create([
            'nome'=> 'Concluído',
            'descricao' => 'ConcluídoDesc',
        ]);
     
        CategoriaBar::factory()->create([
            'nome'=> 'Bar 1',
            'descricao' => 'Bar 1Desc',
        ]);
        CategoriaBar::factory()->create([
            'nome'=> 'Bar 2',
            'descricao' => 'Bar 2Desc',
        ]);
        CategoriaBar::factory()->create([
            'nome'=> 'Bar 3',
            'descricao' => 'Bar 3Desc',
        ]);
     
        CategoriaPost::factory()->create([
            'nome'=> 'ambiente',
            'descricao' => 'BarDesc',
        ]);
        CategoriaPost::factory()->create([
            'nome'=> 'galeria',
            'descricao' => 'DrinkDesc',
        ]);
        CategoriaPost::factory()->create([
            'nome'=> 'cardapio',
            'descricao' => 'EventoDesc',
        ]);
     
        CategoriaEvento::factory()->create([
            'nome'=> 'Evento 1',
            'descricao' => 'Evento 1Desc',
        ]);
        CategoriaEvento::factory()->create([
            'nome'=> 'Evento 2',
            'descricao' => 'Evento 2Desc',
        ]);
        CategoriaEvento::factory()->create([
            'nome'=> 'Evento 3',
            'descricao' => 'Evento 3Desc',
        ]);

    }
}
