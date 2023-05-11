@extends('layouts.base')

@section('content')
<!-- ==========Header=========== -->
<div class="bg-light">
<div class="container" style="margin-top: 65px;">
    <div class="row flex" style="margin-top: 50px;">
        <div class="col-md-6 p-4">
            <h2 class="text-greens font-monospace mt-3">Revenue Management & Collection System   </h2><br>
            <p class="lh-lg">
            Konza has a Revenue Collection & Management solution that encompasses the whole revenue cycle from collection, management and reporting with business intelligence capabilities.  
            </p>
        </div>
        <div class="col-md-6">
            <!-- <img src="../imgs/mail.png" style="width:300px;" class="p-3 img-fluid" /> -->
        </div>
    </div>
</div>
</div>
<div class="container" style="margin-top: 50px;">
    <div class="row flex">
        <div class="col-md-5">
            <img src="../imgs/mails.png" width="500px" class="p-3 img-fluid" />
        </div>
        <div class="col-md-7">
            <h4 class="text-greens">Relevance</h4>
            
            <ul class="features"  style="list-style: none;">
                <li >Reform indirect taxes on goods and services. </li>
                <li class="mt-2">Introduce comprehensive tax administration reforms.</li>
                <li class="mt-2">Management, governance, and human resources</li>
                <li class="mt-2">More modern registration, filing, and management of payment obligations.</li>
                <li class="mt-2">Enhanced audit and verification program. </li>
            </ul>
        
        </div>

    </div>
</div>
<!-- ==========Header=========== -->

<!-- buttons -->
<div class=" mt-3 d-flex justify-content-evenly">
    <a href="{{route('revenue')}}"><button type="button" class="btn btn-danger">Previous</button></a>
    <a href="{{route('eboard')}}"><button type="button" class="btn bg-successes text-white">Next</button></a>
</div>
<!-- buttons -->

<footer class="py-2 mt-4 mx-0 bg-dark mt-5">
    <p class="text-center text-white">
        &copy; <script>
            document.write(new Date().getFullYear())
        </script>
        , Konza Technopolis
    </p>
</footer>



@endsection