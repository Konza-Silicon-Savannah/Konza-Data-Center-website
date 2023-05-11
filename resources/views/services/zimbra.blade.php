@extends('layouts.base')

@section('content')
<!-- ==========Header=========== -->
<div class="bg-light">
<div class="container" style="margin-top: 65px;">
    <div class="row flex" style="margin-top: 50px;">
        <div class="col-md-6 p-4">
            <h2 class="text-greens font-monospace">Zimbra email Solution.   </h2><br>
            <p class="lh-lg">
            This is a Cloud-Hosted Collaboration Software and Email Platform That Integrates with Proprietary Business Solutions. Now your team can communicate and collaborate all in one place, with a great user experience, all inside the communication tool through the use the most - email.  
            </p>
        </div>
        <div class="col-md-6">
            <img src="../imgs/mail.png" style="width:300px;" class="p-3 img-fluid" />
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
            <h4 class="text-greens">Relevance </h4>
            
            <ul class="features"  style="list-style: none;">
                <li >Visibility & Transparency: Open-source code meets government visibility mandates.   </li>
                <li class="mt-2">Security ensures government data is private and remains in-country.  </li>
                <li class="mt-2"> Lowest TCO in the industry - provides relief to customers with budget constraints. They can migrate to Zimbra for better cost savings, or they can run Zimbra with Microsoft to reduce costs.  </li>
                <li class="mt-2">Extensibility enables government-required customizations -   </li>
            </ul>
        
        </div>

    </div>
</div>
<!-- ==========Header=========== -->

<!-- buttons -->
<div class=" mt-3 d-flex justify-content-evenly">
    <a href="{{route('contactcenter')}}"><button type="button" class="btn btn-danger">Previous</button></a>
    <a href="{{route('revenue')}}"><button type="button" class="btn bg-successes text-white">Next</button></a>
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