<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/register.css">
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="icon" href="https://github.com/nathrizandi/brainery/blob/main/public/assets/logo/white.png?raw=true" sizes="48x48" type="image/x-icon">
    <title>Register</title>
</head>
<body>
    <div class="row no-scroll">
        <div class="col-5 center-content" style="background-color: white; height: 100vh;">
            <div class="container container-custom">
                <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/logo/orange.png?raw=true" alt="" style="width: 10vw">
                <h1 class="text-orange mt-4">Register</h1>

                <form class="mt-5" style="width:100%; margin-left: 1vw">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="inputUsername">Username</label>
                            <input type="text" class="form-control form-control-custom" id="inputUsername" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control form-control-custom" id="inputEmail" placeholder="abc@abc.com">
                        </div>
                    </div>
                    <div class="mb-3 mt-3 form-group">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control form-control-custom" id="exampleInputPassword1" placeholder="*********">
                    </div>
                    <div class="mb-3 form-check mt-5">
                      <h3 style="color: red">Error Message</h3>
                    </div>
                    <button type="submit" class="btn regist-btn" style="width: 30vw">Register</button>
                </form>
                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <p>Already have an account? <a href="/login" style="text-decoration: none; font-weight: bold; color: #F76D3B">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-7">
            <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/brain8.png?raw=true" style="width: 70%; margin-left: 7vw">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>