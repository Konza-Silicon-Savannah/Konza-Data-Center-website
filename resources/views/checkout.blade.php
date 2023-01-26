@extends('layouts.base')

@section('content')

<div class="container" style="margin-top: 80px;">
    <div class="card px-5 py-3 shadow">
        <h4 class="">Check Out Details</h4>
        <form action="/checkout" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="CustomerName" class="form-label">Customer Name</label>
                        <input type="text" class="form-control" name="CustomerName">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="CustomerEmail" class="form-label">Email Address</label>
                        <input type="email" class="form-control" name="CustomerEmail">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label" for="CustomerPhone">Phone Number</label>
                        <input type="phone" class="form-control" name="CustomerPhone">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label" for="OrgName">Organization Name</label>
                        <input type="text" class="form-control" name="OrgName">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="ISP" class="form-label">ISP Of choice</label>
                        <input type="text" class="form-control" name="ISP">
                    </div>

                </div>
            </div>

            <div class="mb-3" hidden>
                <label class="form-label" for="CartItems">Cart Items</label>
                <input value="{{$cartItems}}" type="text" class="form-control" name="CartItems">
            </div>


            <div class="mb-3">
                <label>Confirm the following requested items:</label>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Service</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartItems as $item)
                        <tr>
                            <td>{{$item->service}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->description}}</td>
                            <td>{{$item->quantity}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href=" {{ route('cart.list') }}" style="align-items: flex-end;"><button class="btn btn-warning">Edit cart</button></a>
            </div>

            <div class="mb-3">
                <label for="Comments" class="form-label">Other Comments</label>
                <textarea name="Comments" class="form-control" id="" rows="2"></textarea>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>

        </form>
    </div>
</div>
@endsection