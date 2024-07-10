@extends('/template/layout')

@section('title', 'Profile')

@section('custom-csspage', '/css/manage-profile.css')

@section('content')
<div class="d-flex align-items-center mb-4" style="margin-left: 1%">
    <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/icon/user.png?raw=true" alt="Avatar" class="rounded-circle mr-3" style="width: 6vw"">
    <div style="margin-left: 2%">
        <h2 class="mb-0">jmk48</h2>
        <p class="mb-0 text-muted" style="font-weight: bold">Abrahamjmk48@gmail.com</p>
    </div>
</div>

<div class="row mt-6" style="margin-left: 2%; height: 15vh">
    <div class="col-8 card">
        <p class="mt-3 bold">Subscription</p>
        <h2 class="text-orange">Premium Annual</h2>
        <h3>Your bill is $131.88 due at 07/06/24</h3>

    </div>
    <div class="col-2 card" style="margin-left: 1vw">
        <a href="#" style="text-decoration: none; color: inherit; display: block">
        <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/icon/subscription.png?raw=true" style="width: 3vw; margin-top: 3.5vh; margin-left: 4vw">
        <p class="text-center mt-2 bold">View Subscription</p>
        </a>
    </div>
</div>

<div class="row mt-3" style="margin-left: 2%; height: 10vh; width: 76.5vw">
    <div class="col-10 card">
        <h2 class="text-orange mt-3">Account</h2>
        <a href="/profile/edit" style="text-decoration: none; color: inherit; display: block">
            <div class="row mt-1">
                <div class="col-1">
                    <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/icon/edit.png?raw=true" style="width: 1vw">
                </div>
                <div class="col-1">
                    <p class="bold">Edit Profile</p>
                </div>
                <div class="col-1 position-absolute end-0">
                    <p class="bold">></p>
                </div>
            </div>
        </a>
    </div>
</div>

<div class="row mt-3" style="margin-left: 2%; height: 10vh; width: 76.5vw; margin-bottom: 6vw">
    <div class="col-10 card">
        <h2 class="text-orange mt-3">Learning</h2>
        <a href="/profile/certificate" style="text-decoration: none; color: inherit; display: block">
            <div class="row mt-1">
                <div class="col-1">
                    <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/icon/certificate.png?raw=true" style="width: 1vw">
                </div>
                <div class="col-2">
                    <p class="bold">View Certificate</p>
                </div>
                <div class="col-1 position-absolute end-0">
                    <p class="bold">></p>
                </div>
            </div>
        </a>
        <a href="#" style="text-decoration: none; color: inherit; display: block">
            <div class="row">
                <div class="col-1">
                    <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/icon/course.png?raw=true" style="width: 0.8vw">
                </div>
                <div class="col-2">
                    <p class="bold">View Course</p>
                </div>
                <div class="col-1 position-absolute end-0">
                    <p class="bold">></p>
                </div>
            </div>
        </a>
    </div>
</div>

@endsection