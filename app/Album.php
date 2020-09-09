<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
  protected $fillable = [
    'title',
    'artist',
    'artist_id',
    'year',
    'image',
    'description',
  ];

  public function songs(){
    return $this->hasMany('App\Song');
  }

  public function artist(){
    return $this->belongsTo('App\Artist');
  }
}
