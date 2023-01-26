<div class="row">
    <h6 class="fw-bold fs-4">Bare Metal Service</h6>
    @foreach($bms as $bms)
    <div class="col-md-2">
        <div class="card mb-5 p-3 productcard shadow">
            <h5 class="text-success fw-bold my-3">{{$bms->name}} </h5>
            <p class="my-3">{{$bms->description}} </p>
            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ $bms->id }}" name="id">
                <input type="hidden" value="{{ $bms->service }}" name="service">
                <input type="hidden" value="{{ $bms->name }}" name="name">
                <input type="hidden" value="{{ $bms->description }}" name="description">
                <input type="hidden" value="1" name="quantity">
                <button class="px-4 py-1  btncard">Add To Cart</button>
            </form>
        </div>
    </div>
    @endforeach
</div>