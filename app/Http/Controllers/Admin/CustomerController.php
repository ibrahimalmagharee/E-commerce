<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $customers= Customer::get();

        if ($request->ajax()) {

            return DataTables::of($customers)
                ->addIndexColumn()

                ->make(true);


        }
        return view('admin.customers.index', compact('customers'));
    }
}
