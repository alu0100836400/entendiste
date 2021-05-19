<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'idUsuario' => 'alu0100836400',
            'password' => '123456',
            'nombre' => 'Javier',
            'apellidos' => 'Alberto Martín'
        ]);
        DB::table('users')->insert([
            'idUsuario' => 'alu001',
            'password' => '123456',
            'nombre' => 'Harry',
            'apellidos' => 'Potter'
        ]);
        DB::table('users')->insert([
            'idUsuario' => 'alu002',
            'password' => '123456',
            'nombre' => 'Ron',
            'apellidos' => 'Whesley'
        ]);
        DB::table('users')->insert([
            'idUsuario' => 'prof001',
            'password' => '123456',
            'nombre' => 'Matías',
            'apellidos' => 'Prats'
        ]);
        DB::table('users')->insert([
            'idUsuario' => 'prof002',
            'password' => '123456',
            'nombre' => 'Pedro',
            'apellidos' => 'Piqueras'
        ]);
    }
}
