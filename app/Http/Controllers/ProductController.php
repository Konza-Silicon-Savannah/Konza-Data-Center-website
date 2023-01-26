<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\CustomerRequirements;

class ProductController extends Controller
{
    //
    public function cloudServices()
    {
        $vms=Product::where('service','Virtual Machine')->get();
        $bms=Product::where('service','Bare Metal Service')->get();
        $vdis=Product::where('service','Virtual Desktop Infrastructure')->get();
        $webhosting=Product::where('service','Web hosting')->get();


        return view('services.cloud',compact('vms','bms','vdis','webhosting'));
    }
    public function productList()
    {
        $products = Product::all();
        
        return view('products', compact('products'));
    }

    public function checkoutForm()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('checkout', compact('cartItems'));
    }

    
    public function checkoutSubmit(Request $request)
    {
        

        // $item = new UserInformation();
        $data=new CustomerRequirements();
        $data->CustomerName=$request->CustomerName;
        $data->CustomerEmail=$request->CustomerEmail;
        $data->CustomerPhone=$request->CustomerPhone;
        $data->OrgName=$request->OrgName;
        $data->CartItems=$request->CartItems;
        $data->ISP=$request->ISP;
        $data->Comments=$request->Comments;

        $data->save();
        
        \Cart::clear();
        return view('home')->with('message','Sumitted successfully.');
    }
    

}
