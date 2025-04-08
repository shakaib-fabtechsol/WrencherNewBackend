<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
        'customerName',
        'phone',
        'email',
        'service',
        'projectDetails',
        'serviceCatg',
        'address',
        'propertyType',
        'urgency',
        'workScope',
        'materialAvailability',
        'accessDetails',
        'dateAndTime',
        'budget',
        'additionalService',
        'media',
        'referral',
        'notes',
        'businessUserId',
        'customerId',
        'expirationDate',
        'invoiceNumber',
        'status',
    ];
}
