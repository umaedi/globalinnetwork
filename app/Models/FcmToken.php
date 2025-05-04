<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FcmToken extends Model
{
    protected $fillable = [
        'user_id',
        'token',
        'device_type',
        'device_id' ,
        'browser',
        'ip_address',
        'is_active'
    ];
}
