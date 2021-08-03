<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        if (! auth('customer')->user()){
            $notification = array(
                'message' => __('translate-site/index.you_are_not_logged_into_the_system'),
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
        $products =  auth('customer')->user()
            ->wishlist()
            ->latest()
            ->get();   // task for you basically we need to use pagination here

        $cart_products = auth('customer')->user()
            ->cartProduct()
            ->get();
        return view('site.wishlists', compact('products', 'cart_products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store()
    {
        if (! auth('customer')->user()->wishlistHas(request('productId'))) {
            auth('customer')->user()->wishlist()->attach(request('productId'));
            return response() -> json(['status' => true , 'wished' => true, 'msg' => __('translate-site/index.The_product_has_been_added_to_your_favourites')]);
        }
        return response() -> json(['status' => true , 'wished' => false, 'msg' => __('translate-site/index.this_product_has_already_been_added')]);  // added before we can use enumeration here
    }

    /**
     * Destroy resources by the given id.
     *
     * @param string $productId
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy()
    {
        auth('customer')->user()->wishlist()->detach(request('productId'));
        $products =  auth('customer')->user()
            ->wishlist()
            ->latest()
            ->get();
        return response() -> json([
            'status' => true ,
            'wished' => true,
            'products' => count($products),
            'msg' => __('translate-site/index.the_product_has_been_removed_from_your_favourites')
        ]);
    }
}
