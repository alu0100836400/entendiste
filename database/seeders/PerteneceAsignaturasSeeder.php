<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

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
            'idUsuario' => 'prof001',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('perteneceAsignaturas')->insert([
            'idAsignatura' => '139262021',
            'idUsuario' => 'alu0100836400',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('perteneceAsignaturas')->insert([
            'idAsignatura' => '139262021',
            'idUsuario' => 'alu001',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('perteneceAsignaturas')->insert([
            'idAsignatura' => '139262021',
            'idUsuario' => 'alu002',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        //Inteligencia Artificial
        DB::table('perteneceAsignaturas')->insert([
            'idAsignatura' => '139263012',
            'idUsuario' => 'prof002',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('perteneceAsignaturas')->insert([
            'idAsignatura' => '139263012',
            'idUsuario' => 'alu0100836400',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('perteneceAsignaturas')->insert([
            'idAsignatura' => '139263012',
            'idUsuario' => 'alu001',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        //CyA
        DB::table('perteneceAsignaturas')->insert([
            'idAsignatura' => '139262012',
            'idUsuario' => 'prof001',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('perteneceAsignaturas')->insert([
            'idAsignatura' => '139262012',
            'idUsuario' => 'alu0100836400',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        //GPI
        DB::table('perteneceAsignaturas')->insert([
            'idAsignatura' => '139263015',
            'idUsuario' => 'prof002',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('perteneceAsignaturas')->insert([
            'idAsignatura' => '139263015',
            'idUsuario' => 'alu001',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('perteneceAsignaturas')->insert([
            'idAsignatura' => '139263015',
            'idUsuario' => 'alu002',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
