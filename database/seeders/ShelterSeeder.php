<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ShelterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shelters')->insert([
            'name' => 'Altar',
            'slug' => 'Quick Desc:',
            'location' => 'Bogor',
            'contact' => '0841294192941',
            'description' => 'Tucked away in the heart of the community, this animal shelter radiates compassion with its cozy, homelike ambiance.',
            'image' => 'Shelter Detail.png',
        ]);
        DB::table('shelters')->insert([
            'name' => 'Horizon',
            'slug' => 'Quick Desc:',
            'location' => 'Wakanda',
            'contact' => '0812412412354',
            'description' => 'A hub of hope for abandoned pets, our shelter strives to unite furry companions with forever homes through vibrant adoption events',
            'image' => 'Shelter Detail.png',
        ]);
        DB::table('shelters')->insert([
            'name' => 'House of Animals',
            'slug' => 'Quick Desc:',
            'location' => 'Jakarta',
            'contact' => '0815188051255',
            'description' => 'With a warm ambiance, our shelter is dedicated to finding loving families for every pet in need. Success stories adorn the walls, showcasing our ongoing mission',
            'image' => 'Shelter Detail.png',
        ]);
    }
}
