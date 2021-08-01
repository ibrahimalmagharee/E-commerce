<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Stripe;
use DB;

class PaymentController extends Controller
{
    public function getPayments($amount)
    {
        $cart_products = auth('customer')->user()
            ->cartProduct()
            ->get();

        $categories = Category::parent()->select('id', 'slug')->with(['categories' => function ($q) {
            $q->select('id', 'parent_id', 'slug');
            $q->with(['categories' => function ($qq) {
                $qq->select('id', 'parent_id', 'slug');
            }]);
        }])->get();

        return view('site.cart.payments', compact('amount', 'cart_products', 'categories'));
    }

    public function processPayment(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $charge = Stripe\Charge::create([
            "amount" => $request->amount,
            "currency" => $request->currency,
            "source" => $request->source,
            "description" => $request->description,
        ]);

        $charge_id = $charge['id'];

        if (!$charge_id) {
            return response()->json([
                'status' => false,
                'msg' => 'فشلت عملية الدفع يرجى التحقق من البطاقة'
            ]);
        } else {
            DB::beginTransaction();
            $order = auth('customer')->user()->orders()->create([
                'total_price' => $request->amount,
                'status' => Order::PAID,
                'payment_method' => $request->PaymentMethod,
                'locale' => app()->getLocale(),
            ]);

            $cart_products = auth('customer')->user()
                ->cartProduct()
                ->get();

            $product_id = [];

            foreach ($cart_products as $cart_product) {
                array_push($product_id, $cart_product->product_id);
            }

            $products = Product::whereIn('id', $product_id)->get();

            $order_id = $order['id'];

            foreach ($products as $product) {
                foreach ($cart_products as $cart_product) {
                    if ($product->id == $cart_product->product_id) {
                        auth('customer')->user()->purchases()->create([
                            'order_id' => $order_id,
                            'product_id' => $cart_product->product_id,
                            'quantity' => $cart_product->quantity,
                            'payment_method' => $request->PaymentMethod,
                            'transaction_id' => $charge_id,
                        ]);

                        $prod = Product::where('id', $cart_product->product_id)->first();

                        $count_selling = $prod->selling_price + 1;

                        $prod->where('id', $cart_product->product_id)->update([
                            'selling_price' => $count_selling,
                        ]);



                    }
                }
            }
            DB::commit();
            $customer_id = auth('customer')->user()->id;
            $cart_product = Cart::where('customer_id', $customer_id)->delete();

            return response()->json([
                'status' => true,
                'url' => route('home'),
                'msg' => 'تم شراء المنتج'
            ]);


        }



    }
}
