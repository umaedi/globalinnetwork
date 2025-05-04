<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['subdomain', 'nama_kategori', 'slug'];
    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }
}