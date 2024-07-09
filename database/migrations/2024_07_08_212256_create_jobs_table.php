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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('country_id')->constrained();
            $table->foreignId('state_id')->constrained();
            $table->foreignId('city_id')->constrained();
            $table->foreignId('gender_id')->constrained();
            $table->integer('importance_id')->default(0)->nullable();
            $table->foreignId('currency_id')->constrained()->nullable();
            $table->decimal('salary',10,8)->nullable();
            $table->foreignId('experience_id')->constrained();
            $table->foreignId('type_jobs_id')->constrained();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('status_id')->default(0);
            $table->string('ege_min',2)->nullable();
            $table->string('ege_max',2)->nullable();
            $table->integer('vacant_quantities')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
