<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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

        $catBreeds = ['Siamese', 'Persian', 'Maine Coon', 'Bengal', 'Sphynx', 'Ragdoll'];
        $dogBreeds = ['Labrador Retriever', 'German Shepherd', 'Golden Retriever', 'Bulldog', 'Poodle', 'Beagle'];
        $otherAnimals = ['Bird', 'Fish', 'Rabbit', 'Hamster', 'Turtle', 'Snake'];

        for ($i = 1; $i < 50; $i++) {
            \DB::table('pets')->insert([
                'cats'       => $faker->randomElement($catBreeds),
                'dogs'       => $faker->randomElement($dogBreeds),
                'otherpets' => $faker->randomElement($otherAnimals),
            ]);
        }
    }
}
