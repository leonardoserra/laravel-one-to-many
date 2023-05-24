<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image_src',
        'description',
        'slug'
    ];

    public static function convertIntoSlug(string $title) {
        return Str::slug($title, '-');
    }
}
