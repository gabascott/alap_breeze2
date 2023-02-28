<?php

use App\Models\Ingatlanok;
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
        Schema::create('ingatlanoks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategoria')->references('id')->on('kategoriaks');
            $table->string("leiras")->nullable();
            $table->date("hirdetesDatuma")->nullable();
            $table->boolean("tehermentes")->default(0);
            $table->integer("ar");
            $table->string("kepUrl")->nullable();
            $table->timestamps();
        });

        Ingatlanok::create(['kategoria' => 1, 'leiras' => 'Vmi leírás 1', 'hirdetesDatuma' => '2022-12-24', 'tehermentes' => 1, 'ar' => '1000000', 'kepUrl' => "src/valami"]);
        Ingatlanok::create(['kategoria' => 3, 'leiras' => 'Vmi leírás 2', 'hirdetesDatuma' => '2022-10-03', 'ar' => '1000000', 'kepUrl' => "src/valami"]);
        Ingatlanok::create(['kategoria' => 2, 'leiras' => 'Vmi leírás 3', 'hirdetesDatuma' => '2023-01-17', 'tehermentes' => 1, 'ar' => '1000000', 'kepUrl' => "src/valami"]);
        Ingatlanok::create(['kategoria' => 5, 'leiras' => 'Vmi leírás 4', 'hirdetesDatuma' => '2023-02-01', 'ar' => '1000000', 'kepUrl' => "src/valami"]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingatlanoks');
    }
};
