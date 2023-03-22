@extends('layouts.base')

@section('content')
<h1 class="text-center" style="margin-top: 70px;">Contact <span style="color:#007a37;">Us</span></h1>
<div class="container d-flex justify-content-center" >

    
    <div class="row">
        <div class="col-md-6">
            <!-- contact Us form -->
            @include('contactform')
            <!-- contact Us form -->
        </div>
        <div class="col-md-6 p-5">
            <h6 style="color:#008234;">PHONE NUMBER</h6>
            <a href="tel:+254700515151">+254700515151</a>
            <h6 style="color:#008234;">EMAIL ADDRESS</h6>
            <a href="mailto:cloud@konza.go.ke?cc=secondemail@example.com, anotheremail@example.com,">cloud@konza.go.ke</a>
            <h6 style="color:#008234;">ADDRESS</h6>
            <p>Konza Technopolis Development Authority 7th floor,
                <br>
                Konza Complex Nairobi-Mombasa Road – Konza
                <br>
                P. O. Box 1 – 90150
                <br>
                Konza Technopolis, Kenya
            </p>

        </div>
    </div>
</div>
<footer class="py-2 mt-4 mx-0 bg-dark mt-5 footer">
    <p class="text-center text-white">
        &copy; <script>
            document.write(new Date().getFullYear())
        </script>
        , Konza Technopolis
    </p>
</footer>


@endsection