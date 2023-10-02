<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Vendor;

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
    
        return view('pages.shop', compact('vendors', 'products'));
    }
    public function singleproduct($id)
    {
        $vendors = Vendor::all();
        $productdetail = Product::find($id);
        $productdetails = collect([$productdetail]);
        $relatedProducts = Product::where('category_id', $productdetail->category_id)
    ->where('id', '<>', $id)
    ->inRandomOrder()
    ->take(3) 
    ->get();
        return view('pages.single', compact('productdetails','relatedProducts','vendors'));
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