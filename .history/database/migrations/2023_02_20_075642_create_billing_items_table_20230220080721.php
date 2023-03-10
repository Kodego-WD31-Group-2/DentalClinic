<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('billing_id');
            $table->unsignedBigInteger('transactionitem_id');
            $table->integer('quantity');
            $table->decimal('amount', 8, 2);
            $table->timestamps();
        
            $table->foreign('billing_id')->references('id')->on('billings')->onDelete('cascade');
            $table->foreign('transactionitem_id')->references('id')->on('transaction_items')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billing_items');
    }
};
