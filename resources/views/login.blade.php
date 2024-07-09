<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="main-div">
        <div class="row">
            <div class="col-8 logo-image">
                <img src="{{asset('assets\image\Brainery-logo-login.png')}}" alt="" class="img-fluid logo-brainery-login">
            </div>
            <div class="col-4 login-form" style="height:90vh">
                <div class="row login-form-content">
                    <div class="login-form-content-logo">
                        <img src="{{asset('assets\image\Brainery-logo.png')}}" alt="" class="img-fluid logo-brainery-login">
                    </div>

                    <div class="login-form-content-title">
                        <h1>Login to your Account</h1>
                    </div>

                    <div class="login-form-content-form">
                        <div class="email">
                            <h4>Email/Username</h4>
                            <input type="email" placeholder="abc@mail.com" id='email-form'>
                        </div>
                        <div class="password">
                            <h4>Email/Username</h4>
                            <input type="password" placeholder="******************" id='password-form'>
                        </div>
                        <div class="error-message">
                            <h3>Error Messages</h3>
                        </div>
                        <div class="button-login">
                            <button id="button-login">Login</button>
                        </div>
                    </div>
                </div>
                <div class="row login-form-end">
                    <div>
                        <p>Not registered Yet? <em>Create an account</em></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>