<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class AsignaturasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asignaturas')->insert([
            'idAsignatura' => '139262021',
            'idProfesorAlta' => 'prof001',
            'nombreAsignatura' => 'AEDA',
            'password' => 'aeda21',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('asignaturas')->insert([
            'idAsignatura' => '139263012',
            'idProfesorAlta' => 'prof002',
            'nombreAsignatura' => 'Inteligencia Artificial',
            'password' => 'ia21',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('asignaturas')->insert([
            'idAsignatura' => '139262012',
            'idProfesorAlta' => 'prof001',
            'nombreAsignatura' => 'CyA',
            'password' => 'cya21',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('asignaturas')->insert([
            'idAsignatura' => '139263015',
            'idProfesorAlta' => 'prof002',
            'nombreAsignatura' => 'Gestión de Proyectos',
            'password' => 'gpi21',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);        
    }
}
