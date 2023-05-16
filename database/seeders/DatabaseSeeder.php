<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $brands = ['Gucci', 'Adidas', 'Nike'];

        foreach ($brands as $brand) {
            Brand::create(['name' => $brand]);
        }

        $products = [
            [
                'name' => 'fds',
                'description' => 'gaegwwhhg',
                'brand_id' => 3,
                'price' => 51,
                'img' => 'fdsfds'
            ],
            [
                'name' => 'gewe4hg',
                'description' => 'hwh3hwehesh',
                'brand_id' => 1,
                'price' => 5623,
                'img' => 'fesfse'
            ],
            [
                'name' => '',
                'description' => 'hetjtjeejhe',
                'brand_id' => 2,
                'price' => 134,
                'img' => 'gesgesg'
            ],
        ];

        foreach($products as $product) {
            Product::create($product);
        }
    }
}
