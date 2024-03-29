<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $orders = Order::get()->sortByDesc('created_at')->take(5);
        return view('admin.dashboard', compact('orders'));
    }
}
