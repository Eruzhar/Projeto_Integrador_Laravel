<?php

namespace Database\Seeders;

use App\Http\Controllers\CotacaoController;
use App\Models\Curriculo;
use App\Models\User;
use App\Models\Profissao;
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
        for($i = 0; $i <100; $i++) {
            Cotacao::factory()->create([
                'nome'=> fake()->name(),
                'data_evento' => fake()->date(),
                'telefone' => fake()->phoneNumber(),
                'email' => fake()->email(),
                'localidade' => fake()->streetAddress(),
                'observacoes' => fake()->text(),
                'qtd_convidados' => fake()->numberBetween(0,50),
                'status_cotacao_id' => fake()->numberBetween(1,3),
                'categoria_bar_id' => fake()->numberBetween(1,3),
                'categoria_evento_id' => fake()->numberBetween(1,3)
            ]);
            Post::factory()->create([            
                'titulo' => fake()->title(),
                'descricao' => fake()->text(),
                'visibilidade'=> fake()->boolean(),
                'arquivo' => fake()->text(),
                'categoria_id' => fake()->numberBetween(1,3)
            ]);
            Profissao::factory()->create([
                'nome' => fake()->jobTitle(),
                'descricao' => fake()->text()
            ]);
        }
        for($i = 0; $i <100; $i++) {
            Curriculo::factory()->create([
                'nome' => fake()->name(),
                'arquivo' => fake()->text(),
                'informacoes' => fake()->text(),
                'profissao_id' => fake()->numberBetween(1,3)
            ]);
        }

    }
}
