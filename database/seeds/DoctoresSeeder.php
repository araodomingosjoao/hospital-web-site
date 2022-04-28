<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DoctoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctores')->insert([
            'specialty_id' => 1,
            'first_name' => 'Pedro',
            'last_name' => 'João',
            'email' => 'pedrojoao@gmail.com',
            'phone_number' => '900000000',
            'password' =>  Hash::make('qwerty')
        ]);
    }
}
