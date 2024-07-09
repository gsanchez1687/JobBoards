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
        Schema::create('states', function (Blueprint $table) {
            $table->id('id');
            $table->string('name', 255)->nullable(false);
            $table->foreignId('country_id')->constrained();
            $table->char('country_code', 2)->nullable();
            $table->string('fips_code', 255)->nullable();
            $table->string('iso2', 191)->nullable();
            $table->string('type', 255)->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->date('created_at');
            $table->date('updated_at');
            $table->boolean('flag')->default(true);
            $table->string('wikiDataId', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('states');
    }
};
