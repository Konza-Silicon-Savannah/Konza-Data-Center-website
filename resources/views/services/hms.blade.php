@extends('layouts.base')

@section('content')
<!-- ==========Header=========== -->
<div class="bg-light">
<div class="container" style="margin-top: 65px;">
    <div class="row flex" style="margin-top: 50px;">
        <div class="col-md-6 p-4">
            <h2 class="text-greens font-monospace">Healthcare Management System </h2><br>
            <p class="lh-lg">
                This is robust comprehensive platform that covers healthcare needs from end to end. The solutions also include a patient mobile app complimented with USSD and SMS functionality inbuilt into the hospital platform enabling auto-alerts to individual patients and the dissemination of targeted  health messaging to patient groups, as well as a community health worker (CHW) mobile app, providing a community level engagement platform.
            </p>
        </div>
        <div class="col-md-6">
            <img src="../imgs/hms2.png" height="300px" width="700px" class="p-3 img-fluid" />
        </div>
    </div>
</div>
</div>
<div class="container" style="margin-top: 50px;">
    <div class="row flex">
        <div class="col-md-6">
            <img src="../imgs/hms2.png" width="500px" class="p-3 img-fluid" />
        </div>
        <div class="col-md-6">
            <h4 class="text-greens">Relevance of the Healthcare Management System </h4>
            
            <ul class="features"  style="list-style: none;">
                <li >Efficiencies in patient management </li>
                <li class="mt-2">Track health outcomes at the community level </li>
                <li class="mt-2">Secure health records management </li>
                <li class="mt-2">Healthcare analytics to better understand and improve healthcare </li>
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