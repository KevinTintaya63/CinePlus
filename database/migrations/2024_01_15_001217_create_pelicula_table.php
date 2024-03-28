<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pelicula', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->nullable(); 
            $table->text('descripcion',250)->nullable();
            $table->string('img_first')->nullable(); 
            $table->string('img_second')->nullable(); 
            $table->string('img_third')->nullable();
            $table->char('categoria')->nullable();
            $table->integer('calificacion')->nullable();
            $table->string('url_first')->nullable(); 
            $table->string('url_second')->nullable(); 
            $table->string('url_third')->nullable(); 
            $table->string('url_four')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelicula');
    }
};
