@extends('layouts.base')

@section('content')
<!-- ==========Header=========== -->
<div class="row  p-4 text-center" style="margin-top: 100px;">
    <h3 style="color:#008234;">COLOCATION</h3>
</div>
<!-- ==========Header=========== -->

<!-- ==========About=========== -->
<div class="container mt-2">
    <p class="text-justified">
        Konza National Data Center provides adaptable colocation services to accommodate a variety of businesses' demands, from small to large.

        Private suites, dedicated racks, and shared racks are all part of Konza National Data Center’s colocation offerings.

        Konza National Data Center offers additional services, including remote assistance, network monitoring, and cloud connectivity, in addition to colocation services, to assist companies in managing their IT infrastructure. Moreover, KNDC is carrier-neutral, allowing companies to select from a variety of network providers for their internet connectivity requirements.
    </p>
</div>
<!-- ==========About=========== -->

<!-- ==========Products=========== -->
<div class="container">
    <div class="row mt-3">
        <h6 class="fw-bold fs-4">Colocation</h6>
        @foreach($colocation as $colocation)
        <div class="col-md-2">
            <div class="card mb-5 p-3 productcard shadow">
                <h5 class="text-success fw-bold my-3">{{$colocation->name}} </h5>
                <p class="my-3">{{$colocation->description}} </p>
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $colocation->id }}" name="id">
                    <input type="hidden" value="{{ $colocation->service }}" name="service">
                    <input type="hidden" value="{{ $colocation->name }}" name="name">
                    <input type="hidden" value="{{ $colocation->description }}" name="description">
                    <input type="hidden" value="1" name="quantity">
                    <button class="px-4 py-1 btncard">Add To Cart</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- ==========Products=========== -->


@endsection