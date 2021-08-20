<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
            [
                'name' => "Obélix",
                'creation_year' => "1959",
                'bd' => "Asterix",
                'artist_id' => 1,
            ],
            [
                'name' => "Shimy",
                'creation_year' => "2004",
                'bd' => "Les Légendaires",
                'artist_id' => 2,
            ],
            [
                'name' => "Thorgal",
                'creation_year' => "1977",
                'bd' => "Thorgal",
                'artist_id' => 3,
            ],
        ]);
    }
}
