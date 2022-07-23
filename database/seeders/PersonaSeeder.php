<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nombres' => 'Tatiana', 'apellidos' => 'Quiñonez', 'identificacion' => '0985412585',
                'correo' => 'prueb@gmail.com', 'celular' => '0926541485', 'direccion' => 'Samanes',
                'fecha_modificacion' => date('Y-m-d')
            ],
            [
                'nombres' => 'Juan', 'apellidos' => 'Quinto', 'identificacion' => '0898745126', 'correo' => 'test@gmail.com', 'celular' => '0987452658', 'direccion' => 'Sauces',
                'fecha_modificacion' => date('Y-m-d')
            ],
            [
                'nombres' => 'Karen', 'apellidos' => 'Lopez', 'identificacion' => '0941589622', 'correo' => 'pruebaa@gmail.com', 'celular' => '09658745258', 'direccion' => 'Entre Rios',
                'fecha_modificacion' => date('Y-m-d')
            ],
        ];
        DB::table('persona')->insert($data);
    }
}
