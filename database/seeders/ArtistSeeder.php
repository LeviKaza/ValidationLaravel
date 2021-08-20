<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artists')->insert([
            [
                'name' => "Albert Uderzo",
                'birthday' => "1927",
                'nationality' => "Français",
            ],
            [
                'name' => "Patrick Sobral",
                'birthday' => "1972",
                'nationality' => "Français",
            ],
            [
                'name' => "Jean Van Hamme",
                'birthday' => "1939",
                'nationality' => "Belge",
            ],
        ]);
    }
}
