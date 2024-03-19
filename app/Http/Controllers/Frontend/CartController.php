<?php

namespace App\Http\Controllers\Frontend;

use DB;
use App\Models\Cart;
use App\Models\Order;
use App\Models\BillingInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{

    public function cartList()
    {
        if (!auth()->user()) {
            return redirect()->route('login');
        }
        $data['carts'] = Cart::with('products')->where('user_id', auth()->user()->id)->get();
        return view('frontend.cart-list', $data);
    }
    public function addToCart(Request $request)
    {
        if (!auth()->user()) {
            return redirect()->route('login');
        }

        Cart::updateOrCreate(
            ['user_id' => auth()->user()->id, 'product_id' => $request->product_id],
            ['quantity' => $request->product_quantity]
        );

        return redirect()->route('cart-list');
    }

    public function updateCart(Request $request, $id)
    {
        if (!auth()->user()) {
            return redirect()->route('login');
        }

        $cart = DB::table('carts')->where('id', $id)->update(['quantity' => (int)$request->quantity]);

        return response()->json(['success' => true], 200);
    }

    public function deleteCart($id)
    {
        if (!auth()->user()) {
            return redirect()->route('login');
        }

        Cart::where('id', $id)->delete();

        return redirect()->route('cart-list');
    }

    public function checkout()
    {
        if (!auth()->user()) {
            return redirect()->route('login');
        }
        $data['billing_info'] = BillingInfo::where('user_id', auth()->user()->id)->first();
        $data['carts'] = Cart::with('products')->where('user_id', auth()->user()->id)->get();
        return view('frontend.checkout', $data);
    }

    public function createOrder(Request $request)
    {

        if (!auth()->user()) {
            return redirect()->route('login');
        }
        $user_id = auth()->user()->id;

        $billingInfo = [
            'first_name' => $request->billing_first_name,
            'last_name' => $request->billing_last_name,
            'company_name' => $request->billing_company_name,
            'email' => $request->billing_email,
            'phone' => $request->billing_phone,
            'address' => $request->billing_address,
            'state' => $request->billing_city,
            'country' => $request->billing_country,
            'zip' => $request->billing_zip,
        ];

        $billingInfo = BillingInfo::updateOrCreate(
            ['user_id' => $user_id],
            $billingInfo
        );

        if (isset($request->billing_another_shippingaddress)) {
            $billingInfo = [
                'first_name' => $request->shipping_first_name,
                'last_name' => $request->shipping_last_name,
                'company_name' => $request->shipping_company_name,
                'email' => $request->shipping_email,
                'phone' => $request->shipping_phone,
                'address' => $request->shipping_address,
                'state' => $request->shipping_city,
                'country' => $request->shipping_country,
                'zip' => $request->shipping_zip,
            ];
        }

        $carts = Cart::with('products')->where('user_id', $user_id)->get();
        $grand_total = 0;
        $order_products = [];
        foreach ($carts as $cart) {
            $grand_total += $cart->products->selling_price * $cart->quantity;
            $order_products[] = [
                'order_id' => 0, // we will update this later
                'product_id' => $cart->product_id,
                'price' => $cart->products->selling_price,
                'quantity' => $cart->quantity,
            ];
        }

        $order = [
            'user_id' => $user_id,
            'grand_total' => $grand_total,
            'payment_method' => $request->payment_method,
            'shipping_address' => json_encode($billingInfo),
        ];

        $order = \App\Models\Order::create($order);

        foreach ($order_products as $key => $order_product) {
            $order_products[$key]['order_id'] = $order->id;
        }

        \App\Models\OrderProduct::insert($order_products);

        Cart::where('user_id', $user_id)->delete();

        return redirect()->route('customer.dashboard');
    }

    public function orderList()
    {
        $data['orders'] = Order::join('users','users.id','=','orders.user_id')
        ->orderBy('orders.id', 'desc')
        ->select('orders.*', 'users.name as user_name')
        ->paginate(10);
        return view('backend.order-list', $data);
    }
}
