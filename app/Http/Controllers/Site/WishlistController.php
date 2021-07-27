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
                'message' => 'انت غير مسجل دخول في النظام',
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
            return response() -> json(['status' => true , 'wished' => true, 'msg' => 'تم اضافة المنتج الي مفضلتك']);
        }
        return response() -> json(['status' => true , 'wished' => false, 'msg' => 'هذا المنتج تمت اضافته من قبل']);  // added before we can use enumeration here
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
            'msg' => 'تم حذف المنتج من مفضلتك'
        ]);
    }
}
