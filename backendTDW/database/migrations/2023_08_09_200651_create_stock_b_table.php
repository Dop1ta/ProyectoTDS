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
        Schema::create('stockB', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bebida_id');
            $table->unsignedBigInteger('bodega_id');
            $table->integer('cantidad');
            $table->timestamps();

            $table->foreign('bebida_id')->references('id')->on('bebidas')->onDelete('cascade');
            $table->foreign('bodega_id')->references('id')->on('bodegas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_b');
    }
};