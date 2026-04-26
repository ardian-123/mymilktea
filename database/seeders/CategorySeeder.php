<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Classic Milk Tea',
                'slug' => 'classic-milk-tea',
                'description' => 'Our signature milk teas brewed with premium tea leaves and fresh milk',
                'icon' => 'cup',
                'sort_order' => 1,
            ],
            [
                'name' => 'Fruit Tea',
                'slug' => 'fruit-tea',
                'description' => 'Refreshing fruit-infused teas with real fruit pieces',
                'icon' => 'fruit',
                'sort_order' => 2,
            ],
            [
                'name' => 'Smoothies & Frappes',
                'slug' => 'smoothies-frappes',
                'description' => 'Creamy blended beverages perfect for any weather',
                'icon' => 'blender',
                'sort_order' => 3,
            ],
            [
                'name' => 'Cheese Foam Series',
                'slug' => 'cheese-foam',
                'description' => 'Unique savory cheese foam topping on various tea bases',
                'icon' => 'cheese',
                'sort_order' => 4,
            ],
            [
                'name' => 'Brown Sugar Series',
                'slug' => 'brown-sugar',
                'description' => 'Rich brown sugar syrup with fresh milk and chewy pearls',
                'icon' => 'droplet',
                'sort_order' => 5,
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}

