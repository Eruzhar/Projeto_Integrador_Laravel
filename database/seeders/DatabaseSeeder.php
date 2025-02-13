<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profissao;
use App\Models\CategoriaBar;
use App\Models\CategoriaEvento;
use App\Models\CategoriaPost;
use App\Models\StatusCotacao;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        Profissao::factory()->create([
            'name'=> 'Bartender',
            'descricao' => 'BartenderDesc',
        ]);        
        Profissao::factory()->create([
            'name'=> 'Backbar',
            'descricao' => 'BackbarDesc',
        ]);
        Profissao::factory()->create([
            'name'=> 'Copeira',
            'descricao' => 'CopeiraDesc',
        ]);
        Profissao::factory()->create([
            'name'=> 'Garçom',
            'descricao' => 'GarçomDesc',
        ]);
        StatusCotacao::factory()->create([
            'name'=> 'Novo',
            'descricao' => 'NovoDesc',
        ]);
        StatusCotacao::factory()->create([
            'name'=> 'Pendente',
            'descricao' => 'PendenteDesc',
        ]);
        StatusCotacao::factory()->create([
            'name'=> 'Concluído',
            'descricao' => 'ConcluídoDesc',
        ]);
        CategoriaBar::factory()->create([
            'name'=> 'Bar 1',
            'descricao' => 'Bar 1Desc',
        ]);
        CategoriaBar::factory()->create([
            'name'=> 'Bar 2',
            'descricao' => 'Bar 2Desc',
        ]);
        CategoriaBar::factory()->create([
            'name'=> 'Bar 3',
            'descricao' => 'Bar 3Desc',
        ]);
        CategoriaPost::factory()->create([
            'name'=> 'Bar',
            'descricao' => 'BarDesc',
        ]);
        CategoriaPost::factory()->create([
            'name'=> 'Drink',
            'descricao' => 'DrinkDesc',
        ]);
        CategoriaPost::factory()->create([
            'name'=> 'Evento',
            'descricao' => 'EventoDesc',
        ]);
        CategoriaEvento::factory()->create([
            'name'=> 'Evento 1',
            'descricao' => 'Evento 1Desc',
        ]);
        CategoriaEvento::factory()->create([
            'name'=> 'Evento 2',
            'descricao' => 'Evento 2Desc',
        ]);
        CategoriaEvento::factory()->create([
            'name'=> 'Evento 3',
            'descricao' => 'Evento 3Desc',
        ]);

    }
}
