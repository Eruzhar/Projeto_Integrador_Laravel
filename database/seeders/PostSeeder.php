<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $directory = 'public/img/drinks';
        $files = Storage::files($directory);
        $filenames = array_map(function ($file) {
            return basename($file);
        }, $files);

        foreach($files as $file){
            Post::factory()->create([            
                'titulo' => basename($file),
                'descricao' => fake()->text(),
                'visibilidade'=> true,
                'arquivo' => $file,
                'categoria_id' => 2,
            ]);
        }
    }
}
