<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cart = Auth::user()->cart;
        return view('cart', compact('cart'));
    }

    public function store($id)
    {
        $user = Auth::user();

        $product = $user->cart()->wherePivot('product_id', $id)->first();

        if (!$product) {

            $user->cart()->attach($id, ['amount' => 1]);

            return 0;
        }

        $amount = $product->pivot->amount;

        $user->cart()->updateExistingPivot($id, ['amount' => $amount + 1]);

        return 0;
    }
}
