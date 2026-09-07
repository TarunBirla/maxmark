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
        Schema::create('video_sections', function (Blueprint $table) {
            $table->id();
            $table->string('eyebrow')->default('EXCELLENCE IN CRAFTSMANSHIP');
            $table->string('heading')->default('Watch How We Transform London Homes');
            $table->text('description');
            $table->string('button_text')->nullable()->default('Explore Our Services');
            $table->string('button_link')->nullable()->default('#services');
            $table->string('video_url')->default('/video.mp4');
            $table->string('poster_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_sections');
    }
};
