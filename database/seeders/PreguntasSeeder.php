<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PreguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //CyA
        DB::table('preguntas')->insert([
            'idPregunta' => 1,
            'idAsignatura' => '139262012',
            'idProfesor' => 'prof001',
            'pregunta' => 'DFA',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('preguntas')->insert([
            'idPregunta' => 2,
            'idAsignatura' => '139262012',
            'idProfesor' => 'prof001',
            'pregunta' => 'NFA',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('preguntas')->insert([
            'idPregunta' => 3,
            'idAsignatura' => '139262012',
            'idProfesor' => 'prof001',
            'pregunta' => 'Máquinas de Turing',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        //AEDA
        DB::table('preguntas')->insert([
            'idPregunta' => 4,
            'idAsignatura' => '139262021',
            'idProfesor' => 'prof002',
            'pregunta' => 'Vectores',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('preguntas')->insert([
            'idPregunta' => 5,
            'idAsignatura' => '139262021',
            'idProfesor' => 'prof002',
            'pregunta' => 'Listas enlazadas',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('preguntas')->insert([
            'idPregunta' => 6,
            'idAsignatura' => '139262021',
            'idProfesor' => 'prof002',
            'pregunta' => 'Listas doblemente enlazadas',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
