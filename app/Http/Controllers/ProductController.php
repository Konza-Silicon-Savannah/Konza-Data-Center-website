<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function cloudServices()
    {
        $vms=Product::where('service','Virtual Machine')->get();
        $bms=Product::where('service','Bare Metal Service')->get();
        $vdis=Product::where('service','Virtual Desktop Infrastructure')->get();

        return view('services.cloud',compact('vms','bms','vdis'));
    }
    public function productList()
    {
        $products = Product::all();
        
        return view('products', compact('products'));
    }
}
