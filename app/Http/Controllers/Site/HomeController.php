<?php

namespace App\Http\Controllers\Site;

use App\Models\Banner;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use function Composer\Autoload\includeFile;

class HomeController extends Controller
{
    public function index()
    {
        $data = [];
        $data['sliders'] = Slider::get();
         $data['first_banners'] = Banner::all()->take(3);
        $data['latest_banners'] = Banner::orderBy('id', 'desc')->take(2)->get();
        $categories = Category::parent()->select('id', 'slug')->with(['categories' => function ($q) {
            $q->select('id', 'parent_id', 'slug');
            $q->with(['categories' => function ($qq) {
                $qq->select('id', 'parent_id', 'slug');
            }]);
        }])->get();

        if (auth('customer')->user()){
            $cart_products = Cart::where('customer_id', auth('customer')->user()->id)
                ->get();

            return view('site.home', compact('data','categories', 'cart_products'));

        }else{
            return view('site.home', compact('data','categories'));

        }


    }


}
