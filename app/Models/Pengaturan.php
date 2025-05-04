<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Pengaturan extends Model
{
    use HasFactory;
    protected $fillable = [
        'subdomain',
        'nama_opd',
        'photo_kepala_opd',
        'nama_kepala_opd',
        'sambutan_kepala_opd',
        'jabatan',
        'alamat',
        'no_tlp',
        'email',
        'maps',
        'instagram',
        'youtube',
        'facebook',
        'token_ig'
    ];

    protected static function booted()
    {
        static::creating(function ($model) {
            Cache::forget('pengaturan_' . request()->subdomain);
        });

        static::updating(function ($model) {
            Cache::forget('instagram_feeds_' . request()->subdomain);
            Cache::forget('pengaturan_' . request()->subdomain);
        });

        static::deleting(function ($model) {
            Cache::forget('pengaturan_' . request()->subdomain);
        });
    }
}
