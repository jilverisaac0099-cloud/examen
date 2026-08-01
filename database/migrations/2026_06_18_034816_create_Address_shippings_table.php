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
        Schema::create('Adress_shippings', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('number', 10,2);
            $table->string('street',20);
            $table->string('neighborhood', 20 );
            $table->string('city', 20);
            $table->string('reference_location',30);
            $table->string('state_address',30);
            
            $table->integer("customer_id")->unsigned();
            $table->foreign("customer_id")->references("id")->on("customers")->onDelete("cascade")->onUpdate("cascade");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipping_addresses');
    }
};
