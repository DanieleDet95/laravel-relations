<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call([
        ArtistsTableSeeder::class,
        AlbumsTableSeeder::class,
        SongsTableSeeder::class,
        SponsorsTableSeeder::class,
      ]);
    }
}
