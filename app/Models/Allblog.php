<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;

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

    /**
     * Scope a query to search blogs by keywords.
     */
    public function scopeSearch(Builder $query, ?string $search): Builder
    {
        if (empty($search)) {
            return $query;
        }

        return $query->where(function ($q) use ($search) {
            $q->where('title', 'like', "%{$search}%")
              ->orWhere('short_description', 'like', "%{$search}%")
              ->orWhere('long_description', 'like', "%{$search}%")
              ->orWhere('publisher', 'like', "%{$search}%");
        });
    }
}
