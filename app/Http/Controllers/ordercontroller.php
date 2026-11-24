<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $sessionId = session()->getId();

        $orders = DB::table('orders')
            ->where('session_id', $sessionId)
            ->orderBy('id', 'desc')
            ->get();

        return view('my-orders', compact('orders'));
    }
}