<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
  protected $fillable = [
    'name',
  ];

  public function artists(){
    return $this->belongsToMany('App\Artist');
  }
}
