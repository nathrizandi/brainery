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
        Schema::create('course_material_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('courseMaterial_id');
            $table->foreign('courseMaterial_id')->references('id')->on('course_materials')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('title');
            $table->string('video');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_material_details');
    }
};
