<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistSponsorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist_sponsor', function (Blueprint $table) {
          $table->unsignedBigInteger('artist_id');
          $table->foreign('artist_id')->references('id')->on('artists');
          $table->unsignedBigInteger('sponsor_id');
          $table->foreign('sponsor_id')->references('id')->on('sponsors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artist_sponsor');
    }
}
