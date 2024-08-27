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
        Schema::create('sous_domaines', function (Blueprint $table) {
            $table->id();
            $table->string('libelle')->nullable();
            $table->string('image');
            $table->longText('contenu')->nullable();

            $table->unsignedBigInteger('domaines_id');
            $table->foreign('domaines_id')->references('id')->on('domaines')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sous_domaines');
    }
};
