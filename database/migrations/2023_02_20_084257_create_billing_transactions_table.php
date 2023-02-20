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
        Schema::create('billings', function (Blueprint $table) {
            $table->increments('billing_id');
            $table->unsignedBigInteger('appointment_id');
            $table->string('payment_method');
            $table->string('insurance_provider')->nullable();
            $table->timestamps();

            $table->foreign('appointment_id')->references('appointment_id')->on('appointments')->onDelete('cascade');
        });

        Schema::create('transactionitem', function (Blueprint $table) {
            $table->id();
            $table->string('item');
            $table->decimal('amount', 8, 2);
            $table->timestamps();
        });

        Schema::create('billingitems', function (Blueprint $table) {
            $table->unsignedBigInteger('billing_id');
            $table->unsignedBigInteger('transactionitem_id');
            $table->integer('quantity');
            $table->decimal('total_cost', 8, 2);
            $table->timestamps();

            $table->foreign('billing_id')->references('billing_id')->on('billings')->onDelete('cascade');
            $table->foreign('transactionitem_id')->references('id')->on('transactionitem')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billingitems');
        Schema::dropIfExists('transactionitem');
        Schema::dropIfExists('billings');
    }
};
