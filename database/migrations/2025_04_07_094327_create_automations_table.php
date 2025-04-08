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
        Schema::create('automations', function (Blueprint $table) {
            $table->id();
            $table->integer('businessUserId');
            $table->string('email_review_follow_up_enabled');
            $table->string('email_review_follow_up_days');
            $table->string('email_booking_confirmations_enabled');
            $table->string('email_booking_reminders_enabled');
            $table->string('email_booking_reminders_days');
            $table->string('sms_estimate_sent_enabled');
            $table->string('sms_quote_follow_up_enabled');
            $table->string('email_quote_follow_up_enabled');
            $table->string('missed_call_auto_sms_enabled');
            $table->string('google_review_auto_reply_enabled');
            $table->string('automated_text_response_enabled');
            $table->string('automated_text_response_delay');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('automations');
    }
};
