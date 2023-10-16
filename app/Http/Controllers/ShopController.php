<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Vendor;
use App\Models\Category;
use Auth;
use App\Models\Cart;
use App\Models\Checkout;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    
    public function index($id)
    {
        $vendors = Vendor::all();
        $products = Product::where('category_id', $id)->paginate(6);
        // dd($id);
        $discount= Category::where('id',$id)->get();
       $dis=(($discount[0]->discount));
    $productdetail = Product::find($id);
    // dd($productdetail);

    $prices=$productdetail->product_price;
    // dd($prices);
    $price=$prices* $dis;
        // dd($discount[0]->discount);
       $dis=(($discount[0]->discount)*100);
    
        return view('pages.shop', compact('vendors', 'products','dis','price'));

    }
    public function singleproduct($id)

    {

        $vendors = Vendor::all();
        $cat_id=Product::find($id);

        $discount= Category::where('id',$cat_id->category_id)->get();
        // dd($discount);
       $dis=(($discount[0]->discount));
    //    dd($dis);

        $productdetail = Product::find($id);
        // dd($productdetail);

        $prices=$productdetail->product_price;
        // dd($prices);
        $price=$prices* $dis;
        
        // dd('$dis',$dis,'$price',$price);
        $productdetails = collect([$productdetail]);
        $relatedProducts = Product::where('category_id', $productdetail->category_id)
    ->where('id', '<>', $id)
    ->inRandomOrder()
    ->take(3) 
    ->get();

        return view('pages.single', compact('productdetails','relatedProducts','vendors','price'));
    }


    public function addtocart(Request $request,$id){
        $product = Product::find($id);
    $quantity1 = $request->quantity;

    if (Auth::check()) {

        // $user = Auth::user();
        $iduser = auth()->user()->id;
        $productId = $product->id;
        $quantity = $request->quantity;

        // Check if the product already exists in the cart
        $existingCart = Cart::where('user_id', $iduser)
            ->where('product_id', $productId)
            ->first();

        if ($existingCart) {
            // Product already exists in the cart, so increment the quantity
            $existingCart->update([
                'quantity' =>$existingCart->quantity + $quantity
            ]);
        } else {
            // Product does not exist in the cart, so create a new record
            Cart::create([
                'user_id' => $iduser,
                'product_id' => $productId,
                'quantity' => $quantity,
                'checkout_id' => Checkout::first()->id
            ]);
        }

        return redirect()->back()->with('success', 'Product added to the cart successfully');
    } else {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $quantity1;
        } else {
            $cart[$id] = [
                'id' => $product->id,
                'image1' => $product->product_image,
                'Name' => $product->product_name,
                'quantity' => $quantity1,
                'price' => $product->product_price,
            ];
        }

        session()->put('cart', $cart);
        // dd($cart);

        return redirect()->back()->with('success', 'Product added to the cart successfully');
    }
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
