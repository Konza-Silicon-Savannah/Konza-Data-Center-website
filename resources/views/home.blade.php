@extends('layouts.base')

@section('content')
<!-- ==========Header=========== -->
<div class="row header">
    <div class="col-md-7">
        <div class="container header-text">
            <h1>One Stop Shop for all your cloud needs.</h1>
            <p>
                Are you in need of web hosting using the conventional cpanel or are you looking for fast, optimized and processor accelearted compute option? Look no further. Konza cloud has all these offerings provisioned for you as easy as pie
            </p>
        </div>
    </div>
    <div class="col-md-5">
        <img src="../imgs/woofer.png" height="400px" class="mt-5" />
    </div>

</div>
<!-- ==========Header=========== -->

<!-- ==========Services=========== -->
<div class="container mt-3">
    <div class="row text-center">
        <h1>Our Services</h1>
        <p>~What do we offer~</p>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="../imgs/clouds.jpg" height="180px"/>
                    <div class="card-body">
                        <h3>Cloud Storage</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{url('cloud')}}" class="btn btn-primary">Read More</a>
                        <a href="#" class="btn btn-success">Subscribe</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            <img class="card-img-top" src="../imgs/server.jpg" height="180px"/>
                <div class="card">
                    <div class="card-body">
                        <h3>Colocation</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                        <a href="#" class="btn btn-success">Subscribe</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            <img class="card-img-top" src="../imgs/domain.jpg" height="180px"/>
                <div class="card">
                    <div class="card-body">
                        <h3>Web hosting</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                        <a href="#" class="btn btn-success">Subscribe</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            <img class="card-img-top" src="../imgs/development.jpg" height="180px"/>
                <div class="card">
                    <div class="card-body">
                        <h5>Web Development</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-success">Explore</a>
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
        <h1>About Us</h1>
        <p>~Who are we~</p>
    </div>
    <div class="row">
        <div class="col-md-6">
            <img src="../imgs/kndc.jpg" class="img-fluid" />
        </div>
        <div class="col-md-6">
            <p>
                Konza National Data Center and Smart City facilities project is being implemented by the Ministry of ICT through Konza Technopolis Development Authority (KoTDA). The project is being executed as a priority for Phase I of Konza Technopolis implementation that will ensure that Konza is able to carry out the core functions of a smart city. In addition, it will be a key enabler towards Kenya’s digital economy and is modelled to support data, voice, video, services, systems and applications.
            </p>
            <p>
                The implementation of Konza National Data Center has been completed and operationalized to offer high end cloud services to private and government institutions. The State-of-the-art Tier III Data Center was designed and implemented in compliance with international standards and best practices such as TIA 942:2017 Accreditation, LEED Gold (USGBC) and Uptime Institute Tier III Certified. The implementation of ISO 27001: Information Security Management & ITIL
            </p>
            <a>Read more</a>
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
                <img src="../imgs/tia.jfif" height="150px" width="150px" class="m-2" />

                <img src="../imgs/leed.jfif" height="150px" width="150px" class="m-2" />

                <img src="../imgs/tier3.png" height="150px" width="150px" class="m-2" />
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
        <div class="carousel-inner px-5 mx-5">
            <div class="carousel-item active">
                <p class="text-center ">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>
            <div class="carousel-item">
                <p class="text-center ">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>
            <div class="carousel-item">
                <p class="text-center ">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>
        </div>

    </div>
</div>
<!-- ==========Testimonials=========== -->

<!-- ==========Contact Us=========== -->
<div class="container mt-5">
    <div class="row text-center">
        <h1>Contact Us</h1>
    </div>

    <div class="row">
        <div class="col-md-6">
            <!-- contact Us form -->
            <form action="" method="">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="John Doe">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Send</button>
            </form>
             <!-- contact Us form -->
        </div>
        <div class="col-md-6 p-5">
            <h6 style="color:#008234;">PHONE NUMBER</h6>
            <a>+254700515151</a>
            <h6 style="color:#008234;">EMAIL ADDRESS</h6>
            <a>cloud@konza.go.ke</a>
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


@endsection