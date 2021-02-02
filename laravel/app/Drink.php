<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
  protected $fillable = [     //campi che vado a chiedere nel form
    'name',
    'gradation',
    'price'
  ];
}
