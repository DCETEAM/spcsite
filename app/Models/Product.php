<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'subtitle', 'slug', 'description', 'features',
        'image', 'main_category_ids', 'sub_category_ids'
    ];

   protected $casts = [
    'main_category_ids' => 'array',
    'sub_category_ids' => 'array',
];

}