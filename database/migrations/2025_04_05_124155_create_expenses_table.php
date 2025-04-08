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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->integer('businessUserId');
            $table->string('date');
            $table->integer('itemName');
            $table->integer('totalAmount');
            $table->string('reimburseTo');
            $table->integer('job')->nullable();
            $table->integer('receipt')->nullable();
            $table->string('paymentStatus')->nullable();
            $table->string('details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
