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
    <title>Admin</title>
        <!-- CSS file -->
        <link href="../index.css" rel="stylesheet">

    <style>

    </style>

</head>

<body>
    <div class="container-fluid max-vh-100 ">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">

                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a class="" href="{{route('home')}}" style="color:white;">
                        <img src="../imgs/dc-logo.png" height="50" alt="Konza Technopolis">
                    </a>
                    <hr class="hr" />
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li>
                            <a href="#" data-bs-toggle="collapse" class="nav-link px-0 align-middle" style="color:white">
                                <i class="bi bi-grid"></i><span class="ms-1 d-none d-sm-inline">Dashboard</span>
                            </a>

                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle" style="color:white">
                                <i class="bi bi-basket2"></i> <span class="ms-1 d-none d-sm-inline">Requests</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle" style="color:white">
                                <i class="bi bi-envelope"></i> <span class="ms-1 d-none d-sm-inline">Messages</span></a>
                        </li>
                        <!-- <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle " style="color:white">
                                <i class="bi bi-folder2"></i></i> <span class="ms-1 d-none d-sm-inline">Products</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0" style="color:white"> <span class="d-none d-sm-inline">Cloud products</span> 1</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0" style="color:white"> <span class="d-none d-sm-inline">SaaS Products</span> 2</a>
                                </li>
                            </ul>
                        </li> -->


                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="route('profile.edit')">Profile</a></li>
                            <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <!-- <a class="dropdown-item" href="#">Sign out</a> -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a class="dropdown-item" href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        Sign out
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col py-3">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>