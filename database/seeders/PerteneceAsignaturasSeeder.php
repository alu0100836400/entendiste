<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerteneceAsignaturasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //AEDA
        DB::table('perteneceAsignaturas')->insert([
            'idAsignatura' => '139262021',
            'idUsuario' => 'prof001'
        ]);
        DB::table('perteneceAsignaturas')->insert([
            'idAsignatura' => '139262021',
            'idUsuario' => 'alu0100836400'
        ]);
        DB::table('perteneceAsignaturas')->insert([
            'idAsignatura' => '139262021',
            'idUsuario' => 'alu001'
        ]);
        DB::table('perteneceAsignaturas')->insert([
            'idAsignatura' => '139262021',
            'idUsuario' => 'alu002'
        ]);
        //Inteligencia Artificial
        DB::table('perteneceAsignaturas')->insert([
            'idAsignatura' => '139263012',
            'idUsuario' => 'prof002'
        ]);
        DB::table('perteneceAsignaturas')->insert([
            'idAsignatura' => '139263012',
            'idUsuario' => 'alu0100836400'
        ]);
        DB::table('perteneceAsignaturas')->insert([
            'idAsignatura' => '139263012',
            'idUsuario' => 'alu001'
        ]);
        //CyA
        DB::table('perteneceAsignaturas')->insert([
            'idAsignatura' => '139262012',
            'idUsuario' => 'prof001'
        ]);
        DB::table('perteneceAsignaturas')->insert([
            'idAsignatura' => '139262012',
            'idUsuario' => 'alu0100836400'
        ]);
        //GPI
        DB::table('perteneceAsignaturas')->insert([
            'idAsignatura' => '139263015',
            'idUsuario' => 'prof002'
        ]);
        DB::table('perteneceAsignaturas')->insert([
            'idAsignatura' => '139263015',
            'idUsuario' => 'alu001'
        ]);
        DB::table('perteneceAsignaturas')->insert([
            'idAsignatura' => '139263015',
            'idUsuario' => 'alu002'
        ]);
    }
}
