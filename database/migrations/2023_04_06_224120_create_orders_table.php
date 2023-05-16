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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 50);
            $table->float('cost_before_tax');
            $table->float('tax');
            $table->float('total_cost');
            $table->integer('total_items')->unsigned();
            $table->string('sender', 50);
            $table->string('sender_phone', 50);
            $table->string('sender_email', 50)->nullable();
            $table->string('recipient', 50);
            $table->string('recipient_phone', 20);
            $table->string('recipient_email', 50)->nullable();
            $table->string('delivery_address', 100);
            $table->date('processing_date')->nullable();
            $table->date('delivery_date')->nullable();
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
};
