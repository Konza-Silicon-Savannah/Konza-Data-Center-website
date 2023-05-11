@extends('layouts.base')

@section('content')
<!-- ==========Header=========== -->
<div class="bg-overlay">
    <div class="container" style="margin-top: 65px;">
        <div class="row flex text-center " style="margin-top: 50px;">

            <h1 class="mt-3 fs-1"> E-Board Solution </h1><br>
            <p class="lh-lg">
                E-Board Solutions are modern day technologies that allow organizations to run meeting effectively, without paperwork.

                Board members make decisions based on their understanding of presented information. Decision makers welcome eBoard as a reliable system.
            </p>


        </div>
    </div>
</div>
<div class="container" style="margin-top: 50px;">
    <div class="row flex">
        <div class="col-md-5">
            <img src="../imgs/eboard.png" width="500px" class="p-3 img-fluid" />
        </div>
        <div class="col-md-7">
            <h4 class="text-greens">Main Features</h4>

            <ul class="features" style="list-style: none;">
                <li> Minutes Tab </li>
                <li class="mt-2">Documentation Tab </li>
                <li class="mt-2">E-Voting Tab </li>
            </ul>
            <h6 class="text-greens">Other Features</h6>

            <ul class="features" style="list-style: none;">
                <li>Adaptability to the structure of organization</li>
                <li class="mt-2">Simple to use. </li>
                <li class="mt-2">Time saving </li>
                <li class="mt-2">vertical collaboration </li>
                <li class="mt-2">Controlled and safe access to documents </li>
                <li class="mt-2">Paperless meetings </li>
            </ul>

        </div>

    </div>
</div>
<!-- ==========Header=========== -->

<!-- buttons -->
<div class=" mt-3 d-flex justify-content-evenly">
    <a href="{{route('zimbra')}}"><button type="button" class="btn btn-danger">Previous</button></a>
    <a href="{{route('hms')}}"><button type="button" class="btn bg-successes text-white">Next</button></a>
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