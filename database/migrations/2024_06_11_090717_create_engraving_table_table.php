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
        Schema::create('engraving_table', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prescription_id')->nullable();
            $table->foreign('prescription_id')->references('id')->on('prescriptions_table');
            $table->tinyInteger('personalize_frame')->default('1')->comment('1-basic,2-standard,3-advance');
            $table->string('price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('engraving_table');
    }
};
