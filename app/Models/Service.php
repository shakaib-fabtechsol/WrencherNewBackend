<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'industry',
        'image',
        'discription',
        'basehour',
        'baseminute',
        'baseprice',
        'maximumprice',
        'showprice'
    ];
}
