<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accessibility_therapist', function (Blueprint $table) {
            $table->id();
            $table->foreignId('accessibility_id')->constrained('accessibilities')->cascadeOnDelete();
            $table->foreignId('therapist_id')->constrained('therapists')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accessibility_therapist');
    }
};
