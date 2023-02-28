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


    <title>KNDC</title>
</head>

<body>
    <!-- ==========Navabar=========== -->
    <nav class="navbar navbar-expand-lg navbar-light  pe-5 fixed-top">
        <div class="container-fluid">

            <a class="navbar-brand" href="{{route('home')}}">
                <img src="../imgs/dc-logo.png" height="30" alt="Konza Technopolis">
                Konza National Data Center
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{url('cloud')}}">Cloud Services</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="{{route('products.colocation')}}">Colocation</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="#">Domain hosting</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="#">Email hosting</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li>
                        <!-- <a class="nav-item" href="{{ route('cart.list') }}">
                            <i class="bi bi-cart3"><span >{{ Cart::getTotalQuantity()}}</span></i>

                        </a> -->
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
    <!-- ==========Navbar=========== -->

    @yield('content')
    <!-- ==========Footer=========== -->

    <footer class="py-2 mt-4 mx-0 bg-success mt-5">
        <ul class="nav justify-content-center border-bottom pb-3">
            <li class="nav-item"><a href="{{route('home')}}" class="nav-link px-2 text-white">Home</a></li>
            <li class="nav-item"><a href="{{route('products.cloud')}}" class="nav-link px-2 text-white">Cloud services</a></li>
            <li class="nav-item"><a href="{{route('products.colocation')}}" class="nav-link px-2 text-white">Colocation</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Web hosting</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-white">About Us</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Contact Us</a></li>
        </ul>
        <p class="text-center text-white">
            &copy; <script>
                document.write(new Date().getFullYear())
            </script>
            , Konza Technopolis
        </p>
    </footer>
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

</body>


</html>