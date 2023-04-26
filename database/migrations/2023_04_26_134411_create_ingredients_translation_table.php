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
        Schema::create('ingredients_translation', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('ingredient_id');
            $table->string('title');
            $table->string('locale')->index();
            $table->unique(['ingredient_id', 'locale']);
            $table->foreign('ingredient_id')->references('id')->on('ingredients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingredients_translation');
    }
};
