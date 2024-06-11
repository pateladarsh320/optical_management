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
        Schema::create('clip_table', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prescription_id')->nullable();
            $table->foreign('prescription_id')->references('id')->on('prescriptions_table');
            $table->tinyInteger('prescription_type')->default('1')->comment('1-prescription,2-non-prescription,3-Reader');
            $table->string('clip_on_prize')->nullable();
            $table->string('clip_on_quantity')->nullable();
            $table->string('clip_on_name')->nullable();
            $table->string('clip_on_type')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clip_table');
    }
};
