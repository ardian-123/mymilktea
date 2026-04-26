<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $classicMilkTea = Category::where('slug', 'classic-milk-tea')->first();
        $fruitTea = Category::where('slug', 'fruit-tea')->first();
        $smoothies = Category::where('slug', 'smoothies-frappes')->first();
        $cheeseFoam = Category::where('slug', 'cheese-foam')->first();
        $brownSugar = Category::where('slug', 'brown-sugar')->first();

        $products = [
            // Classic Milk Tea
            [
                'category_id' => $classicMilkTea->id,
                'name' => 'Original Pearl Milk Tea',
                'slug' => 'original-pearl-milk-tea',
                'description' => 'Our classic black tea with creamy milk and chewy tapioca pearls. The perfect balance of tea flavor and sweetness.',
                'price' => 5.50,
                'is_featured' => true,
                'is_available' => true,
                'sort_order' => 1,
            ],
            [
                'category_id' => $classicMilkTea->id,
                'name' => 'Jasmine Green Milk Tea',
                'slug' => 'jasmine-green-milk-tea',
                'description' => 'Fragrant jasmine green tea blended with fresh milk. Light, floral, and refreshing.',
                'price' => 5.50,
                'is_featured' => true,
                'is_available' => true,
                'sort_order' => 2,
            ],
            [
                'category_id' => $classicMilkTea->id,
                'name' => 'Oolong Milk Tea',
                'slug' => 'oolong-milk-tea',
                'description' => 'Smooth roasted oolong tea with milk. A sophisticated flavor with a hint of caramel.',
                'price' => 5.75,
                'is_featured' => false,
                'is_available' => true,
                'sort_order' => 3,
            ],
            [
                'category_id' => $classicMilkTea->id,
                'name' => 'Taro Milk Tea',
                'slug' => 'taro-milk-tea',
                'description' => 'Creamy taro root flavor with milk and purple hue. A customer favorite!',
                'price' => 6.00,
                'is_featured' => true,
                'is_available' => true,
                'sort_order' => 4,
            ],
            [
                'category_id' => $classicMilkTea->id,
                'name' => 'Matcha Latte',
                'slug' => 'matcha-latte',
                'description' => 'Premium Japanese matcha green tea with steamed milk. Rich, earthy, and energizing.',
                'price' => 6.25,
                'is_featured' => true,
                'is_available' => true,
                'sort_order' => 5,
            ],
            [
                'category_id' => $classicMilkTea->id,
                'name' => 'Thai Milk Tea',
                'slug' => 'thai-milk-tea',
                'description' => 'Authentic Thai tea with condensed milk. Bold, orange, and irresistibly creamy.',
                'price' => 5.75,
                'is_featured' => false,
                'is_available' => true,
                'sort_order' => 6,
            ],

            // Fruit Tea
            [
                'category_id' => $fruitTea->id,
                'name' => 'Passion Fruit Green Tea',
                'slug' => 'passion-fruit-green-tea',
                'description' => 'Tropical passion fruit with green tea and real fruit seeds. Bursting with flavor.',
                'price' => 5.75,
                'is_featured' => true,
                'is_available' => true,
                'sort_order' => 1,
            ],
            [
                'category_id' => $fruitTea->id,
                'name' => 'Strawberry Lemonade Tea',
                'slug' => 'strawberry-lemonade-tea',
                'description' => 'Fresh strawberry puree with lemon and black tea. Sweet, tart, and refreshing.',
                'price' => 5.50,
                'is_featured' => false,
                'is_available' => true,
                'sort_order' => 2,
            ],
            [
                'category_id' => $fruitTea->id,
                'name' => 'Mango Green Tea',
                'slug' => 'mango-green-tea',
                'description' => 'Sweet mango chunks with jasmine green tea. A tropical paradise in a cup.',
                'price' => 5.75,
                'is_featured' => true,
                'is_available' => true,
                'sort_order' => 3,
            ],
            [
                'category_id' => $fruitTea->id,
                'name' => 'Peach Oolong Tea',
                'slug' => 'peach-oolong-tea',
                'description' => 'Ripe peach flavor with oolong tea. Delicate, sweet, and aromatic.',
                'price' => 5.50,
                'is_featured' => false,
                'is_available' => true,
                'sort_order' => 4,
            ],
            [
                'category_id' => $fruitTea->id,
                'name' => 'Lychee Rose Tea',
                'slug' => 'lychee-rose-tea',
                'description' => 'Exotic lychee with rose petals and white tea. Elegant and fragrant.',
                'price' => 6.00,
                'is_featured' => true,
                'is_available' => true,
                'sort_order' => 5,
            ],

            // Smoothies & Frappes
            [
                'category_id' => $smoothies->id,
                'name' => 'Mango Smoothie',
                'slug' => 'mango-smoothie',
                'description' => 'Fresh mango blended with ice and milk. Thick, creamy, and tropical.',
                'price' => 6.50,
                'is_featured' => true,
                'is_available' => true,
                'sort_order' => 1,
            ],
            [
                'category_id' => $smoothies->id,
                'name' => 'Strawberry Banana Smoothie',
                'slug' => 'strawberry-banana-smoothie',
                'description' => 'Classic combination of fresh strawberries and banana. Naturally sweet and filling.',
                'price' => 6.25,
                'is_featured' => false,
                'is_available' => true,
                'sort_order' => 2,
            ],
            [
                'category_id' => $smoothies->id,
                'name' => 'Matcha Frappe',
                'slug' => 'matcha-frappe',
                'description' => 'Blended matcha with milk and ice. Topped with whipped cream.',
                'price' => 6.75,
                'is_featured' => true,
                'is_available' => true,
                'sort_order' => 3,
            ],
            [
                'category_id' => $smoothies->id,
                'name' => 'Taro Smoothie',
                'slug' => 'taro-smoothie',
                'description' => 'Creamy taro blended with milk and ice. Purple perfection.',
                'price' => 6.50,
                'is_featured' => false,
                'is_available' => true,
                'sort_order' => 4,
            ],
            [
                'category_id' => $smoothies->id,
                'name' => 'Cookies & Cream Frappe',
                'slug' => 'cookies-cream-frappe',
                'description' => 'Chocolate cookie crumbles blended with milk and ice. A dessert in a cup!',
                'price' => 6.75,
                'is_featured' => true,
                'is_available' => true,
                'sort_order' => 5,
            ],

            // Cheese Foam Series
            [
                'category_id' => $cheeseFoam->id,
                'name' => 'Cheese Foam Black Tea',
                'slug' => 'cheese-foam-black-tea',
                'description' => 'Rich black tea topped with a thick layer of savory cream cheese foam. A perfect contrast of flavors.',
                'price' => 6.25,
                'is_featured' => true,
                'is_available' => true,
                'sort_order' => 1,
            ],
            [
                'category_id' => $cheeseFoam->id,
                'name' => 'Cheese Foam Green Tea',
                'slug' => 'cheese-foam-green-tea',
                'description' => 'Jasmine green tea with our signature cheese foam. Light tea, rich topping.',
                'price' => 6.25,
                'is_featured' => false,
                'is_available' => true,
                'sort_order' => 2,
            ],
            [
                'category_id' => $cheeseFoam->id,
                'name' => 'Cheese Foam Oolong',
                'slug' => 'cheese-foam-oolong',
                'description' => 'Roasted oolong tea with creamy cheese foam. Complex and satisfying.',
                'price' => 6.50,
                'is_featured' => true,
                'is_available' => true,
                'sort_order' => 3,
            ],

            // Brown Sugar Series
            [
                'category_id' => $brownSugar->id,
                'name' => 'Brown Sugar Boba Milk',
                'slug' => 'brown-sugar-boba-milk',
                'description' => 'Fresh milk with warm brown sugar syrup and QQ pearls. No tea, just pure indulgence.',
                'price' => 6.50,
                'is_featured' => true,
                'is_available' => true,
                'sort_order' => 1,
            ],
            [
                'category_id' => $brownSugar->id,
                'name' => 'Brown Sugar Milk Tea',
                'slug' => 'brown-sugar-milk-tea',
                'description' => 'Black milk tea with caramelized brown sugar and pearls. Rich and decadent.',
                'price' => 6.25,
                'is_featured' => false,
                'is_available' => true,
                'sort_order' => 2,
            ],
            [
                'category_id' => $brownSugar->id,
                'name' => 'Tiger Sugar Milk',
                'slug' => 'tiger-sugar-milk',
                'description' => 'Signature tiger stripe pattern with brown sugar, milk, and pearls. Instagram-worthy!',
                'price' => 6.75,
                'is_featured' => true,
                'is_available' => true,
                'sort_order' => 3,
            ],
            [
                'category_id' => $brownSugar->id,
                'name' => 'Brown Sugar Matcha',
                'slug' => 'brown-sugar-matcha',
                'description' => 'Premium matcha with brown sugar and pearls. A unique East Asian fusion.',
                'price' => 6.75,
                'is_featured' => false,
                'is_available' => true,
                'sort_order' => 4,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}

