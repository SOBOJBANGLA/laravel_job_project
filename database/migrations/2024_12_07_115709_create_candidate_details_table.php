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
        Schema::create('candidate_details', function (Blueprint $table) {
            $table->id();
            $table->string('f_name',20)->nullable();
            $table->string('l_name',20)->nullable();
            $table->string('occupation',20)->nullable();
            $table->string('phone',20)->nullable();
            $table->string('address',300)->nullable();
            $table->string('about',300)->nullable();
            $table->string('image',50)->nullable();
            $table->string('bio',50)->nullable();
            $table->integer('user_id');
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidate_details');
    }
};
