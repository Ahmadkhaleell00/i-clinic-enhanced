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
        Schema::create('appointments', function (Blueprint $table) {
            $table->string('name', 30);
            $table->integer('matric_id', 8);
            $table->string('email')->unique();
            $table->string('phone_no', 15);
            $table->date('date');
            $table->string('department', 15);
            $table->string('doctor', 10);
            $table->string('message', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
