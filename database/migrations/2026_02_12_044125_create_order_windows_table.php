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
        Schema::create('order_windows', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('width');
            $table->integer('height');
            $table->string('material');
            $table->integer('hutters');
            $table->string('phone');
            $table->string('address');
            $table->enum('status', ['0', '1'])->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_windows');
    }
};
