<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MascotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nombre' => 'Tobby', 'raza' => 'Labrador', 'peso' => 15.5, 'talla' => 3.5, 'id_dueno' => 1, 'fecha_modificacion' => date('Y-m-d')],
            ['nombre' => 'Drako', 'raza' => 'German Shepherd', 'peso' => 10.5, 'talla' => 5.5, 'id_dueno' => 1, 'fecha_modificacion' => date('Y-m-d')],
            ['nombre' => 'Geyko', 'raza' => 'Siberian Husky', 'peso' => 15.5, 'talla' => 5, 'id_dueno' => 2, 'fecha_modificacion' => date('Y-m-d')],
            ['nombre' => 'Goliath', 'raza' => 'Pug', 'peso' => 6.5, 'talla' => 3, 'id_dueno' => 3, 'fecha_modificacion' => date('Y-m-d')],

        ];
        DB::table('mascota')->insert($data);
    }
}
