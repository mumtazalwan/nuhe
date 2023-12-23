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
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('banner')->nullable();
            $table->string('image');
            $table->text('location');
            $table->integer('province_id');
            $table->text('history');
            $table->string('image_history_one');
            $table->string('image_history_two');
            $table->text('attraction');
            $table->string('image_attraction_one');
            $table->string('image_attraction_two');
            $table->text('interesting_point');
            $table->string('interesting_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinations');
    }
};
