<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Ramsey\Uuid\Uuid;

class Post extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    use HasFactory;
    protected $fillable = [
        'user_id',
        'category_id',
        'subdomain',
        'judul',
        'excrept',
        'slug',
        'body',
        'thumbnail',
        'caption_thumbnail',
        'tanggal_publish',
        'status',
        'pin',
        'views'
    ];

    protected static function booted()
    {
        static::creating(function ($model) {
            $model->id = Uuid::uuid4()->toString();
            Cache::forget('exclusive_posts_'. $model->subdomain);
        });

        static::updating(function ($model) {
            Cache::forget('exclusive_posts_'. $model->subdomain);
        });

        static::deleting(function ($model) {
            Cache::forget('exclusive_posts_'. $model->subdomain);
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
