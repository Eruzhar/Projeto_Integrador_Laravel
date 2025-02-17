<?php

namespace Database\Seeders;

use App\Http\Controllers\CotacaoController;
use App\Models\Curriculo;
use App\Models\User;
use App\Models\Profissao;
use App\Models\CategoriaBar;
use App\Models\CategoriaEvento;
use App\Models\CategoriaPost;
use App\Models\StatusCotacao;
use App\Models\Cotacao;
use App\Models\Post;
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
        Cotacao::factory()->create([
            'nome'=> 'João',
            'data_evento' => now(),
            'telefone' => '71 - 9 9999-9999',
            'email' => 'joao@example.com',
            'localidade' => 'Rio de Janeiro',
            'observacoes' => 'Teste de cotação',
            'qtd_convidados' => '20',
            'status_cotacao_id' => '1',
            'categoria_bar_id' => '1',
            'categoria_evento_id' => '1'
        ]);
        Cotacao::factory()->create([
            'nome'=> 'João',
            'data_evento' => now(),
            'telefone' => '71 - 9 9999-9999',
            'email' => 'joao@example.com',
            'localidade' => 'Rio de Janeiro',
            'observacoes' => 'Teste de cotação',
            'qtd_convidados' => '20',
            'status_cotacao_id' => '2',
            'categoria_bar_id' => '1',
            'categoria_evento_id' => '1'
        ]);
        Cotacao::factory()->create([
            'nome'=> 'João',
            'data_evento' => now(),
            'telefone' => '71 - 9 9999-9999',
            'email' => 'joao@example.com',
            'localidade' => 'Rio de Janeiro',
            'observacoes' => 'Teste de cotação',
            'qtd_convidados' => '20',
            'status_cotacao_id' => '3',
            'categoria_bar_id' => '1',
            'categoria_evento_id' => '1'
        ]);
        Curriculo::factory()->create([
            'nome' => 'João',
            'arquivo' => 'Silva',
            'informacoes' => '30',
            'profissao_id' => '1'
        ]);

        

        Post::factory()->create([            
            'titulo' => '2 Limões',
            'descricao' => 'Base de limão siciliano, limão tahiti, melaço de cana e cachaça.',
            'visibilidade'=> true,
            'arquivo' => 'drink1.jpg',
            'categoria_id' => 2,
        ]);

        Post::factory()->create([
            'titulo' => '43 Sour ',
            'descricao' => 'Base de licor 43 e sumo de limão siciliano.',
            'visibilidade'=> true,
            'arquivo' => 'drink2.jpg',
            'categoria_id' => 2,
        ]);


    }
}
