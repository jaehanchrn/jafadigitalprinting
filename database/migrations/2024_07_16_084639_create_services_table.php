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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('print_type');
            $table->text('size')->nullable();
            $table->text('paper_type')->nullable();
            $table->text('quantity')->nullable();
            $table->text('description')->nullable();
            $table->text('print_images')->nullable();
            $table->decimal('price', 10, 2);
            // Add more fields as needed for your services
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
