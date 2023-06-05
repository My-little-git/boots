<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class DestroyController extends BaseController
{
    public function __invoke(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }
}
