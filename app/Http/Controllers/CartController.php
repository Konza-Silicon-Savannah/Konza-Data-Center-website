<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\carts;

class CartController extends Controller
{
    //
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('cart', compact('cartItems'));
    }
    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'service' => $request->service,
            'name' => $request->name,
            'description' => $request->description,
            'quantity' => $request->quantity,
            
        ]);
        // session()->flash('success', 'Product is Added to Cart Successfully !');
        // return redirect()->route('cart.list')->with('message','Data added Successfully');
        // $data=new carts();
       
        // $data->id=$request->id;
        // $data->service=$request->service;
        // $data->name=$request->name;
        // $data->description=$request->description;
        // $data->quantity=$request->quantity;

        // $data->save();

        // return redirect()->route('products.cloud')->with('message','Product is Added to Cart Successfully');
        return redirect()->back()->with('message','Product is Added to Cart Successfully');


    }
    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );
        session()->flash('success', 'Item Cart is Updated Successfully !');
        return redirect()->route('cart.list');
    }
    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');
        return redirect()->route('cart.list');
    }
    public function clearAllCart()
    {
        \Cart::clear();
        session()->flash('success', 'All Item Cart Clear Successfully !');
        return redirect()->route('cart.list');
    }
}
