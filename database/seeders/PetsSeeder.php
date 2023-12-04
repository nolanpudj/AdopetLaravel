<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_EN');

        $petName = ['Siamese', 'Persian', 'Maine Coon', 'Bengal', 'Sphynx', 'Ragdoll', 'Labrador Retriever', 'German Shepherd', 'Golden Retriever', 'Bulldog', 'Poodle', 'Beagle'];
        $dog_images = ['Dog_Rectangle 7-1.png', 'Dog_Rectangle 7-2.png', 'Dog_Rectangle 7-3.png', 'Dog_Rectangle 7.png'];
        $cat_images = ['Cat_Rectangle 7-1.png', 'Cat_Rectangle 7-2.png', 'Cat_Rectangle 7-3.png', 'Cat_Rectangle 7.png'];
        $bird_images = ['Bird_Rectangle 7-1.png', 'Bird_Rectangle 7-2.png', 'Bird_Rectangle 7-3.png', 'Bird_Rectangle 7.png'];
        $fish_images = ['Fish_Rectangle 7-1.png', 'Fish_Rectangle 7-2.png', 'Fish_Rectangle 7-3.png', 'Fish_Rectangle 7.png'];
        $exotic_images = ['Exotic_Rectangle 7-1.png', 'Exotic_Rectangle 7-2.png', 'Exotic_Rectangle 7-3.png', 'Exotic_Rectangle 7.png'];
        $reptiles_images = ['Reptiles_Rectangle 7-1.png', 'Reptiles_Rectangle 7-2.png', 'Reptiles_Rectangle 7-3.png', 'Reptiles_Rectangle 7.png'];

        $gender = ['Male', 'Female'];
        $health = ['Vaccinations up to date', 'Not Vaccinated'];

        for ($i = 1; $i < 10; $i++) {
            DB::table('pets')->insert([
                'petName'       => $faker->randomElement($petName),
                'petType'       => 'Dog',
                'image'         => $faker->randomElement($dog_images),
                'status'        => 'not adopted',
                'gender'        => $faker->randomElement($gender),
                'health'        => $faker->randomElement($health),
                'shelter_id'    => 1,
            ]);
        }

        for ($i = 1; $i < 10; $i++) {
            DB::table('pets')->insert([
                'petName'       => $faker->randomElement($petName),
                'petType'       => 'Cat',
                'image'         => $faker->randomElement($cat_images),
                'status'        => 'not adopted',
                'gender'        => $faker->randomElement($gender),
                'health'        => $faker->randomElement($health),
                'shelter_id'    => 2,
            ]);
        }

        for ($i = 1; $i < 10; $i++) {
            DB::table('pets')->insert([
                'petName'       => $faker->randomElement($petName),
                'petType'       => 'Bird',
                'image'         => $faker->randomElement($bird_images),
                'status'        => 'not adopted',
                'gender'        => $faker->randomElement($gender),
                'health'        => $faker->randomElement($health),
                'shelter_id'    => 3,
            ]);
        }

        for ($i = 1; $i < 10; $i++) {
            DB::table('pets')->insert([
                'petName'       => $faker->randomElement($petName),
                'petType'       => 'Fish',
                'image'         => $faker->randomElement($fish_images),
                'status'        => 'not adopted',
                'gender'        => $faker->randomElement($gender),
                'health'        => $faker->randomElement($health),
                'shelter_id'    => 3,
            ]);
        }

        for ($i = 1; $i < 10; $i++) {
            DB::table('pets')->insert([
                'petName'       => $faker->randomElement($petName),
                'petType'       => 'Reptiles',
                'image'         => $faker->randomElement($reptiles_images),
                'status'        => 'not adopted',
                'gender'        => $faker->randomElement($gender),
                'health'        => $faker->randomElement($health),
                'shelter_id'    => 3,
            ]);
        }

        for ($i = 1; $i < 10; $i++) {
            DB::table('pets')->insert([
                'petName'       => $faker->randomElement($petName),
                'petType'       => 'Exotic',
                'image'         => $faker->randomElement($exotic_images),
                'status'        => 'not adopted',
                'gender'        => $faker->randomElement($gender),
                'health'        => $faker->randomElement($health),
                'shelter_id'    => 3,
            ]);
        }
    }
}
