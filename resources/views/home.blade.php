@extends('layouts.base')

@section('content')
<!-- ==========Header=========== -->

<div class="row header mb-5">

    <div class="container header-text">
        <h1 class="text-white">One Stop Shop for all your cloud needs.</h1>
        <p class="text-white">
            Are you in need of web hosting using the conventional cpanel or are you looking for fast, optimized and processor accelearted compute option? Look no further. Konza cloud has all these offerings provisioned for you as easy as pie
        </p>
        <button type="button" class="btn bg-successes text-white mt-3" data-bs-toggle="modal" data-bs-target="#callbackmodal">
            Request a Call Back
        </button>

        <!-- Modal -->
        <div class="modal fade" id="callbackmodal" tabindex="-1" aria-labelledby="callbackmodalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="callbackmodalLabel">Request a call back</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @include('contactform')
                    </div>
                </div>
            </div>
        </div>


        <!-- <div class="col-md-5">
            <img src="../imgs/woofer.png" height="400px" class="mt-5" />
        </div> -->

    </div>
</div>
<!-- ==========Header=========== -->


<!-- ==========Services=========== -->
<div class="container mt-3">
    <div class="row text-center mx-auto">
        <h1>Our <span style="color:#007a37;">Services</span></h1>
        <p>~What do we offer~</p>
        <div class="row">
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="card shadow servicecard ">
                    <!-- <img class="card-img-top" src="../imgs/clouds.jpg" height="180px" /> -->
                    <i class="bi bi-cloud" style="font-size: 60px; color:#007a37;"></i>
                    <div class="card-body d-flex flex-column">
                        <h5>Cloud Servers</h5>
                        <p class="card-text">Konza Virtual Machines is a cloud computing service that allows users to rent virtual machines and access computing resources over the internet.</p>
                        <a href="{{url('cloud')}}" class="btn bg-successes text-white mt-auto">Subscribe</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="card shadow servicecard ">
                    <i class="bi bi-hdd-rack" style="font-size: 60px; color:#007a37;"></i>
                    <div class="card-body d-flex flex-column">
                        <h5>Colocation</h5>
                        <p class="card-text">
                            Konza National Data Center provides adaptable colocation services to accommodate a variety of businesses' demands, from small to large.
                        </p>
                        <a href="#" class="btn bg-successes text-white mt-auto">Subscribe</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch">

                <div class="card shadow servicecard">
                    <i class="bi bi-cloud-upload" style="font-size: 60px; color:#007a37;"></i>
                    <div class="card-body d-flex flex-column">
                        <h5>Web Hosting</h5>
                        <p class="card-text">Konza Data Center's web hosting services are designed to help businesses and individuals establish an online presence quickly and easily.</p>
                        <a href="#" class="btn bg-successes text-white mt-auto">Subscribe</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="card shadow servicecard">
                    <i class="bi bi-back" style="font-size: 60px; color:#007a37;"></i>
                    <div class="card-body d-flex flex-column">
                        <h5>Back-Up as a Service ( BaaS)</h5>
                        <p class="card-text">This is a cloud-based service that provides businesses and organizations with a secure and reliable way to backup and restore their critical data</p>
                        <a href="#" class="btn bg-successes text-white mt-auto">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-3 d-flex align-items-stretch">
                <div class="card shadow servicecard">
                    <i class="bi bi-code-square" style="font-size: 60px; color:#007a37;"></i>
                    <div class="card-body d-flex flex-column">
                        <h5> Software as a Service(SaaS) </h5>
                        <p class="card-text">Konza National Data Centre has developed and is maintaining cloud application softwares, automatic software updates, and software availability to its customers via the internet on a pay-as-you-go basis</p>
                        <a href="#" class="btn bg-successes text-white mt-auto">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-3 d-flex align-items-stretch">
                <div class="card shadow servicecard">
                    <i class="bi bi-display" style="font-size: 60px; color:#007a37;"></i>
                        <div class="card-body d-flex flex-column">
                            <h5> Virtual Desktop Infrastructure </h5>
                            <p class="card-text">
                                Virtual Desktop Infrastructure (VDI) is a cloud-based service that enables users to access virtual desktops and applications from any device with an internet connection.
                            </p>
                            <a href="#" class="btn bg-successes text-white mt-auto">Explore</a>
                        </div>
                </div>
            </div>
            <div class="col-md-3 mt-3 d-flex align-items-stretch">
                <div class="card shadow servicecard">
                    <i class="bi bi-code-square" style="font-size: 60px; color:#007a37;"></i>
                    <i class="bi bi-person-video"></i>
                    <div class="card-body d-flex flex-column">
                        <h5> Video Conferencing Infrastructure </h5>
                        
                        <p class="card-text">
                            The Data Center's Video Conference is a platform that allows users to conduct virtual meetings and conferences from anywhere in the world.
                        </p>
                        <a href="#" class="btn bg-successes text-white mt-auto">Explore</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- ==========Services=========== -->

<!-- ==========About Us=========== -->
<div class="container mt-5">
    <div class="row text-center">
        <h1><span style="color:#007a37;">About</span> Us</h1>
        <p>~Who are we~</p>
        <p><span style="font-style: italic;font-weight: bold;">Vision:</span>To be a global technology and innovation hub.</p>
        <p><span style="font-style: italic;font-weight: bold;">Mission:</span>To develop a sustainable smart city and innovation ecosystem contributing to Kenya’s knowledge-based economy.</p>

    </div>

    <div class="row">
        <div class="col-md-6">
            <img src="../imgs/kndc.jpg" class="img-fluid" />
        </div>
        <div class="col-md-6" style="  line-height: 2;">

            <p>
                Konza National Data Center and Smart City facilities project is being implemented by the Ministry of ICT through Konza Technopolis Development Authority (KoTDA). The project is being executed as a priority for Phase I of Konza Technopolis implementation that will ensure that Konza is able to carry out the core functions of a smart city. In addition, it will be a key enabler towards Kenya’s digital economy and is modelled to support data, voice, video, services, systems and applications.
            </p>
            <p>
                The implementation of Konza National Data Center has been completed and operationalized to offer high end cloud services to private and government institutions. The State-of-the-art Tier III Data Center was designed and implemented in compliance with international standards and best practices such as TIA 942:2017 Accreditation, LEED Gold (USGBC) and Uptime Institute Tier III Certified. The implementation of ISO 27001: Information Security Management & ITIL
            </p>
        </div>
    </div>
    <div class="row mt-4">
        <h4 class="text-center">Our Attributes</h4>
        <div class="row text-center">
            <div class="col-xs-4 col-md-2">
                <img src="../imgs/network.png" />
                <p>Multiple diverse fiber through common ISPs.</p>
            </div>
            <div class="col-xs-4 col-md-2">
                <img src="../imgs/energy.png" />
                <p>2N power redundancy.</p>
            </div>
            <div class="col-xs-4 col-md-2">
                <img src="../imgs/securecloud.png" />
                <p>Multiple physical and cloud security features.</p>
            </div>
            <div class="col-xs-4 col-md-2">
                <img src="../imgs/backup.png" />
                <p>Fast, stable and adequate cloud environment.</p>
            </div>
            <div class="col-xs-4 col-md-2">
                <img src="../imgs/24hrs.png" />
                <p>Dedicated 24/7 operations and support team.</p>
            </div>
            <div class="col-xs-4 col-md-2">
                <img src="../imgs/ccloud.png" />
                <p>AI-based iManager data center infrastructure management system.</p>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <h4 class="text-center">Certifications</h4>
        <div class="row text-center">
            <div class="col-xs-12 col-md-12">
                <img src="../imgs/tia.jfif" height="100px" width="100px" class="m-2" />

                <img src="../imgs/leed.jfif" height="100px" width="100px" class="m-2" />

                <img src="../imgs/tier3.png" height="100px" width="100px" class="m-2" />
            </div>
        </div>
    </div>
</div>
<!-- ==========About Us=========== -->

<!-- ==========Testimonials=========== -->

<div class="container mt-5">
    <div class="row text-center">
        <h1>Testimonials</h1>
        <p>~What they say~</p>
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner px-5 mx-5 fs-5">
            <div class="carousel-item active ">
                <p class="text-center">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <p class="fst-italic text-center">anonymous</p>
            </div>
            <div class="carousel-item ">
                <p class="text-center ">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <p class="fst-italic text-center">anonymous</p>
            </div>
            <div class="carousel-item">
                <p class="text-center ">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <p class="fst-italic text-center">anonymous</p>
            </div>
        </div>

    </div>
</div>
<!-- ==========Testimonials=========== -->

<!-- ==========Contact Us=========== -->
<div class="container mt-5 ">
    <div class="row text-center">
        <h1>Contact <span style="color:#007a37;">Us</span></h1>
    </div>

    <div class="row mx-3">
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
<!-- ==========Contact Us=========== -->
<footer class="py-2 mt-4 mx-0 bg-dark mt-5">
    <ul class="nav justify-content-center border-bottom pb-3">
        <li class="nav-item"><a href="{{route('home')}}" class="nav-link px-2 text-white">Home</a></li>
        <li class="nav-item"><a href="{{route('products.cloud')}}" class="nav-link px-2 text-white">Cloud services</a></li>
        <li class="nav-item"><a href="{{route('products.colocation')}}" class="nav-link px-2 text-white">Colocation</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Web hosting</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-white">About Us</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Contact Us</a></li>
        @auth
        <li class="nav-item"><a href="{{ url('/dashboard') }}" class="nav-link px-2 text-white">Dashboard</a></li>
        @else
        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link px-2 text-white">Login</a></li>
        @endauth

    </ul>
    <p class="text-center text-white">
        &copy; <script>
            document.write(new Date().getFullYear())
        </script>
        , Konza Technopolis
    </p>
</footer>


@endsection