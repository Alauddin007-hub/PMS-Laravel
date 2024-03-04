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
        Schema::create('purchase_detailes', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('purchase_id');
            $table->integer('medicine_id');
            $table->string('purchase');
            $table->integer('price');
            $table->integer('quantity');
            $table->integer('subtotal');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_detailes');
    }
};
