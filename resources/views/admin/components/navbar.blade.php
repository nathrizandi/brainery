<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/admin/navbar-style.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar shadow-sm fixed-top navbar-expand p-2" style="background: white; z-index:1">
        <div class="col-3"></div>
        <div class="col-9 d-flex flex-row align-content-center">
            <h4 class="ps-3 pe-5 m-0">@yield('NavbarTitle')</h4>
            <ul class="navbar-nav ms-auto me-5 mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-button" href="#"><i class="bi bi-gear"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-button" href="#"><i class="bi bi-envelope"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-button @yield('ProfileActive')" aria-current="page" href="profile"><i class="bi bi-person-gear"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-button" aria-current="page" href="login"><i class="bi bi-box-arrow-left"></i></a>
                </li>
            </ul>
            <span class="navbar-text pe-3">
              Hello, Admin
            </span>
        </div>
      </nav>
</body>
</html>
