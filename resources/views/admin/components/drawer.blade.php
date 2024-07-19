<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/admin/drawer-style.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar d-flex flex-column justify-content-start fixed-top shadow-sm w-25 py-3 gap-3" style="background: #2A3242; height: 100vh; z-index:2">
        <div class="d-grid w-75">
            <img class="img-fluid" src="https://github.com/nathrizandi/brainery/blob/main/public/assets/logo/white.png?raw=true" alt="">
        </div>
        <div class="d-grid mx-auto">
            <ul class="navbar-nav ms-automb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="home">
                        <button type="button" class="btn btn-primary w-100 drawer-btn @yield('HomeActive')">
                            <div class="d-flex flex-row gap-3 py-1 px-3">
                                <i class="bi bi-house-door"></i>
                                Home
                            </div>
                        </button>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user">
                        <button type="button" class="btn btn-primary w-100 drawer-btn @yield('UserActive')">
                            <div class="d-flex flex-row gap-3 py-1 px-3">
                                <i class="bi bi-people"></i>
                                Manage User
                            </div>
                        </button>
                    </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="course">
                    <button type="button" class="btn btn-primary w-100 drawer-btn @yield('CourseActive')">
                            <div class="d-flex flex-row gap-3 py-1 px-3">
                                <i class="bi bi-mortarboard"></i>
                                Manage Course
                            </div>
                    </button>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="purchase">
                    <button type="button" class="btn btn-primary w-100 drawer-btn @yield('PurchaseActive')">
                            <div class="d-flex flex-row gap-3 py-1 px-3">
                                <i class="bi bi-credit-card"></i>
                                Manage Purchase History
                            </div>
                    </button>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="bootcamp">
                    <button type="button" class="btn btn-primary w-100 drawer-btn @yield('BootcampActive')">
                            <div class="d-flex flex-row gap-3 py-1 px-3">
                                <i class="bi bi-clipboard"></i>
                                Manage Bootcamp
                            </div>
                        </button>
                  </a>
                </li>
            </ul>
        </div>
    </nav>
</body>
</html>
