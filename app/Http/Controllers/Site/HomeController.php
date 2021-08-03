<?php

namespace App\Http\Controllers\Site;

use App\Models\Banner;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductTranslation;
use App\Models\Purchase;
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

        $main_categories = Category::with('products')->parent()->get();

         $latest_products = Product::get()->sortByDesc('created_at')->take(18);

          $best_sellers = Product::where('selling_price' ,'>=', 10)->latest()->take(3)->get();
          $trending_now = Product::where('selling_price' ,'>=', 5)->get();

        if (auth('customer')->user()){
            $cart_products = Cart::where('customer_id', auth('customer')->user()->id)
                ->get();

            return view('site.home', compact('data','categories', 'cart_products','latest_products','best_sellers','trending_now','main_categories'));

        }else{
            return view('site.home', compact('data','categories','latest_products','trending_now','best_sellers','main_categories'));

        }


    }

    public function search(Request $request)
    {
        $search = $request->input('search');

          $products = Product::query()
            ->where('slug', 'LIKE', "%{$search}%")
            ->get();

         return view('site.search', compact('products'));

    }


}
