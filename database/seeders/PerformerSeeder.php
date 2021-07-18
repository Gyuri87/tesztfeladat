<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerformerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('performers')->insert([
            'name'=>'Metallica',
            'genre'=>'metal',
            'created_at'=>now(),
        ]);
        DB::table('performers')->insert([
            'name'=>'Iron Maiden',
            'genre'=>'metal',
            'created_at'=>now(),
        ]);
        DB::table('performers')->insert([
            'name'=>'Guns`n roses',
            'genre'=>'metal',
            'created_at'=>now(),
        ]);
    }
}
