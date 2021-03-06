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

  public function bottle(){       //relazione many to one
    return $this->belongsTo(Bottle::class);
  }

  // public function drink(){                        //esempio di relazione one to one
  //   return $this->hasOne('App\Drink');
  // }

}
