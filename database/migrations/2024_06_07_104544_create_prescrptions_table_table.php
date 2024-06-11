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
        Schema::create('prescriptions_table', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('flow_id')->nullable();
            $table->foreign('flow_id')->references('id')->on('flow_table');
            $table->tinyInteger('prescription_type')->default('1')->comment('1-prescription,2-non-prescription,3-Reader');
            $table->string('display_title')->nullable();
            $table->longText('prescription_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescriptions_table');
    }
};
