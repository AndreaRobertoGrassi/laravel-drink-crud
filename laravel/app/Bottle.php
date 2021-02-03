<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bottle extends Model
{
    protected $fillable=[
        'name',
        'price'
    ];

    public function drinks(){      //relazione one to many
        return $this-> hasMany(Drink::class);      //dentro le parentesi acrei potuto mettere App\Drink
    }
}
