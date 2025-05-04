<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Submenu extends Model
{
    use HasFactory;
    protected $fillable = [
        'menu_id',
        'nama_submenu',
        'link',
        'status'
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    protected static function booted()
    {
        static::creating(function ($model) {
            Cache::forget('menus_' . request()->subdomain);
        });

        static::updating(function ($model) {
            Cache::forget('menus_' . request()->subdomain);
        });

        static::deleting(function ($model) {
            Cache::forget('menus_' . request()->subdomain);
        });
    }
}
