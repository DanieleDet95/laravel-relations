<?php

use Illuminate\Database\Seeder;
use App\Sponsor;

class SponsorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $sponsors = [
        'Nike',
        'Adidas',
        'Puma',
        'Samsung',
        'Apple',
      ];

      foreach ($sponsors as $sponsor) {
        $newSponsor = new Sponsor();
        $newSponsor->name = $sponsor;
        $newSponsor->save();
      }
    }
}
