<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->text('no_invoice');
            $table->string('address_id')->nullable();
            $table->decimal('shipping_cost', 8, 2)->nullable();
            $table->decimal('total_price_product', 8, 2)->nullable();
            $table->decimal('total_price_order', 8, 2)->nullable();
            $table->string('payment_confirmation_image')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
}
