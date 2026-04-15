<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class AllBlog extends Model
{
    protected $table = 'blogsss';

    protected $fillable = [
        'title', 'slug', 'image', 'publisher',
        'publish_date', 'short_description', 'long_description'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($blog) {
            if (empty($blog->slug)) {
                $blog->slug = Str::slug($blog->title);
            }
        });
    }
}
