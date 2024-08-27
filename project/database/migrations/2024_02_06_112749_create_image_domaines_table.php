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
        Schema::create('image_domaines', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('legend')->nullable();

            $table->unsignedBigInteger('sous_domaines_id');
            $table->foreign('sous_domaines_id')->references('id')->on('sous_domaines')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_domaines');
    }
};
