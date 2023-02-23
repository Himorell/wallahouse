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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();

            
            $table->integer('price')->nullable();
            $table->string('title');
            $table->string('category');
            $table->integer('rooms');
            $table->integer('baths');
            $table->integer('persons');
            $table->string('population');
            $table->string('province');
            $table->string('description')->nullable();
            $table->string('preferences')->nullable();
            $table->string('nameProperty');
            $table->string('phone');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('house');
    }
};
