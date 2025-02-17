<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cotacao;
use App\Models\Curriculo;

class CotacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Curriculo::factory()->create([
            'nome' => 'João',
            'arquivo' => 'Silva',
            'informacoes' => '30',
            'profissao_id' => '1'
        ]);
        
        Curriculo::factory()->create([
            'nome' => 'João',
            'arquivo' => 'Silva',
            'informacoes' => '30',
            'profissao_id' => '1'
        ]);
        
        Curriculo::factory()->create([
            'nome' => 'João',
            'arquivo' => 'Silva',
            'informacoes' => '30',
            'profissao_id' => '1'
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
    }
}
