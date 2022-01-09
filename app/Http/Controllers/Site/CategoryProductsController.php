<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryProductsController extends Controller
{
    public function productsBySlug($slug)
    {
        $data = [];
        $data['categories'] = Category::parent()->select('id', 'slug')->with(['categories' => function ($q) {
            $q->select('id', 'parent_id', 'slug');
            $q->with(['categories' => function ($qq) {
                $qq->select('id', 'parent_id', 'slug');
            }]);
        }])->get();

        $data['category'] = Category::where('slug', $slug)->first();

        if ($data['category']){
            $data['products'] = $data['category']->products;

        }

        if (auth('customer')->user()){
            $cart_products = Cart::where('customer_id', auth('customer')->user()->id)
                ->get();

            return view('site.products', $data, compact('cart_products'));

        }else{
            return view('site.products', $data);

        }

    }
}
