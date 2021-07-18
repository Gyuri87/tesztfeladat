<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'name'=>'Sziget',
            'description'=>'Nulla commodo dolor sit amet ante malesuada, id lacinia nulla volutpat. Quisque eu porttitor metus, nec vehicula felis. Morbi consequat est vitae ornare fermentum. Vestibulum at mollis leo, at congue eros. Sed rutrum eleifend turpis, in sodales velit sodales vel. Nulla nec mi non arcu fermentum pulvinar. Ut a aliquam purus, vel elementum quam. Vestibulum rutrum dapibus lectus. Vestibulum viverra in ex volutpat euismod. Sed aliquet egestas est, eget consequat eros blandit at. Cras ut tellus aliquam, vestibulum nisl in, euismod neque. Praesent id magna sagittis, eleifend metus sed, semper lacus. Maecenas nec nulla eu felis tempus feugiat nec eget libero. Vestibulum vel iaculis mauris, nec placerat enim.',
            'date'=>'2021-07-14',
            'price' => 423423,
            'location_id' => 1,
            'created_at'=>now(),
        ]);
        DB::table('events')->insert([
            'name'=>'Volt',
            'description'=>'Nulla commodo dolor sit amet ante malesuada, id lacinia nulla volutpat. Quisque eu porttitor metus, nec vehicula felis. Morbi consequat est vitae ornare fermentum. Vestibulum at mollis leo, at congue eros. Sed rutrum eleifend turpis, in sodales velit sodales vel. Nulla nec mi non arcu fermentum pulvinar. Ut a aliquam purus, vel elementum quam. Vestibulum rutrum dapibus lectus. Vestibulum viverra in ex volutpat euismod. Sed aliquet egestas est, eget consequat eros blandit at. Cras ut tellus aliquam, vestibulum nisl in, euismod neque. Praesent id magna sagittis, eleifend metus sed, semper lacus. Maecenas nec nulla eu felis tempus feugiat nec eget libero. Vestibulum vel iaculis mauris, nec placerat enim.',
            'date'=>'2021-06-04',
            'price' => 32534,
            'location_id' => 2,
            'created_at'=>now(),
        ]);
        DB::table('events')->insert([
            'name'=>'Balaton Sound',
            'description'=>'Nulla commodo dolor sit amet ante malesuada, id lacinia nulla volutpat. Quisque eu porttitor metus, nec vehicula felis. Morbi consequat est vitae ornare fermentum. Vestibulum at mollis leo, at congue eros. Sed rutrum eleifend turpis, in sodales velit sodales vel. Nulla nec mi non arcu fermentum pulvinar. Ut a aliquam purus, vel elementum quam. Vestibulum rutrum dapibus lectus. Vestibulum viverra in ex volutpat euismod. Sed aliquet egestas est, eget consequat eros blandit at. Cras ut tellus aliquam, vestibulum nisl in, euismod neque. Praesent id magna sagittis, eleifend metus sed, semper lacus. Maecenas nec nulla eu felis tempus feugiat nec eget libero. Vestibulum vel iaculis mauris, nec placerat enim.',
            'date'=>'2021-05-06',
            'price' => 346543,
            'location_id' => 3,
            'created_at'=>now(),
        ]);
    }
}
