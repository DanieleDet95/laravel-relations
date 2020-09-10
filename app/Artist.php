<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
  protected $fillable = [
    'name',
    'year',
    'image',
    'description',
  ];

  public function albums(){
    return $this->hasMany('App\Album');
  }

  public function sponsors(){
    return $this->belongsToMany('App\Sponsor');
  }
}
