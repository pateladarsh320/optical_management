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
        Schema::create('lens_index_table', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lensproduct_id')->nullable();
            $table->foreign('lensproduct_id')->references('id')->on('lens_product_table');
            $table->string('index_price')->nullable();
            $table->string('index_type')->nullable();
            $table->string('index_name')->nullable();
            $table->tinyInteger('recommded')->default('1')->comment('1-recommded,2-not-recommded');
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lens_index_table');
    }
};
