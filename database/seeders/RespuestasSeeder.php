<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class RespuestasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DFA
        DB::table('respuestas')->insert([
            'idPregunta' => 1,
            'idAlumno' => 'alu0100836400',
            'respuesta' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('respuestas')->insert([
            'idPregunta' => 1,
            'idAlumno' => 'alu001',
            'respuesta' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('respuestas')->insert([
            'idPregunta' => 1,
            'idAlumno' => 'alu002',
            'respuesta' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        //NFA
        DB::table('respuestas')->insert([
            'idPregunta' => 2,
            'idAlumno' => 'alu0100836400',
            'respuesta' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('respuestas')->insert([
            'idPregunta' => 2,
            'idAlumno' => 'alu001',
            'respuesta' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('respuestas')->insert([
            'idPregunta' => 2,
            'idAlumno' => 'alu002',
            'respuesta' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
