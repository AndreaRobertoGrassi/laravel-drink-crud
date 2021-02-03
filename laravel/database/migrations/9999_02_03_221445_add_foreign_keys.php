<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('drinks', function (Blueprint $table) {
            $table -> foreign('bottle_id', 'drink-bottle')->references('id')-> on('bottles');
        });
    }

    /** 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()     // elimina la relazione tra le tabelle
    {

        Schema::table('drinks', function (Blueprint $table) {
            $table -> dropForeign('drink-bottle');        //drink-bottle serve solo per fare riferimento oppure potevo inserire [bottle-id]
        });
        
    }  
}
