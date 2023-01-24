@extends('layouts.base')

@section('content')
<!-- ==========Header=========== -->
<div class="row header p-4 text-center">
    <h3>CLOUD SERVICES</h3>
</div>
<!-- ==========Header=========== -->

<!-- ==========About=========== -->
<div class="container mt-3">
    <p class="text-justified">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
</div>
<!-- ==========About=========== -->

<!-- ==========Products=========== -->
<div class="container">
    <h5 class="text-center">Cloud products</h5>
    <!-- ==========VMS=========== -->
    <h6>Virtual Machine</h6>
    <div class="row">
        @foreach($vms as $vm)
        <div class="col-md-2">
            <div class="card mb-5 p-3">
                <h5>{{$vm->name}} </h5>
                <p>{{$vm->description}} </p>
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $vm->id }}" name="id">
                    <input type="hidden" value="{{ $vm->service }}" name="service">
                    <input type="hidden" value="{{ $vm->name }}" name="name">
                    <input type="hidden" value="{{ $vm->description }}" name="description">
                    <input type="hidden" value="1" name="quantity">
                    <button class="px-4 py-1 btn btn-outline-success">Add To Cart</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
    <!-- ==========VMS=========== -->

    <!-- ==========BMS=========== -->
    <h6>Bare Metal Service</h6>
    <div class="row">
        @foreach($bms as $bms)
        <div class="col-md-2">
            <div class="card mb-5 p-3">
                <h5>{{$bms->name}} </h5>
                <p>{{$bms->description}} </p>
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $bms->id }}" name="id">
                    <input type="hidden" value="{{ $bms->service }}" name="service">
                    <input type="hidden" value="{{ $bms->name }}" name="name">
                    <input type="hidden" value="{{ $bms->description }}" name="description">
                    <input type="hidden" value="1" name="quantity">
                    <button class="px-4 py-1 btn btn-outline-success">Add To Cart</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
    <!-- ==========BMS=========== -->

    <!-- ==========VDIs=========== -->
    <h6>Virtual Desktop Infrastructure</h6>
    <div class="row">
        @foreach($vdis as $vdi)
        <div class="col-md-2">
            <div class="card mb-5 p-3">
                <h5>{{$vdi->name}} </h5>
                <p>{{$vdi->description}} </p>
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $vdi->id }}" name="id">
                    <input type="hidden" value="{{ $vdi->service }}" name="service">
                    <input type="hidden" value="{{ $vdi->name }}" name="name">
                    <input type="hidden" value="{{ $vdi->description }}" name="description">
                    <input type="hidden" value="1" name="quantity">
                    <button class="px-4 py-1 btn btn-outline-success">Add To Cart</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>

</div>
<!-- ==========Products=========== -->


@endsection