<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PurchaseController extends Controller
{
    public function purchase(Request $request)
    {
        $data = [];
       // $data['categories'] = Category::active()->select('id', 'name')->get();


        $purchases = Purchase::get();

        $product_id = [];

        foreach ($purchases as $purchase) {
            array_push($product_id, $purchase->product_id);
        }

        $products = Product::whereIn('id', $product_id)->get();

        $total_price = 0;
        foreach ($purchases as $purchase) {
            foreach ($products as $product) {
                if ($product->id == $purchase->product_id) {
                    if ($product->special_price){
                        $total_price += $product->special_price * $purchase->quantity;
                    }else{
                        $total_price += $product->price * $purchase->quantity;
                    }
                }
            }
        }


        if ($request->ajax()) {

            return DataTables::of($purchases)
                ->addIndexColumn()
                ->addColumn('customer', function ($row) {
                    return $row->customer->name;
                })
                ->addColumn('name', function ($row) {
                    $purchases = Purchase::get();

                    $product_id = [];

                    foreach ($purchases as $purchase) {
                        array_push($product_id, $purchase->product_id);
                    }

                    $products = Product::whereIn('id', $product_id)->get();

                    foreach ($purchases as $purchase) {
                        foreach ($products as $product) {
                            if ($product->id == $row->product_id) {
                                return $product->name;
                            }
                        }
                    }

                })
                ->addColumn('category', function ($row) {
                    $purchases = Purchase::get();

                    $product_id = [];

                    foreach ($purchases as $purchase) {
                        array_push($product_id, $purchase->product_id);
                    }

                    $products = Product::whereIn('id', $product_id)->get();

                    foreach ($purchases as $purchase) {
                        foreach ($products as $product) {
                            if ($product->id == $row->product_id) {
                                return \GuzzleHttp\json_decode($product->categories->map(function ($category){
                                    return $category->name;
                                }));
                            }
                        }
                    }
                })
                ->addColumn('created_at', function ($row) {
                    return $row->created_at;
                })
                ->addColumn('price', function ($row) {
                    $purchases = Purchase::get();

                    $product_id = [];

                    foreach ($purchases as $purchase) {
                        array_push($product_id, $purchase->product_id);
                    }

                    $products = Product::whereIn('id', $product_id)->get();

                    foreach ($purchases as $purchase) {
                        foreach ($products as $product) {
                            if ($product->id == $row->product_id) {
                                if ($product->special_price){
                                    return $product->special_price;
                                }else{
                                    return $product->price;
                                }
                            }
                        }
                    }
                })
                ->addColumn('quantity', function ($row) {
                    return $row->quantity;
                })
                ->addColumn('total_price', function ($row) {
                    $purchases = Purchase::get();

                    $product_id = [];

                    foreach ($purchases as $purchase) {
                        array_push($product_id, $purchase->product_id);
                    }

                    $products = Product::whereIn('id', $product_id)->get();

                    foreach ($purchases as $purchase) {
                        foreach ($products as $product) {
                            if ($product->id == $row->product_id) {
                                if ($product->special_price){
                                    return $product->special_price * $row->quantity;
                                }else{
                                    return $product->price * $row->quantity;
                                }
                            }
                        }
                    }
                })
                ->rawColumns(['price'])
                ->make(true);

        }

        return view('admin.purchase.purchases', compact('data','total_price'));

    }
}
