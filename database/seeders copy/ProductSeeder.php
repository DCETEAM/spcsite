<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'title' => '40 Litre Premium Industrial Plastic Pail (Container)',
'details' => json_encode([
                'subtitle' => 'Durable and Versatile Plastic Pail for Industrial Use',
                'description' => 'Our 40 Litre Premium Industrial Plastic Pail is designed for heavy-duty applications, offering superior durability and resistance to chemicals. Ideal for storing and transporting various materials in industrial settings.',
                'features' => [
                    'High-density polyethylene (HDPE) construction for strength and durability',
                    'Tight-sealing lid to prevent leaks and contamination',
                    'Ergonomic handle for easy carrying and pouring',
                    'Resistant to a wide range of chemicals and solvents',
                    'Stackable design for efficient storage',
                ],
                'image' => 'assets/img/40_litre_industrial_plastic_pail.png',
                'alt_text' => '40 Litre Industrial Plastic Pail',
            ]),
             
        ]);
    }
}
