<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        //    $vegetableCategories = array(
        //         "Leafy Greens" => array("Spinach", "Kale", "Lettuce", "Swiss chard", "Collard greens"),
        //         "Cruciferous Vegetables" => array("Broccoli", "Cauliflower", "Brussels sprouts", "Cabbage"),
        //         "Root Vegetables" => array("Carrots", "Potatoes", "Sweet potatoes", "Beets", "Radishes"),
        //         "Allium Vegetables" => array("Onions", "Garlic", "Leeks", "Shallots", "Chives"),
        //         "Gourd and Squash Vegetables" => array("Zucchini", "Butternut squash", "Acorn squash", "Pumpkin", "Cucumber"),
        //         "Nightshade Vegetables" => array("Tomatoes", "Bell peppers", "Eggplant"),
        //         "Podded Vegetables" => array("Peas", "Green beans", "Snap peas", "Edamame"),
        //         "Stalk and Stem Vegetables" => array("Asparagus", "Celery", "Rhubarb", "Bamboo shoots"),
        //         "Tubers" => array("Cassava", "Yams"),
        //         "Miscellaneous Vegetables" => array("Artichokes", "Avocado", "Mushrooms", "Okra"),
        //     );

        //     foreach ($vegetableCategories as $categoryName => $vegetables) {
        //         $category = \App\Models\ProductCategory::create([
        //             'name' => $categoryName,
        //             'slug' => \Illuminate\Support\Str::slug($categoryName),
        //         ]);
    
        //         foreach ($vegetables as $vegetableName) {
        //             \App\Models\ProductCategory::create([
        //                 'name' => $vegetableName,
        //                 'slug' => \Illuminate\Support\Str::slug($vegetableName),
        //                 'parent_id' => $category->id,
        //             ]);
        //         }
        //     }
    
        $productCategories = array(
            "Tops" => ["T-shirts", "Shirts", "Blouses", "Sweaters"],
            "Bottoms" => ["Jeans", "Trousers", "Skirts", "Shorts"],
            "Dresses" => ["Casual Dresses", "Party Dresses", "Maxi Dresses", "Sundresses"],
            "Outerwear" => ["Jackets", "Coats", "Blazers", "Cardigans"],
            "Activewear" => ["Athletic Tops", "Leggings", "Sports Bras", "Athletic Jackets"],
            "Footwear" => ["Sneakers", "Boots", "Flats", "Heels"],
            "Accessories" => ["Hats", "Scarves", "Belts", "Handbags"],
            "Underwear" => ["Underwear Sets", "Bras", "Boxers", "Briefs"],
            "Sleepwear" => ["Pajama Sets", "Nightgowns", "Robes"],
            "Swimwear" => ["Bikinis", "One-Piece Swimsuits", "Cover-ups"],
            "Miscellaneous" => ["Socks", "Gloves", "Sunglasses", "Jewelry"]
        );
        
        foreach ($productCategories as $categoryName => $products) {
            $category = \App\Models\ProductCategory::create([
                'name' => $categoryName,
                'slug' => \Illuminate\Support\Str::slug($categoryName),
            ]);

            foreach ($products as $productName) {
                \App\Models\ProductCategory::create([
                    'name' => $productName,
                    'slug' => \Illuminate\Support\Str::slug($productName),
                    'parent_id' => $category->id,
                ]);
            }
        }
    
            
        
    }
}
