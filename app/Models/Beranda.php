<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Beranda extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'body', 'file', 'status'];

    // Event untuk menghasilkan slug dari title
    public static function boot()
    {
        parent::boot();

        static::saving(function ($beranda) {
            $beranda->slug = Str::slug($beranda->title);
        });
    }
}
