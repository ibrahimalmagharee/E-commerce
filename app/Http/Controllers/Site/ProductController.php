<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productsBySlug($slug)
    {
        $data=[];
        $data['categories'] = Category::parent()->select('id', 'slug')->with(['categories' => function ($q) {
            $q->select('id', 'parent_id', 'slug');
            $q->with(['categories' => function ($qq) {
                $qq->select('id', 'parent_id', 'slug');
            }]);
        }])->get();

        $data['product'] = Product::where('slug',$slug) -> first();  //improve select only required fields
        if (!$data['product']){ ///  redirect to previous page with message
        }

        $product_id = $data['product'] -> id ;
        $product_categories_ids =  $data['product'] -> categories ->pluck('id'); // [1,26,7] get all categories that product on it

        $data['product_attributes'] =  Attribute::whereHas('options' , function ($q) use($product_id){
            $q -> whereHas('product',function ($qq) use($product_id){
                $qq -> where('product_id',$product_id);
            });
        })->get();

        $data['related_products'] = Product::whereHas('categories',function ($cat) use($product_categories_ids){
            $cat-> whereIn('categories.id',$product_categories_ids);
        }) -> limit(20) -> latest() -> get();


        if (auth('customer')->user()){
            $cart_products = Cart::where('customer_id', auth('customer')->user()->id)
                ->get();

            return view('site.products-details', $data , compact('cart_products'));

        }else{
            return view('site.products-details', $data);

        }

    }
}
