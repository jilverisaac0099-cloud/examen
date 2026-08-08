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
        Schema::create('address_shippings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number', 50)->nullable();
            $table->string('street', 100);
            $table->string('neighborhood', 100);
            $table->string('city', 100);
            $table->string('reference_location', 255)->nullable();
            $table->string('state_address', 50)->default('activo');
        
            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade')->onUpdate('cascade');
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('address_shippings');
    }
};
