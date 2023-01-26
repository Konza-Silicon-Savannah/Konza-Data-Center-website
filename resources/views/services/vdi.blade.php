<div class="row">
    <h6 class="fw-bold fs-4">Virtual Desktop Infrastructure</h6>
    @foreach($vdis as $vdi)
    <div class="col-md-2">
        <div class="card mb-5 p-3  productcard shadow">
            <h5 class="text-success fw-bold my-3">{{$vdi->name}} </h5>
            <p class="my-3">{{$vdi->description}} </p>
            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ $vdi->id }}" name="id">
                <input type="hidden" value="{{ $vdi->service }}" name="service">
                <input type="hidden" value="{{ $vdi->name }}" name="name">
                <input type="hidden" value="{{ $vdi->description }}" name="description">
                <input type="hidden" value="1" name="quantity">
                <button class="px-4 py-1 btncard">Add To Cart</button>
            </form>
        </div>
    </div>
    @endforeach
</div>