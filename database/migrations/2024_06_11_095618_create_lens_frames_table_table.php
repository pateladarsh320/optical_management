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
        Schema::create('lens_frames_table', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lensindex_id')->nullable();
            $table->foreign('lensindex_id')->references('id')->on('lens_index_table');
            $table->tinyInteger('lensindexType')->default('1')->comment('1-anti-reflecting-coat,2-tint');
            $table->string('price')->nullable();
            $table->tinyInteger('recommded')->default('1')->comment('1-recommded,2-not-recommded');
            $table->tinyInteger('coating_type')->default('1')->comment('1-Standard,2-Advance,3-Premium');
            $table->string('coating_name')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lens_frames_table');
    }
};
