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
        Schema::create('lens_product_table', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lensgroup_id')->nullable();
            $table->foreign('lensgroup_id')->references('id')->on('lens_group_table');
            $table->string('display_title')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lens_product_table');
    }
};
