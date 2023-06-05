<?php

namespace App\Http\Controllers\Admin\Product;

use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $products = Product::paginate(20);

        return view('admin.product.index', compact('products'));
    }
}
