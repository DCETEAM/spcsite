<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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

}