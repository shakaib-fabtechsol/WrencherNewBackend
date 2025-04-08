<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = [
        'businessUserId',
        'name',
        'description',
        'type',
        'date',
        'qunatity',
        'trackingStatus',
    ];
}
