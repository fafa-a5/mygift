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
            $table->string('number', 50);
            $table->date('date');
            $table->date('date_processing');
            $table->date('date_delivery');
            $table->float('cost');
            $table->float('cost_before_tax');
            $table->float('value_added_tax');
            $table->float('order_tax');
            $table->float('cost_total');
            $table->string('product_numbert', 100);
            $table->string('address_delivery', 100);
            $table->string('name_recipient', 50);
            $table->string('phone_number_recipient', 20);
            
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
