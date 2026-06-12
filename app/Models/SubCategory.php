<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;

class SubCategory extends Model
{
    use HasFactory;
    protected $table = 'subcategorie';

    protected $primaryKey = 'subcategory_id';

    protected $fillable = [
        'maincategory_id',
        'subcategory_name',
        'slug',
        'description',
        'position',
        'subcategory_image',
    ];

    /**
     * Auto-generate slug if empty
     */
    protected static function booted()
    {
        static::creating(function ($sub) {
            if (empty($sub->slug)) {
                $sub->slug = Str::slug($sub->subcategory_name);
            }
        });

        static::updating(function ($sub) {
            if (!$sub->isDirty('slug')) {
                $sub->slug = Str::slug($sub->subcategory_name);
            }
        });
    }

    /**
     * Relationship → SubCategory belongs to MainCategory
     */
    public function maincategory()
    {
        return $this->belongsTo(MainCategory::class, 'maincategory_id', 'maincategory_id');
    }

    /**
     * Relationship → SubCategory has many Products
     * (if your product stores multiple subcat ids JSON)
     */
    public function products()
    {
        return $this->hasMany(Product::class, 'sub_category_ids');
    }

    /**
     * Scope a query to search subcategories by keywords.
     */
    public function scopeSearch(Builder $query, ?string $search): Builder
    {
        if (empty($search)) {
            return $query;
        }

        return $query->where(function ($q) use ($search) {
            $q->where('subcategory_name', 'like', "%{$search}%")
              ->orWhere('slug', 'like', "%{$search}%")
              ->orWhere('description', 'like', "%{$search}%");
        });
    }

    /**
     * Scope a query to filter by main category.
     */
    public function scopeFilterByMainCategory(Builder $query, ?int $mainCategoryId): Builder
    {
        if (empty($mainCategoryId)) {
            return $query;
        }

        return $query->where('maincategory_id', $mainCategoryId);
    }
}