<?php

use App\Categoria;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create(['nombre' => 'Ciencia Ficcion']);
        Categoria::create(['nombre' => 'Clasicos']);
        Categoria::create(['nombre' => 'Fantasia']);
        Categoria::create(['nombre' => 'Filosofia']);
        Categoria::create(['nombre' => 'Historia']);
        Categoria::create(['nombre' => 'Romantico']);
        Categoria::create(['nombre' => 'Poesia']);
    }
}
