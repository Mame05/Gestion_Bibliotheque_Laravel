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
        Schema::create('livres', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->date('date_publication');
            $table->unsignedBigInteger('nombre_page');
            $table->string('auteur');
            $table->string('isbn');
            $table->string('editeur');
            $table->enum('disponibilite', ['Oui','Non']);
            $table->unsignedBigInteger('categorie_id');
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');;
            $table->unsignedBigInteger('rayon_id');
            $table->foreign('rayon_id')->references('id')->on('rayons')->onDelete('cascade');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livres');
    }
};
