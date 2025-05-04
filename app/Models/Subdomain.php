<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subdomain extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nama_subdomain',
        'status'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
