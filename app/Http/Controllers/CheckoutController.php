<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Discount;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = [];
        $total_price = 0;
        if (auth()->user()) {
            $user = auth()->user();

            $cart = Cart::where('user_id', $user->id)->with('product')->get();

            foreach ($cart as $item) {
                $total_price += $item->product->product_price * $item->quantity;
            }
            // $cartCount = count($cart);
            // Now, $cartCount contains the count of items in the cart
        }
        // else {

        //     $cart = session('cart');

        //     // foreach($cart as $item){
        //     //     $total_price += $item->
        //     // }

        // }




        return view('pages.checkout', compact('cart', 'total_price'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($total)
    {
        $user = auth()->user();
        
        $checkout = Checkout::create([
            'user_id' => $user->id,
            'payment_method' => 3,
            'total price' => $total,
            'arrive date' => date('Y-m-d'),
            'discount_id' => Discount::first()->id,
            'address' => 'test',
            'zipcode' => '12345662'
        ]);

        $carts = Cart::all()->where('user_id' , $user->id);

        foreach ($carts as $cart){
            $cart->update(['checkout_id' => $checkout->id]);
        }

        return redirect()->route('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function show(Checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checkout $checkout)
    {
        //
    }
}