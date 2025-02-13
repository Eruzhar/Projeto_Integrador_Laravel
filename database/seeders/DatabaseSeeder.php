<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profissao;
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

    }
}
