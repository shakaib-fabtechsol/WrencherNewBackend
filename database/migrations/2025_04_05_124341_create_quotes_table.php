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
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->string('customerName');
            $table->string('phone');
            $table->string('email');
            $table->string('service');
            $table->string('projectDetails');
            $table->string('serviceCatg');
            $table->string('address');
            $table->string('propertyType');
            $table->string('urgency');
            $table->string('workScope');
            $table->string('materialAvailability');
            $table->string('accessDetails');
            $table->string('dateAndTime');
            $table->integer('budget');
            $table->string('additionalService');
            $table->string('media');
            $table->string('referral');
            $table->text('notes');
            $table->integer('businessUserId');
            $table->integer('customerId');
            $table->string('expirationDate');
            $table->string('invoiceNumber');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
