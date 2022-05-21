<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('persona')->insert([
            'nombre'=>'Juan',
            'apellido'=>'Perez',
            'direccion'=>'Cra 6 b #45-78',
            'telefono'=> '3235349867'
        ]);

    }
}
