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
        Schema::create('meals_translation', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('meals_id');
            $table->string('title');
            $table->string('description');
            $table->string('slug')->default('none');
            $table->string('locale')->index();
            $table->unique(['meals_id', 'locale']);
            $table->foreign('meals_id')->references('id')->on('meals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meals_translation');
    }
};
