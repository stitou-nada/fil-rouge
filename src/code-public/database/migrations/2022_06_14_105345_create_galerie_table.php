<?php

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
        Schema::create('galerie', function (Blueprint $table) {
            $table->increments("id_galerie");
            $table->string("photos_place")->nullable(); //Unique key
            $table->string("videos_place")->nullable(); //Unique key
            $table->unsignedInteger("id_place")->nullable(); //Unique key
            $table->foreign('id_place')
            ->references('id_places')
            ->on('places')
            ->onDelete('cascade');
            $table->timestamps();

        });
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galerie');
    }
};
