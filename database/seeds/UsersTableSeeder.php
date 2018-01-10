<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Illuminate\Support\Facades\DB;
use Laracasts\TestDummy\Factory as TestDummy;

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Mario Alejandro Fernandez Liendo',
            'email' => 'alespcs@gmail.com',
            'password' =>  bcrypt('18261481Ori25*')
        ]);
    }

}