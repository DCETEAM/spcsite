<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductSlug;

class ProductSlugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ProductSlug::create([
            'slug' => '10ltr_bucket',
            'view_name' => 'product01'
        ]);
        ProductSlug::create([
            'slug' => '20ltr_bucket',
            'view_name' => 'product02'
        ]);
        ProductSlug::create([
            'slug' => '30ltr_bucket',
            'view_name' => 'product03'
        ]);
        ProductSlug::create([
            'slug' => '40ltr_bucket',
            'view_name' => 'product04'
        ]);
    }
}
