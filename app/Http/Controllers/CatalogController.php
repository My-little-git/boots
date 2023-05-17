<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('catalog', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('card', compact('product'));
    }
}
