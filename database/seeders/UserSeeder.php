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
        DB::table('users')->inser([
            'name' => 'Béla',
            'email'=> 'bela@gmail.com',
        ]);

        DB::table('users')->inser([
            'name' => 'Zoli',
            'email'=> 'zoli@gmail.com',
        ]);
        DB::table('users')->inser([
            'name' => 'Józsi',
            'email'=> 'jozsi@gmail.com',
        ]);
    }
}
