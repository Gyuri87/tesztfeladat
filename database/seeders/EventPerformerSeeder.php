<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventPerformerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('event_performer')->insert([
            'performer_id'=>1,
            'event_id'=>1,
        ]);
        DB::table('event_performer')->insert([
            'performer_id'=>2,
            'event_id'=>1,
        ]);
        DB::table('event_performer')->insert([
            'performer_id'=>3,
            'event_id'=>2,
        ]);
        DB::table('event_performer')->insert([
            'performer_id'=>2,
            'event_id'=>3,
        ]);
    }
}
