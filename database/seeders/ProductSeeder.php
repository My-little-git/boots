<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductPhoto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'TimeJump',
                'price' => 1499,
                'category_id' => 1,
                'country_id' => 2,
                'img' => 'M4154600_001-preview.jpg'
            ],
            [
                'name' => 'Alessio Nesca',
                'price' => 2999,
                'category_id' => 1,
                'country_id' => 3,
                'img' => 'M5104631_001-preview.jpg'
            ],
            [
                'name' => 'PIERRE CARDIN',
                'price' => 4499,
                'category_id' => 3,
                'country_id' => 1,
                'img' => 'M5104052_001-preview.jpg'
            ],
        ];

        foreach($products as $product) {
            $img = $product['img'];
            unset($product['img']);

            $product = Product::create($product);

            ProductPhoto::create([
                'product_id' => $product->id,
                'path' => $img
            ]);
        }
    }
}
