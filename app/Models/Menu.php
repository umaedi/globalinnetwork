<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Ramsey\Uuid\Uuid;

class Menu extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    
    use HasFactory;
    protected $fillable = [
        'subdomain',
        'nama_menu',
        'link',
        'status'
    ];

    public function submenu()
    {
        return $this->hasMany(Submenu::class);
    }

    protected static function booted()
    {
        static::creating(function ($model) {
            $model->id = Uuid::uuid4()->toString();
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
