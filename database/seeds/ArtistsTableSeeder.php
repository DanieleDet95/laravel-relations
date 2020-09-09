<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Artist;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i = 0; $i < 5; $i++){
        $newArtist = new Artist();
        $newArtist->name = $faker->name;
        $newArtist->year = $faker->year();
        $newArtist->image = $faker->imageUrl($width = 130, $height = 100,'people');
        $newArtist->description = $faker->text(300);
        $newArtist->save();
      }
    }
}
