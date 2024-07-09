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
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('state_id')->constrained()->onDelete('cascade');
            $table->string('state_code');
            $table->foreignId('country_id')->constrained()->onDelete('cascade');
            $table->string('country_code');
            $table->decimal('latitude',10,8);
            $table->decimal('longitude',11,8);
            $table->timestamps();
            $table->boolean('flag')->default(true);
            $table->string('wikiDataId', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
