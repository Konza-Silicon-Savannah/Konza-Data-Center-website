@extends('layouts.base')

@section('content')
<!-- ==========Header=========== -->
<div class="row  p-4 text-center" style="margin-top: 60px;">
    <h3 style="color:#008234;">KONZA CLOUD SERVICES</h3>
</div>
<!-- ==========Header=========== -->

<!-- ==========About=========== -->
<div class="container mt-1">
    <p class="text-justified">
        The Data Centre runs a cloud platform, which integrates infrastructure physical resources in physical Data Centre, and centrally manages multiple virtual data centers. In cloud computing, we offer:
    </p>
</div>
<!-- ==========About=========== -->

<!-- ==========Products=========== -->
<div class="container">
    <h5 class="fs-4">Select Your desired service:</h5>
    <nav class="mt-4">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-link active text-black" id="nav-all-tab" data-bs-toggle="tab" href="#nav-all" role="tab" aria-controls="nav-all" aria-selected="true">
                All Cloud Products
            </a>
            <a class="nav-link" id="nav-vm-tab" data-bs-toggle="tab" href="#nav-vm" role="tab" aria-controls="nav-vm" aria-selected="false">
                Virtual Machines
            </a>
            <!-- <a class="nav-link" id="nav-bm-tab" data-bs-toggle="tab" href="#nav-bm" role="tab" aria-controls="nav-bm" aria-selected="false">
                Bare Metal Services
            </a> -->
            <a class="nav-link text-black" id="nav-vdi-tab" data-bs-toggle="tab" href="#nav-vdi" role="tab" aria-controls="nav-vdi" aria-selected="false">
               Desktop Infrastructure
            </a>
            <a class="nav-link" id="nav-webh-tab" data-bs-toggle="tab" href="#nav-webh" role="tab" aria-controls="nav-webh" aria-selected="false">
                Web Hosting
            </a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
            <!-- ==========VMS=========== -->
            @include('services.vms')
            <!-- ==========VMS=========== -->



            <!-- ==========BMS=========== -->
            <!-- @include('services.bms') -->
            <!-- ==========BMS=========== -->



            <!-- ==========VDIs=========== -->
            @include('services.vdi')
            <!-- ==========VDIs=========== -->

            <!-- ==========webhosting=========== -->
            @include('services.webh')
            <!-- ==========Webhosting=========== -->
        </div>
        <div class="tab-pane fade" id="nav-vm" role="tabpanel" aria-labelledby="nav-vm-tab">
            @include('services.vms')
        </div>
        <!-- <div class="tab-pane fade" id="nav-bm" role="tabpanel" aria-labelledby="nav-bm-tab">
            @include('services.bms')
        </div> -->
        <div class="tab-pane fade" id="nav-vdi" role="tabpanel" aria-labelledby="nav-vdi-tab">
            @include('services.vdi')
        </div>
        <div class="tab-pane fade" id="nav-webh" role="tabpanel" aria-labelledby="nav-webh-tab">
            @include('services.webh')
        </div>
    </div>
</div>
<!-- ==========Products=========== -->


@endsection