<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Persona extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('persona')->insert([
            'nombre'=>'miguel angel',
            'apellido'=>'hernandez',
            'direccion'=>'calle 54 A #3N 2-15',
            'telefono'=>'3126952112'
            
        ]);

        DB::table('persona')->insert([
            'nombre'=>'joel',
            'apellido'=>'medina',
            'direccion'=>'calle 67 A #3N 6-15',
            'telefono'=>'3126959999'
            
        ]);

        DB::table('persona')->insert([
            'nombre'=>'viviana',
            'apellido'=>'quinayas',
            'direccion'=>'calle 77 A #3N 6-10',
            'telefono'=>'31245454655'
            
        ]);

        DB::table('persona')->insert([
            'nombre'=>'ange',
            'apellido'=>'grajales',
            'direccion'=>'calle 77 A #3N 8-15',
            'telefono'=>'31269566666'
            
        ]);

        DB::table('persona')->insert([
            'nombre'=>'andres',
            'apellido'=>'iniesta',
            'direccion'=>'calle 88 A #3N 8.32',
            'telefono'=>'31262372634832'
            
        ]);
    }
}
