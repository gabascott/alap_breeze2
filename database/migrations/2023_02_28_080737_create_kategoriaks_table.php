<?php

use App\Models\Kategoriak;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategoriaks', function (Blueprint $table) {
            $table->id();
            $table->string("nev");
            $table->timestamps();
        });

        Kategoriak::create(['nev' => "Ház"]);/*1*/
        Kategoriak::create(['nev' => "Lakás"]);/*2*/
        Kategoriak::create(['nev' => "Építési telek"]);/*3*/
        Kategoriak::create(['nev' => "Garázs"]);/*4*/
        Kategoriak::create(['nev' => "Mezőgazdasági terület"]);/*5*/
        Kategoriak::create(['nev' => "Ipari ingatlan"]);/*6*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategoriaks');
    }
};
