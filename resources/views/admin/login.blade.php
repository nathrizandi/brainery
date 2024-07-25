<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/admin/login-style.css">
</head>

<body>
    <div class="container-fluid main-div">
        <div class="container-md">
            <div class="row gy-3">
                <div class="col-md-4 test"></div>
                <div class="col-md-4 test">
                    <img class="img-fluid"
                        src="https://github.com/nathrizandi/brainery/blob/main/public/assets/logo/orange.png?raw=true"
                        alt="">
                </div>
                <div class="col-md-4 test"></div>
                <div class="col-md-3 test"></div>
                <div class="col-md-6 test">
                    <form action="{{ route('AdminLogin') }}" method="POST">
                        @csrf
                        <div class="mb-1 mt-3">
                            <label for="inputUsername" class="form-label">Username/Email</label>
                            <input type="text" class="form-control" id="inputUsername" name="email_or_username">
                            <div id="username-error" class="form-text" hidden>Invalid Username/Email!</div>
                        </div>
                        <div>
                            <label for="inputPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword" name="password">
                            <div id="password-error" class="form-text" hidden>Invalid Password!</div>
                        </div>
                        <div class="d-flex justify-content-center my-5">
                            <button type="submit" class="btn btn-primary w-100 custom-btn">Login</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 test"></div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
