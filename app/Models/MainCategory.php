<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;

class Maincategory extends Model
{
    use HasFactory;

    protected $primaryKey = 'maincategory_id';

    protected $fillable = [
        'maincategory_name',
        'maincategory_image',
        'slug',
    ];

    // Auto generate slug on create/update
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            $category->slug = $category->slug ?: Str::slug($category->maincategory_name);
        });

        static::updating(function ($category) {
            if (!$category->isDirty('slug')) {   // If slug not manually changed
                $category->slug = Str::slug($category->maincategory_name);
            }
        });
    }

    public function subcategories()
    {
        return $this->hasMany(SubCategory::class, 'maincategory_id', 'maincategory_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'main_category_id', 'maincategory_id');
    }

    /**
     * Scope a query to search main categories by keywords.
     */
    public function scopeSearch(Builder $query, ?string $search): Builder
    {
        if (empty($search)) {
            return $query;
        }

        return $query->where(function ($q) use ($search) {
            $q->where('maincategory_name', 'like', "%{$search}%")
              ->orWhere('slug', 'like', "%{$search}%");
        });
    }
}
