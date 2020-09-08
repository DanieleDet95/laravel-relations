<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Album;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i = 0; $i < 3; $i++){
        $newAlbum = new Album();
        $newAlbum->title = $faker->word;
        $newAlbum->artist = $faker->name;
        $newAlbum->year = $faker->year();
        $newAlbum->save();
      }
    }
}
