<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        if (!auth('customer')->user()) {
            $notification = array(
                'message' => __('translate-site/index.you_are_not_logged_into_the_system'),
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

        $categories = Category::parent()->select('id', 'slug')->with(['categories' => function ($q) {
            $q->select('id', 'parent_id', 'slug');
            $q->with(['categories' => function ($qq) {
                $qq->select('id', 'parent_id', 'slug');
            }]);
        }])->get();

        $cart_products = auth('customer')->user()
            ->cartProduct()
            ->get();
        $product_id = [];

        foreach ($cart_products as $cart_product) {
            array_push($product_id, $cart_product->product_id);
        }

        $products = Product::whereIn('id', $product_id)->get();


        $total_price = 0;
        foreach ($products as $product) {
            foreach ($cart_products as $cart_product) {
                if ($product->id == $cart_product->product_id) {
                    if ($product->special_price){
                        $total_price += $product->special_price * $cart_product->quantity;

                    }else{
                        $total_price += $product->price * $cart_product->quantity;

                    }
                }
            }
        }
        return view('site.cart.index', compact('categories','cart_products', 'products', 'total_price'));

    }


    public function saveProduct()
    {
        if (request('quantity')){
            $quantity = request('quantity');
        }else{
            $quantity = 1;
        }
        if (!auth('customer')->user()->cartHasProduct(request('product_id'))) {
            Cart::create([
                'product_id' => request('product_id'),
                'customer_id' => auth('customer')->user()->id,
                'quantity' => $quantity,
            ]);

            $cart_products = auth('customer')->user()
                ->cartProduct()
                ->get();

            return response()->json([
                'status' => true,
                'cart_products_count' => count($cart_products),
                'msg' => __('translate-site/index.the_product_has_been_added_to_the_cart')
            ]);
        }
        return response()->json([
            'status' => false,
            'msg' => __('translate-site/index.this_product_has_already_been_added')
        ]);
    }

    public function updateQuantity(Request $request)
    {
        $customer_id = auth('customer')->user()->id;
        $cart_product = Cart::where('customer_id', $customer_id)
            ->where('product_id', request('product_id'))
            ->update([
                'quantity' => $request->quantity
            ]);

        $cart_products = auth('customer')->user()
            ->cartProduct()
            ->get();


        $product_id = [];

        foreach ($cart_products as $cart_product) {
            array_push($product_id, $cart_product->product_id);
        }

        $products = Product::whereIn('id', $product_id)->get();

        $total_price = 0;
        foreach ($products as $product) {
            foreach ($cart_products as $cart_product) {
                if ($product->id == $cart_product->product_id) {
                    if ($product->special_price){
                        $total_price += $product->special_price * $cart_product->quantity;

                    }else{
                        $total_price += $product->price * $cart_product->quantity;

                    }
                }
            }
        }


        return response()->json([
            'status' => true,
            'total_price' => $total_price,
            'msg' => __('translate-site/index.the_quantity_of_this_product_has_been_updated')
        ]);
    }

    public function destroy()
    {
        $customer_id = auth('customer')->user()->id;
        $cart_product = Cart::where('customer_id', $customer_id)
            ->where('product_id', request('product_id'))
            ->delete();

        $cart_products = auth('customer')->user()
            ->cartProduct()
            ->get();


        $product_id = [];

        foreach ($cart_products as $cart_product) {
            array_push($product_id, $cart_product->product_id);
        }

        $products = Product::whereIn('id', $product_id)->get();

        $total_price = 0;
        foreach ($products as $product) {
            foreach ($cart_products as $cart_product) {
                if ($product->id == $cart_product->product_id) {
                    if ($product->special_price){
                        $total_price += $product->special_price * $cart_product->quantity;

                    }else{
                        $total_price += $product->price * $cart_product->quantity;

                    }
                }
            }
        }

        return response() -> json([
            'status' => true ,
            'total_price' => $total_price,
            'number_cart_product' => count($cart_products),
            'msg' =>  __('translate-site/index.the_product_has_been_removed_from_the_basket')
        ]);
    }
}
