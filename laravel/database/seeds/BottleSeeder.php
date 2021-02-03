<?php
use App\Bottle;
use Illuminate\Database\Seeder;


class BottleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Bottle::class, 10)->create();
    }
}
