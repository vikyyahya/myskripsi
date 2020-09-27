<?php

namespace App\Http\Controllers;

use App\Order;


use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index()
    {
        $users = Order::paginate(5);
        return view('order.order', ['users' => $users]);
    }
}
