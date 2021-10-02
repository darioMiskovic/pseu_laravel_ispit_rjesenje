<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNastavniPlanoviTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nastavni_planovi', function (Blueprint $table) {
            $table->id();
            $table->string("naziv", 45);
            $table->text("opis");
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId("skolska_godina_id")->constrained("skolske_godine");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nastavni_planovi');
    }
}
