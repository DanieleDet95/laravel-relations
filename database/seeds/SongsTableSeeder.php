<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Song;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run(Faker $faker)
     {
       for ($i = 0; $i < 3; $i++){
         for ($j=0; $j < 8; $j++) {
           $newSong = new Song();
           $newSong->title = $faker->name;
           $newSong->genre = $faker->randomElement([
             'pop',
             'jezz',
             'rock',
             'blues',
             'reggae',
             'rap',
             'metal',
             'indie',
           ]);
           $newSong->image = $faker->imageUrl($width = 130, $height = 100);
           $newSong->description = $faker->text(400);
           $newSong->text = $faker->text(1500);
           $newSong->album_id = $i + 1;
           $newSong->save();
         }
       }
    }
}
