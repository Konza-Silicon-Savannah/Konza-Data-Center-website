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
    <title>KNDC</title>
</head>

<body>
    <!-- ==========Navabar=========== -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light pe-5 fixed-top">
        <div class="container-fluid">

            <a class="navbar-brand" href="">
                <img src="../imgs/dc-logo.png" height="60" alt="Konza Technopolis">
                Konza National Data Center
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Cloud Services</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="#">Colocation</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="#">Web hosting</a></li>
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

                </ul>
            </div>
        </div>
    </nav>
    <!-- ==========Navbar=========== -->

    @yield('content')
    <!-- ==========Footer=========== -->

    <footer class="py-2 my-4 mx-0 bg-light">
        <ul class="nav justify-content-center border-bottom pb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Cloud services</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Colocation</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Web hosting</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About Us</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Contact Us</a></li>
        </ul>
        <p class="text-center text-muted">
            &copy; <script>
                document.write(new Date().getFullYear())
            </script>
            , Konza Technopolis
        </p>
    </footer>
    <!-- ==========Footer=========== -->


    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>