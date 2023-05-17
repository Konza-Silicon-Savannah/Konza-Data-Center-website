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
        $itemsnumber= count($cartItems);
       // dd($itemsnumber);

        //  if($itemsnumber == 0)
        // {
        //     return redirect()->back()->with('message','Add products to cart.');

        // }else{

        //     return view('cart', compact('cartItems'));
        //  }
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
