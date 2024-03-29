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
        Schema::create('service_models', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('path_id');
            $table->integer('recent_activity_id');
            $table->integer('bicycle_id');
            $table->integer('temp_key');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_models');
    }
};
