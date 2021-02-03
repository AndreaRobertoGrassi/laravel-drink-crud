<?php

use Illuminate\Database\Seeder;
use App\Bottle;
use App\Drink;

class DrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Drink::class, 30)    
            -> make()                                     //creo 30 drink senza salvarli in database
            ->each(function($drink){                      //ogni iesimo drink lo passo in questa funzione nella variavile $drink
            $bottle=Bottle::inRandomOrder()->first();     //prendo la prima bottiglia dalla tabella che ad ogni giro è in ordine casuale
            $drink->bottle() -> associate($bottle);       //associo la bottiglia presa casualmente al drink
            $drink->save();                               //salvo il drink iesimo
        });
    }
}
