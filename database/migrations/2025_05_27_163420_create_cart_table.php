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
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_active');
            $table->integer('items_count');
            $table->integer('items_qty');
            $table->integer('orig_order_id');
			$table->decimal('grand_total', 20, 4);
			$table->decimal('subtotal', 20, 4);
			$table->string('payment_method');
			$table->string('cashier_name');
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};
