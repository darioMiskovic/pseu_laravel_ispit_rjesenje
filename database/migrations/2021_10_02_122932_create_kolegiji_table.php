<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKolegijiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kolegiji', function (Blueprint $table) {
            $table->id();
            $table->string("naziv", 45);
            $table->integer("ects");
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId("nastavnik_id")->constrained("nastavnici");
            $table->foreignId("nastavni_plan_id")->constrained("nastavni_planovi");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kolegiji');
    }
}
