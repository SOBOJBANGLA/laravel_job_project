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
        Schema::create('employeers', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->foreignId('company_id');
            $table->string('email',50)->unique();
            $table->string('password');
            $table->string('photo');
            $table->foreignId('location_id');
            $table->text('description')->nullable();
            $table->rememberToken();
            $table->enum('status',['active','inactive']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employeers');
    }
};
