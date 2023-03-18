@extends('layouts.adminbase')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card bg-primary">
                <div class="card-body text-white">
                    <h1 class="text-center">9</h1>

                </div>
                <div class="card-footer text-white">
                    Requests
                </div>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="card bg-success">
            <div class="card-body text-white">
                    <h1 class="text-center">9</h1>

                </div>
                <div class="card-footer text-white">
                    Messages
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-danger">
            <div class="card-body text-white">
                    <h1 class="text-center">9</h1>

                </div>
                <div class="card-footer text-white">
                    Products
                </div>
            </div>
        </div>
    </div>

</div>
<div class="card">
  <div class="card-header">
    Recent messages
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
@endsection