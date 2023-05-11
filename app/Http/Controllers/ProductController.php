<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Mail;
use App\Mail\CustomerRequirementsMail;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\CustomerRequirements;
use App\Models\messages;
use Illuminate\Auth\Events\Validated;

class ProductController extends Controller
{
    //
    public function cloudServices()
    {
        $vms = Product::where('service', 'Virtual Machine')->get();
        $bms = Product::where('service', 'Bare Metal Service')->get();
        $vdis = Product::where('service', 'Virtual Desktop Infrastructure')->get();
        $webhosting = Product::where('service', 'Web hosting')->get();


        return view('services.cloud', compact('vms', 'bms', 'vdis', 'webhosting'));
    }
    public function colocation()
    {
        $colocation = Product::where('service', 'Colocation')->get();

        return view('services.colocation', compact('colocation'));
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
    public function sendMessage(Request $request)
    {
        // $data=new messages();
        // $data->name=$request->name;
        // $data->organization=$request->organization;
        // $data->email=$request->email;
        // $data->message=$request->message;

        // $data->save();
        $validatedData = $request->validate(
            [
                'name' => 'required',
                'organization' => 'required',
                'email' => 'required|email',
                'message' => 'required'
            ],
            [
                'name.required' => 'Name is required',
                'organization.required' => 'organization is required',
                'email.required' => 'email is required',
                'message.required' => 'message is required'
            ]
        );

        $message = messages::create($validatedData);
        // dd($message);

        return  redirect('/')->with('message', 'Message sent.');
    }


    public function checkoutSubmit(Request $request)
    {
        // $data = new CustomerRequirements();
        // $data->CustomerName = $request->CustomerName;
        // $data->CustomerEmail = $request->CustomerEmail;
        // $data->CustomerPhone = $request->CustomerPhone;
        // $data->OrgName = $request->OrgName;
        // $data->CartItems = $request->CartItems;
        // $data->ISP = $request->ISP;
        // $data->Comments = $request->Comments;

        $validatedData = $request->validate([
            'CustomerName' => 'required',
            'CustomerEmail' => 'required|email',
            'CustomerPhone' => 'required',
            'OrgName' => 'required',
            'CartItems' => 'required',
            'ISP' => 'required',
            'Comments' => 'required'
        ], 
        [
            'CustomerName.required' => 'Required',
            'CustomerEmail.required' => 'Required',
            'CustomerPhone.required' => 'Required',
            'OrgName.required' => 'Required',
            'CartItems.required' => 'Required',
            'ISP.required' => 'Required',
            'Comments.required' => 'Required'
        ]);


        $maildata = [
            'CustomerName' => $request->CustomerName,
            'CustomerEmail' => $request->CustomerEmail,
            'CustomerPhone' => $request->CustomerPhone,
            'OrgName' => $request->OrgName,
            // 'CartItems'=>$request->CartItems,
            'ISP' => $request->ISP,
            'Comments' => $request->Comments,
        ];
        $CartItems = \Cart::getContent();
        Mail::to('jhildah24@gmail.com')->send(new CustomerRequirementsMail($maildata, $CartItems));

        // dd('mail sent');

        // $data->save();
        $custreqs = CustomerRequirements::create($validatedData);

        \Cart::clear();
        return  redirect('/')->with('message', 'Sumitted successfully.');
    }

    public function hms()
    {
        return view('services.hms');
    }

    public function comingsoon()
    {
        return redirect()->back()->with('message','coming soon');

    }
}
