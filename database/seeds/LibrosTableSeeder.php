<?php

use App\Libro;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class LibrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Libro::create(['libro' => 'Alicia en el País de las Maravillas', 'autor'=>'Lewis Carroll', 'categoria_id'=>'3', 'precio'=>'75', 'stock'=>'3', 'disponibilidad'=>'1']);
        Libro::create(['libro' => 'Ilíada', 'autor'=>'Homero', 'categoria_id'=>'7', 'precio'=>'225', 'stock'=>'5', 'disponibilidad'=>'1']);
        Libro::create(['libro' => 'Odisea', 'autor'=>'Homero', 'categoria_id'=>'7', 'precio'=>'200', 'stock'=>'7', 'disponibilidad'=>'1']);
        Libro::create(['libro' => 'Romeo y Julieta', 'autor'=>'William Shakespeare', 'categoria_id'=>'2', 'precio'=>'125', 'stock'=>'11', 'disponibilidad'=>'1']);
        Libro::create(['libro' => 'Halo Cryptum', 'autor'=>'Greg Bear', 'categoria_id'=>'1', 'precio'=>'300', 'stock'=>'13', 'disponibilidad'=>'0']);
        Libro::create(['libro' => 'La Peste', 'autor'=>'Albert Camus', 'categoria_id'=>'5', 'precio'=>'79', 'stock'=>'17', 'disponibilidad'=>'1']);
        Libro::create(['libro' => 'Fundamentación de la Metafísica', 'autor'=>'Immanuel Kant', 'categoria_id'=>'4', 'precio'=>'149', 'stock'=>'5', 'disponibilidad'=>'0']);
        Libro::create(['libro' => 'Tratado de la Desesperación', 'autor'=>'Kierkegaard', 'categoria_id'=>'4', 'precio'=>'199', 'stock'=>'7', 'disponibilidad'=>'1']);
        Libro::create(['libro' => 'Zelic', 'autor'=>'Revelles y Arango', 'categoria_id'=>'1', 'precio'=>'79', 'stock'=>'3', 'disponibilidad'=>'0']);
        Libro::create(['libro' => 'Insignia', 'autor'=>'Kincaid', 'categoria_id'=>'1', 'precio'=>'89', 'stock'=>'1', 'disponibilidad'=>'1']);
    }
}
