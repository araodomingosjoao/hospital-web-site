<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specialties')->insert([
            'name' => 'Pediatria'
        ]);

        DB::table('specialties')->insert([
            'name' => 'Cardiologia'
        ]);

        DB::table('specialties')->insert([
            'name' => 'Neurologia'
        ]);

        DB::table('specialties')->insert([
            'name' => 'Psicologia'
        ]);

        DB::table('specialties')->insert([
            'name' => 'Ortopedia'
        ]);

        DB::table('specialties')->insert([
            'name' => 'Urologia'
        ]);

        DB::table('specialties')->insert([
            'name' => 'Endocrinologia'
        ]);

        DB::table('specialties')->insert([
            'name' => 'Dermatologia'
        ]);

        DB::table('specialties')->insert([
            'name' => 'Cirurgia Geral'
        ]);

        DB::table('specialties')->insert([
            'name' => 'Otorrinolaringologia'
        ]);

        DB::table('specialties')->insert([
            'name' => 'Gastroenterologia'
        ]);

        DB::table('specialties')->insert([
            'name' => 'Psiquiatria'
        ]);

        DB::table('specialties')->insert([
            'name' => 'Alergologia'
        ]);

        DB::table('specialties')->insert([
            'name' => 'Pneumologia'
        ]);

        DB::table('specialties')->insert([
            'name' => 'Clinica Geral'
        ]);

    }
}
