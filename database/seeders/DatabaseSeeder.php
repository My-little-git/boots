<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Country;
use App\Models\Product;
use App\Models\Status;
use App\Models\User;
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

        $categories = ['Кроссовки', 'Кеды', 'Ботинки'];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }

        $countries = ['США', 'Россия', 'Великобритания', 'Китай'];

        foreach ($countries as $country) {
            Country::create(['name' => $country]);
        }

        $statuses = ['Новый', 'Подтвержденный', 'Отмененный'];

        foreach ($statuses as $status) {
            Status::create(['name' => $status]);
        }

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
            Product::create($product);
        }

        User::create([
            'name' => 'Михаил',
            'surname' => 'Осипов',
            'patronymic' => 'Сергеевич',
            'email' => 'misha@mail.ru',
            'password' => '123456'
        ]);

        Admin::create([
            'email' => 'misha@mail.ru',
            'password' => '123456'
        ]);
    }
}
