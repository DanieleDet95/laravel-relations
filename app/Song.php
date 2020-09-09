<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
  protected $fillable = [
    'title',
    'genre',
    'album_id',
    'image',
    'description',
    'text',
  ];

  public function album(){
    return $this->belongsTo('App\Album');
  }
}
