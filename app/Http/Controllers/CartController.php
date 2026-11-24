<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    // Add to Cart
  public function add(Request $request)
{
    $request->validate([
        'product_name' => 'required|string',
        'price' => 'required|numeric',
        'image' => 'nullable|string',
    ]);

    $sessionId = session()->getId();

    $product = \DB::table('cart_items')
        ->where('session_id', $sessionId)
        ->where('product_name', $request->product_name)
        ->first();

    if ($product) {

        \DB::table('cart_items')
            ->where('id', $product->id)
            ->increment('quantity');

    } else {

        \DB::table('cart_items')->insert([
            'session_id' => $sessionId,
            'product_name' => $request->product_name,
            'price' => $request->price,
            'image' => $request->image,
            'quantity' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    return redirect()->back()->with('success', 'Product added to cart!');
}
    // View cart
   public function index()
{
    $sessionId = session()->getId();

    $cartItems = \DB::table('cart_items')
        ->where('session_id', $sessionId)
        ->get();

    return view('cart.index', compact('cartItems'));
}

    // Update quantity
    public function update(Request $request, $id)
{
    $request->validate([
        'quantity' => 'required|integer|min:1',
    ]);

    \DB::table('cart_items')
        ->where('id', $id)
        ->where('session_id', session()->getId())
        ->update([
            'quantity' => $request->quantity,
            'updated_at' => now(),
        ]);

    return redirect()->route('cart.index')
        ->with('success', 'Cart quantity updated!');
}

    public function remove($id)
{
    \DB::table('cart_items')
        ->where('id', $id)
        ->where('session_id', session()->getId())
        ->delete();

    return redirect()->route('cart.index')
        ->with('success', 'Product removed from cart!');
}
}