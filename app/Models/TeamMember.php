<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $fillable = [
        'businessUserId',
        'fullName',
        'email',
        'phone',
        'permissions',
        'industriesId',
        'role',
        'experience',
        'status',
        'level',
    ];
}
