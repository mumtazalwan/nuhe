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
        Schema::create('provinces', function (Blueprint $table) {
            $table->id();
            $table->string('province_name');
            $table->string('capital');
            $table->string('local_language');
            $table->string('island');
            $table->integer('population');
            $table->string('ethnic');
            $table->string('regional_house');
            $table->string('regional_house_image');
            $table->string('dance');
            $table->string('dance_image');
            $table->string('weapon');
            $table->string('weapon_image');
            $table->string('music');
            $table->string('music_image');
            $table->string('tradition');
            $table->text('flash_info');
            // $table->text('more_detail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provinces');
    }
};
