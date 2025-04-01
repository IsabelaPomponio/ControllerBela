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
        Schema::create('bebelas', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100); // Campo 'name', max 100 caracteres
            $table->string('description', 255); // Campo 'description', max 255 caracteres
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bebelas');
    }
};
