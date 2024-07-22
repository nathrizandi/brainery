<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('PageTitle')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/admin/master-style.css">
    {{-- <link rel="stylesheet" href="/css/admin/modal-style.css"> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <!-- NAVBAR -->
    @include("admin.components.navbar")

    <!-- DRAWER -->
    @include("admin.components.drawer")

    <div class="main-div d-flex flex-column">
        <div class="row pt-5 w-100 min-vh-100">
            <div class="col-3">
            </div>
            <div class="col-9" style=" background: #FEF8F3">
                <!-- CONTENT -->
                <div class="d-flex justify-content-start py-3 px-3">
                    @yield('Content')
                </div>
            </div>
        </div>
    </div>


    <!-- FOOTER -->
    @include("admin.components.footer")

</body>
</html>
