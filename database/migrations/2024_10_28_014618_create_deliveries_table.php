<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_delivery_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('delivery', function (Blueprint $table) {
            $table->id('delivery_id');
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->dateTime('delivery_date');
            $table->enum('status', ['scheduled', 'delivered', 'cancelled'])->default('scheduled');
            $table->string('driver_name', 100);
            $table->string('vehicle_number', 20);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('delivery');
    }
};
