<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'businessUserId',
        'customerId',
        'address',
        'linkJob',
        'lineItems',
        'jobNotes',
        'checklist',
    ];
}
