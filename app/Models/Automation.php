<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Automation extends Model
{
    protected $fillable = [
        'businessUserId',
        'email_review_follow_up_enabled',
        'email_review_follow_up_days',
        'email_booking_confirmations_enabled',
        'email_booking_reminders_enabled',
        'email_booking_reminders_days',
        'sms_estimate_sent_enabled',
        'sms_quote_follow_up_enabled',
        'email_quote_follow_up_enabled',
        'missed_call_auto_sms_enabled',
        'google_review_auto_reply_enabled',
        'automated_text_response_enabled',
        'automated_text_response_delay'
    ];
}
