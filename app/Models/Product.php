<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Product extends Model
{
    protected $fillable = [
        'title', 'subtitle', 'slug', 'code', 'description', 'features',
        'product_weight', 'brimful_volume', 'image', 'main_category_ids', 'sub_category_ids'
    ];

    protected $casts = [
        'main_category_ids' => 'array',
        'sub_category_ids' => 'array',
    ];

    /**
     * Scope a query to search products by keywords.
     */
    public function scopeSearch(Builder $query, ?string $search): Builder
    {
        if (empty($search)) {
            return $query;
        }

        return $query->where(function ($q) use ($search) {
            $q->where('title', 'like', "%{$search}%")
              ->orWhere('code', 'like', "%{$search}%")
              ->orWhere('slug', 'like', "%{$search}%");
        });
    }

    /**
     * Scope a query to filter by main category.
     */
    public function scopeFilterByMainCategory(Builder $query, $mainCategoryId): Builder
    {
        if (empty($mainCategoryId)) {
            return $query;
        }

        $mainCategoryId = (int) $mainCategoryId;

        return $query->where(function ($q) use ($mainCategoryId) {
            $q->whereJsonContains('main_category_ids', $mainCategoryId)
              ->orWhereJsonContains('main_category_ids', (string) $mainCategoryId);
        });
    }

    /**
     * Scope a query to filter by title.
     */
    public function scopeFilterByTitle(Builder $query, ?string $title): Builder
    {
        if (empty($title)) {
            return $query;
        }

        return $query->where('title', $title);
    }
}