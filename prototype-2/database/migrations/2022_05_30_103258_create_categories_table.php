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



        Schema::create('categories', function (Blueprint $table) {
            $table->increments("id_categorie");
            $table->string('name_categorie')->nullable();
            $table->string('description_categories')->nullable();
            $table->timestamps();

        });
      

        Schema::create('places', function (Blueprint $table) {
            $table->increments("id_places")->nullable();
            $table->string('nom_place')->nullable();
            $table->string('photo_place')->nullable();
            $table->string('video_place')->nullable();
            $table->string('description_place')->nullable();
            $table->string('tumperature_place')->nullable();
            $table->unsignedInteger("id_categorie")->nullable(); //Unique key
            $table->timestamps();
            $table->foreign('id_categorie')
            ->references('id_categorie')
            ->on('categories')
            ->onDelete('cascade');;
            
        });

      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
