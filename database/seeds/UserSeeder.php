<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'rule_id' => 1 ,
            'specialty_id' => 1,
            'first_name' => 'Arão',
            'last_name' => 'Domingos',
            'email' => 'araodomingos@gmail.com',
            'phone_number' => '939547161',
            'password' => Hash::make('qwerty')
        ]);

        DB::table('users')->insert([
            'rule_id' => 2 ,
            'first_name' => 'Arão',
            'last_name' => 'João',
            'email' => 'araodomingos04@gmail.com',
            'phone_number' => '939547160',
            'password' => Hash::make('qwerty')
        ]);

        DB::table('users')->insert([
            'rule_id' => 3 ,
            'first_name' => 'Edgama',
            'last_name' => 'Chiquete',
            'email' => 'edgamaageu@gmail.com',
            'phone_number' => '932179477',
            'password' => Hash::make('qwerty')
        ]);
    }
}
