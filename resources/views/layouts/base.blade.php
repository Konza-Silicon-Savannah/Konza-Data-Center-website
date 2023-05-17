<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- CSS file -->
    <link href="../index.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- FavIcon -->
    <link rel="icon" type="image/x-icon" href="../imgs/dc-logo.png">
    <title>KNDC</title>
    <style type="text/css">
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .navbar .megamenu {
            padding: 1rem;
        }

        /* ============ desktop view ============ */
        @media all and (min-width: 992px) {
            .navbar .has-megamenu {
                position: static !important;
            }

            .navbar .megamenu {
                /* left: 20%;
                right: 0; */
                width: 100%;
                margin-top: 0;
                line-height: 3;
            }
        }

        /* ============ desktop view .end// ============ */
        /* ============ mobile view ============ */
        @media(max-width: 991px) {

            .navbar.fixed-top .navbar-collapse,
            .navbar.sticky-top .navbar-collapse {
                overflow-y: auto;
                max-height: 90vh;
                margin-top: 10px;
            }
        }

        a {
            color: black;
            text-decoration: none;
        }

        .megamenu:hover {
            color: #008234;

        }

        .megmenuitems:hover {
            color: #008234;
        }

        /* ============ mobile view .end// ============ */
    </style>
</head>

<body>
    <!-- ==========Navabar=========== -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-dark  pe-5 fixed-top bg-successes" style="font-size: 15px;">
            <div class="container-fluid">
                <!-- ==========Logo=========== -->
                <a class="navbar-brand" href="{{route('home')}}" style="font-size: 15px;" >
                    <img src="../imgs/wlogo.png" height="40" alt="Konza Technopolis">
                    Konza National Data Center
                </a>
                <!-- ==========Logo=========== -->

                <!-- ==========Toggle button=========== -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- ==========Toggle button=========== -->

                <div class="collapse navbar-collapse " id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <!-- ==========Home=========== -->
                        <li class="nav-item" >
                            <a class="nav-link {{ request()->routeIs('home') ? 'active':'' }}" aria-current="page" href="{{route('home')}}"  >Home</a>
                        </li>
                        <!-- ==========Home=========== -->

                        <!-- ==========Services Megamenu=========== -->
                        <li class="nav-item dropdown has-megamenu ">
                            <a class="nav-link {{ request()->routeIs('products.cloud' , 'products.colocation') ? 'active':'' }} dropdown-toggle " href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" > Services </a>
                            <div class="dropdown-menu megamenu shadow" role="menu">
                                <div class="row g-3 px-2 ">
                                    <!-- ==========Cloud Services=========== -->
                                    <div class="col-lg-4 col-12">
                                        <div class="col-megamenu" style="margin-right: 40px;">
                                            <h5 class="title"><a href="{{url('cloud')}}" style="color:#008234;">Data Center Services</a></h5>
                                            <ul class="list-unstyled ">
                                                <li><a href="{{url('cloud')}}" class="megmenuitems">Konza Cloud(VMs)</a></li>
                                                <li><a href="{{url('cloud')}}" class="megmenuitems">Virtual Desktop Infrastructure</a></li>
                                                <li><a href="{{route('products.colocation')}}" class="megmenuitems">Colocation</a></li>
                                                <li><a href="{{url('cloud')}}" class="megmenuitems">Web Hosting</a></li>
                                            </ul>
                                        </div> 
                                    </div>
                                    <!-- ==========Cloud Services=========== -->

                                    <!-- ==========SaaS=========== -->                                   
                                    <div class="col-lg-4 col-12">
                                        <div class="col-megamenu">
                                            <h5 class="title"><a href="" style="color:#008234;">SaaS Solutions</a></h5>
                                            <ul class="list-unstyled text-black">
                                                <li><a href="{{route('hms')}}" class="megmenuitems">Hospital Management System</a></li>
                                                <li><a href="{{route('contactcenter')}}" class="megmenuitems">Contact Center Solution</a></li>
                                                <li><a href="{{route('zimbra')}}" class="megmenuitems">Zimbra Email Solution</a></li>
                                                <li><a href="{{route('revenue')}}" class="megmenuitems">Revenue Management & Collection System</a></li>
                                                <li><a href="{{route('eboard')}}" class="megmenuitems">E-Board Solution</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <!-- ==========SaaS=========== -->                                   

                                    <!-- ==========Other=========== -->                                   
                                    <div class="col-lg-4 col-12">
                                        <div class="col-megamenu">
                                            <h5 class="title"><a href="" style="color:#008234;">Other Service</a></h5>

                                            <ul class="list-unstyled">
                                                <li><a href="{{route('comingsoon')}}" class="megmenuitems">Backup as a Service</a></li>
                                            </ul>
                                        </div> 
                                    </div>
                                    <!-- ==========Other=========== -->                                   
                                </div>
                        </li>
                        <!-- ==========Services Megamenu=========== -->


                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('about') ? 'active':'' }}" href="{{route('about')}}" >About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('contactus') ? 'active':'' }}" href="{{route('contactus')}}" >Contact Us</a>
                        </li>
                        <li>
                            <a class="nav-item" href="{{ route('cart.list') }}">
                                <button type="button" class="btn btn-success position-relative">
                                    <i class="bi bi-cart3">
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            {{ Cart::getTotalQuantity()}}

                                        </span>
                                    </i>
                                </button>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

    </div>

    <!-- ==========Navbar=========== -->

    @yield('content')
    <!-- ==========Footer=========== -->

    <!-- <footer class="py-2 mt-4 mx-0 bg-success mt-5 footer">
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
    </footer> -->
    <!-- ==========Footer=========== -->

    <script>
        @if(Session::has('message'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{ session('message') }}");
        @endif
    </script>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Javascript -->
    <script src="../index.js"></script>
    <script>
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('hamburger-toggle')) {
                e.target.children[0].classList.toggle('active');
            }
        })
    </script>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            /////// Prevent closing from click inside dropdown
            document.querySelectorAll('.dropdown-menu').forEach(function(element) {
                element.addEventListener('click', function(e) {
                    e.stopPropagation();
                });
            })
        });
        // DOMContentLoaded  end
    </script>
</body>


</html>