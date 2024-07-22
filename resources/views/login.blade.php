<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="icon" href="https://github.com/nathrizandi/brainery/blob/main/public/assets/logo/white.png?raw=true"
        sizes="48x48" type="image/x-icon">
    <title>Login</title>
</head>

<body>
    <div class="row no-scroll">
        <div class="col-7">
            <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/brain11.png?raw=true"
                style="width: 85%">
        </div>
        <div class="col-5 center-content" style="background-color: white; height: 100vh;">
            <div class="container container-custom">
                <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/logo/orange.png?raw=true"
                    alt="" style="width: 10vw">
                <h1 class="text-orange mt-4">Login to Your Account</h1>

                <form action="/user/login" method="POST" class="mt-5" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 form-group">
                        <label for="exampleInputEmail1" class="form-label" style="font-weight: bold">Email</label>
                        <input name='email' type="email" class="form-control form-control-custom"
                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="mail@gmail.com">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name='password' type="password" class="form-control form-control-custom"
                            id="exampleInputPassword1" placeholder="*********">
                    </div>
                    @if (session('error'))
                        <div class="mb-3 form-check mt-5">
                            <h3 style="color: red; visibility: {{ session('visibility') }}">{{ session('error') }}</h3>
                        </div>
                    @endif
                    <button type="submit" class="btn login-btn" style="width: 30vw">Login</button>
                </form>
                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <p>Not Registered Yet? <a href="/register"
                                style="text-decoration: none; font-weight: bold; color: #F76D3B">Create an Account</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
