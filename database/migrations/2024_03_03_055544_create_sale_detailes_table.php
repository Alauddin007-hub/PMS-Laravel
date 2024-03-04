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
        Schema::create('sale_detailes', function (Blueprint $table) {
            $table->id();
            $table->integer('sale_id');
            $table->integer('product_id');
            $table->integer('selling_price');
            $table->integer('quantity');
            $table->tinyInteger('discount')->default(0);
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
        Schema::dropIfExists('sale_detailes');
    }
};
