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

        //Names & type
        $dogName = ['Susy', 'Donovan', 'Lucky', 'Golden', 'Mochi', 'Sky', 'Nala', 'Key', 'Kai', 'Cooper', 'Milo', 'Willow'];
        $catName = ['Margot', 'Angel', 'Gladis', 'Sussie', 'Bailey', 'June', 'Penny', 'Sally', 'Mittens', 'Garfield', 'Odie', 'Tubby'];
        $birdName = ['Coco', 'Jewel', 'Max', 'Mango', 'Kiwi', 'Penny', 'Ozar', 'Nigel', 'Tiago', 'Julia', 'Pedro', 'Jasper'];
        $reptileName = ['Raul', 'Mostima', 'Dora', 'Swipe', 'Serlida', 'Umberto', 'Zuma', 'Bastina', 'Kiki', 'Adina', 'Anisa', 'Yui'];
        $fishType = ['batch 1', 'batch 2', 'batch 3', 'batch 4', 'batch 5', 'batch 6', 'batch 7', 'batch 8', 'batch 9', 'batch 10'];
        $exoticName = ['Cleo', 'Amara', 'Yara', 'Scarlett', 'Enzo', 'Leilani', 'Hattie', 'Zuri', 'Kuku', 'Arno', 'Evie', 'Frye'];
        $dogBreed = ['Puddle', 'Golden Retriever', 'Chihuahua'];
        $catBreed = ['Persia', 'Scottish Fold', 'Siamese','Bengal','Sphynx','British Shorthair','Scottish Fold', 'Devon Rex', 'Birman', 'Abyssinian'];
        $birdBreed = ['Cockatiel', 'Lovebird', 'Canary', 'Cockatoo', 'Macaw', 'Quaker Parrot', 'Toucan', 'Conure', 'Finch', 'Society Finch'];
        $fishBreed = ['Koi', 'Platies', 'Zebra Danio', 'Mollies', 'Guppy', 'Neon Tetra', 'Rainbowfish', 'Killifish', 'African Cichlids', 'Goldfish'];
        $reptileBreed = ['Blue Tongue Skink', 'Veiled Chameleon', 'Russian Tortoise', 'Corn Snake', 'Ball Python', 'Leopard Gecko', 'Bearded Dragon', 'Crested Gecko', 'Red-Eared Slider', 'Chameleon'];
        $exoticBreed = ['Tarantulas', 'Sugar Gliders', 'Hedgehogs', 'Ferrets', 'Axolotls', 'Praying Mantises', 'Chinchillas', 'Hermit Crabs', 'Wallabies', 'Fennec Fox'];
        //images
        $dog_images = ['Dog_Rectangle 7-1.png', 'Dog_Rectangle 7-2.png', 'Dog_Rectangle 7-3.png', 'Dog_Rectangle 7.png'];
        $cat_images = ['Cat_Rectangle 7-1.png', 'Cat_Rectangle 7-2.png', 'Cat_Rectangle 7-3.png', 'Cat_Rectangle 7.png'];
        $bird_images = ['Bird_Rectangle 7-1.png', 'Bird_Rectangle 7-2.png', 'Bird_Rectangle 7-3.png', 'Bird_Rectangle 7.png'];
        $fish_images = ['Fish_Rectangle 7-1.png', 'Fish_Rectangle 7-2.png', 'Fish_Rectangle 7-3.png', 'Fish_Rectangle 7.png'];
        $exotic_images = ['Exotic_Rectangle 7-1.png', 'Exotic_Rectangle 7-2.png', 'Exotic_Rectangle 7-3.png', 'Exotic_Rectangle 7.png'];
        $reptiles_images = ['Reptiles_Rectangle 7-1.png', 'Reptiles_Rectangle 7-2.png', 'Reptiles_Rectangle 7-3.png', 'Reptiles_Rectangle 7.png'];

        $gender = ['Male', 'Female'];
        $health = ['Vaccinations up to date', 'Not Vaccinated'];

        //dogs
        for ($i = 1; $i < 10; $i++) {
            DB::table('pets')->insert([
                'petName'       => $faker->randomElement($dogName),
                'petType'       => 'Dog',
                'petBreed'      => $faker->randomElement($dogBreed),
                'image'         => $faker->randomElement($dog_images),
                'status'        => 'not adopted',
                'gender'        => $faker->randomElement($gender),
                'health'        => $faker->randomElement($health),
                'shelter_id'    => rand(1, 3),
            ]);
        }

        //cats
        for ($i = 1; $i < 10; $i++) {
            DB::table('pets')->insert([
                'petName'       => $faker->randomElement($catName),
                'petType'       => 'Cat',
                'petBreed'      => $faker->randomElement($catBreed),
                'image'         => $faker->randomElement($cat_images),
                'status'        => 'not adopted',
                'gender'        => $faker->randomElement($gender),
                'health'        => $faker->randomElement($health),
                'shelter_id'    => rand(1, 3),
            ]);
        }

        //birds
        for ($i = 1; $i < 10; $i++) {
            DB::table('pets')->insert([
                'petName'       => $faker->randomElement($birdName),
                'petType'       => 'Bird',
                'petBreed'      => $faker->randomElement($birdBreed),
                'image'         => $faker->randomElement($bird_images),
                'status'        => 'not adopted',
                'gender'        => $faker->randomElement($gender),
                'health'        => $faker->randomElement($health),
                'shelter_id'    =>rand(1, 3),
            ]);
        }

        //fish
        for ($i = 1; $i < 10; $i++) {
            DB::table('pets')->insert([
                'petName'       => $faker->randomElement($fishType),
                'petType'       => 'Fish',
                'petBreed'      => $faker->randomElement($fishBreed),
                'image'         => $faker->randomElement($fish_images),
                'status'        => 'not adopted',
                'gender'        => $faker->randomElement($gender),
                'health'        => $faker->randomElement($health),
                'shelter_id'    => rand(1, 3),
            ]);
        }

        //reptiles
        for ($i = 1; $i < 10; $i++) {
            DB::table('pets')->insert([
                'petName'       => $faker->randomElement($reptileName),
                'petType'       => 'Reptiles',
                'petBreed'      => $faker->randomElement($reptileBreed),
                'image'         => $faker->randomElement($reptiles_images),
                'status'        => 'not adopted',
                'gender'        => $faker->randomElement($gender),
                'health'        => $faker->randomElement($health),
                'shelter_id'    => rand(1, 3),
            ]);
        }

        //exotics
        for ($i = 1; $i < 10; $i++) {
            DB::table('pets')->insert([
                'petName'       => $faker->randomElement($exoticName),
                'petType'       => 'Exotic',
                'petBreed'      => $faker->randomElement($exoticBreed),
                'image'         => $faker->randomElement($exotic_images),
                'status'        => 'not adopted',
                'gender'        => $faker->randomElement($gender),
                'health'        => $faker->randomElement($health),
                'shelter_id'    => rand(1, 3),
            ]);
        }
    }
}
