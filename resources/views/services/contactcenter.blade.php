@extends('layouts.base')

@section('content')
<!-- ==========Header=========== -->
<div class="bg-light">
<div class="container" style="margin-top: 65px;">
    <div class="row flex" style="margin-top: 50px;">
        <div class="col-md-6 p-4">
            <h2 class="text-greens font-monospace">Centralized Contact Centre Solution.  </h2><br>
            <p class="lh-lg">
            The Centralized Contact Centre is an infrastructure that can handle high volumes of calls and is equipped with features such as automatic call distribution, interactive voice response, and call recording. The software is accessible to all counties in Kenya and is integrated with all telcos to ensure seamless connectivity. 
            </p>
        </div>
        <div class="col-md-6">
            <img src="../imgs/callcenter.png" height="300px" width="700px" class="p-3 img-fluid" />
        </div>
    </div>
</div>
</div>
<div class="container" style="margin-top: 50px;">
    <div class="row flex">
        <div class="col-md-5">
            <img src="../imgs/hms2.png" width="500px" class="p-3 img-fluid" />
        </div>
        <div class="col-md-7">
            <h4 class="text-greens">Relevance of the Centralized Contact Centre Solution.  </h4>
            
            <ul class=""  style="list-style: circle;">
                <li > Provide asingle point of contact for citizens to access information and services related to various county operations. </li>
                <li class="mt-2">Improve service delivery and increase trust in county governments by making it easier for citizens to access county services and information. </li>
                <li class="mt-2"> Increase citizen participation in county governance by providing a platform for citizens to provide feedback and participate in decision-making processes. </li>
                <li class="mt-2">Enhance the efficiency and effectiveness of county operations by providing a mechanism for citizens to report issues and for county officials to respond to those issues in a timely manner </li>
                <li class="mt-2">Enhance the efficiency and effectiveness of county operations by providing a mechanism for citizens to report issues and for county officials to respond to those issues in a timely manner </li>
                <li class="mt-2">Promote transparency and accountability in county operations by providing a mechanism for citizens to report corruption and misconduct by county officials.</li>
            </ul>
        
        </div>

    </div>
</div>
<!-- ==========Header=========== -->

<footer class="py-2 mt-4 mx-0 bg-dark mt-5">
    <p class="text-center text-white">
        &copy; <script>
            document.write(new Date().getFullYear())
        </script>
        , Konza Technopolis
    </p>
</footer>



@endsection