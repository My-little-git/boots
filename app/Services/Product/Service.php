<?php

namespace App\Services\Product;

use App\Http\Requests\Admin\Product\StoreRequest;
use App\Http\Requests\Admin\Product\UpdateRequest;
use App\Models\Product;
use App\Models\ProductPhoto;
use Illuminate\Support\Facades\Storage;
use function PHPUnit\Framework\fileExists;
use function Psy\debug;

class Service
{
    public function store($data)
    {
        $images = $data['images'];
        unset($data['images']);

        $product = Product::create($data);

        foreach ($images as $image){
            $path = Storage::putFile('public/images', $image);
            ProductPhoto::create([
                'product_id' => $product->id,
                'path' => $path
            ]);
        }
    }

    public function update(UpdateRequest $req)
    {

    }
}
