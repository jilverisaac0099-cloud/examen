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
        Schema::create('factory_articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('current_stock');
            $table->decimal('negotiated_cost');
            $table->integer('delivery_time');
            
            $table->integer('factories_id')->unsigned();
            $table->foreigh('factories_id')->references('id')->on('factories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factory_articles');
    }
};
