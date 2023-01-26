@extends('layouts.base')

@section('content')

<div class="" style="margin-top: 100px;">
    <div class="container px-6 mx-auto">
        <div class="flex justify-center my-5">
            <div class="d-flex flex-column  w-100 p-5 bg-white shadow col-md-8 col-xs-12">
                @if ($message = Session::get('success'))
                <div class="p-1 mb-3 bg-success rounded">
                    <p class="text-white">{{ $message }}</p>
                </div>
                @endif
                <h3 class="font-weight-bold">Cart</h3>
                <div class="flex-1">
                    <table class="table">
                        <thead>
                            <tr class="text-uppercase">
                              
                                <th class="text-left">Service</th>
                                <th class="text-left">Type</th>
                                <th class="text-left">Description</th>
                                <th class="pl-5 text-left">Quantity</th>
                                <th class="hidden text-right"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartItems as $item)
                            <tr>
                                <!-- <td class="hidden pb-4 md:table-cell">
                                    <a href="#">
                                        <img src="{{ $item->attributes->image }}" class="w-20 rounded" alt="Thumbnail">
                                    </a>
                                </td> -->
                                <td>

                                    <p class="mb-2 text-dark fw-bold">{{$item->service }}</p>


                                </td>
                                <td>
                                    <p class="mb-2 ">{{ $item->name }}</p>
                                </td>
                                <td>
                                    <p class="mb-2">{{ $item->description }}</p>
                                </td>
                                <td class="justify-center mt-6 ">
                                    <div class="h-10 w-20">
                                        <div class="relative w-100 h-8">

                                            <form action="{{ route('cart.update') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $item->id}}">
                                                <input type="text" name="quantity" value="{{ $item->quantity }}" class="text-center form-control mb-2 text-black d-inline w-50" />
                                                <button class="btn btn-outline-success">Update</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                                <td class="hidden text-right">
                                    <form action="{{ route('cart.remove') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $item->id }}" name="id">
                                        <!-- <button class="px-4 py-2 text-white bg-danger shadow rounded-full"><i class="bi bi-trash3"></i></button> -->
                                        <button type="button" class="btn btn-outline-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                            </svg>
                                            <!-- <i class="bi bi-trash3"></i> -->
                                            Remove
                                        </button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="row">
                        <div class=" col-xs-6 col-sm-6 col-md-6 justify-content-start d-flex">
                            <form action="{{ route('cart.clear') }}" method="POST">
                                @csrf
                                <button class="btn btn-outline-danger">Clear Carts</button>
                            </form>
                        </div>
                        <div class="col-xs-6 col-md-6 col-sm-6 justify-content-end d-flex">
                            <a  href="{{ route('products. checkout') }}"><button class="btn btn-success">Checkout</button></a>
                        </div>
                       
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection