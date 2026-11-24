<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function index()
{
    $sessionId = session()->getId();

    $cartItems = DB::table('cart_items')
        ->where('session_id', $sessionId)
        ->get();

    $total = $cartItems->sum(function ($item) {
        return $item->price * $item->quantity;
    });

    return view('checkout', compact('cartItems', 'total'));
}


    public function store(Request $request)
    {
        // Validate customer details
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'email'         => 'required|email',
            'phone'         => 'required|string|max:20',
            'address'       => 'required|string',
            'city'          => 'required|string|max:255',
        ]);

        // Get current user's cart
        $sessionId = session()->getId();

        $cartItems = DB::table('cart_items')
            ->where('session_id', $sessionId)
            ->get();

        // Check cart is empty
        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')
                ->with('error', 'Your cart is empty!');
        }

        // Calculate total
        $total = $cartItems->sum(function ($item) {
            return $item->price * $item->quantity;
        });

        // Save order
DB::table('orders')->insert([
    'session_id'     => $sessionId,
    'customer_name'  => $request->customer_name,
    'email'         => $request->email,
    'phone'         => $request->phone,
    'address'       => $request->address,
    'city'          => $request->city,
    'total_amount'  => $total,
    'payment_method' => 'COD',
    'status'        => 'Pending',
    'created_at'    => now(),
    'updated_at'    => now(),
]);

        // Clear cart after successful order
        DB::table('cart_items')
            ->where('session_id', $sessionId)
            ->delete();

        return redirect()->route('order.success');
    }
}