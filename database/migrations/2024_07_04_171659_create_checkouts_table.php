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
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('address_users');
            $table->string('payment_proof');
            $table->decimal('total_price_product', 10, 2); // Example column for payment proof
            // Add other columns as needed
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkouts');
    }
};

// class CreateCheckoutsTable extends Migration
// {
//     public function up()
//     {
//         Schema::create('checkouts', function (Blueprint $table) {
//             $table->id();
//             $table->foreignId('user_id')->constrained()->onDelete('cascade');
//             $table->foreignId('address_id')->constrained()->onDelete('cascade');
//             $table->string('payment_proof');
//             $table->decimal('total_price_product', 10, 2);
//             $table->timestamps();
//         });
//     }

//     public function down()
//     {
//         Schema::dropIfExists('checkouts');
//     }
// };