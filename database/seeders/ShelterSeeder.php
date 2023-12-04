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
            'slug' => 'House of Dogs',
            'location' => 'Bogor',
            'contact' => '0841294192941',
            'description' => 'Altar is a protected dog shelter',
            'image' => 'Shelter Detail.png',
        ]);
        DB::table('shelters')->insert([
            'name' => 'Koecing',
            'slug' => 'House of Cats',
            'location' => 'Wakanda',
            'contact' => '0812412412354',
            'description' => 'Koecing is a protected cat shelter',
            'image' => 'Shelter Detail.png',
        ]);
        DB::table('shelters')->insert([
            'name' => 'House of Animals',
            'slug' => 'Animal Shelter',
            'location' => 'Jakarta',
            'contact' => '0815188051255',
            'description' => 'House of Animals is a protected animal shelter',
            'image' => 'Shelter Detail.png',
        ]);
    }
}
