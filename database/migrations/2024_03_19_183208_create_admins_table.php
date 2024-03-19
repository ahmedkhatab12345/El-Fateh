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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('en_first_name');
            $table->string('en_last_name');
            $table->string('ar_first_name');
            $table->string('ar_last_name');
            $table->string('email')->unique();
            $table->bigInteger('phone')->unique();
            $table->string('image')->nullable();
            $table->enum('gender',['male','female'])->default('male');
            $table->string('status');
            $table->string('password');
            $table->string('type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
