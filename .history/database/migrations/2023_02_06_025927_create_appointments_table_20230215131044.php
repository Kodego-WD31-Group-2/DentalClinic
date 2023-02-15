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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id('appointment_id');
            // $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('doctor_id');
            $table->date('appointment_date');
            $table->string('appointment_time');
            $table->string('appointment_type')->nullable();
            $table->text('reason')->nullable();
            $table->text('dental_history')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            // $table->string('gender')->nullable();
            // $table->date('dob')->nullable();
            // $table->text('medications')->nullable();
            // $table->text('allergies')->nullable();
            // $table->text('medical-conditions')->nullable();
            // $table->string('phone-number')->nullable();
            // $table->string('email')->nullable();
            // $table->string('emergency-contact-name')->nullable();
            // $table->string('emergency-contact-number')->nullable();
            // $table->text('special-instructions')->nullable();
            // $table->string('referral-source')->nullable();
            // $table->string('hear-about-practice')->nullable();
            // $table->boolean('signature-confirm')->default(true);
            // $table->boolean('reminders-consent')->default(true);
            // $table->boolean('release-signature')->default(true);
            $table->timestamps();

            // $table->foreign('patient_id')
            //     ->references('patient_id')
            //     ->on('patients')
            //     ->onDelete('cascade');

            $table->foreign('doctor_id')
                ->references('doctor_id')
                ->on('doctors')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
};