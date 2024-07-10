@extends('/template/layout')

@section('title', 'Profile')

@section('custom-csspage', 'css/manage-profile.css')

@section('content')
<div class="d-flex align-items-center mb-4">
    <img src="{{ asset('assets/image/User-Icon.png') }}" alt="Avatar" class="rounded-circle mr-3" width="80"
        height="80">
    <div>
        <h5 class="mb-0">jmk48</h5>
        <p class="mb-0 text-muted">Abrahamjmk48@gmail.com</p>
    </div>
</div>


<div class="container mt-5">
    <div class="card mb-3 border-0 rounded">
        <div class="row no-gutters d-flex justify-content-between">
            <div class="col-10">
                <div class="card-body bg-light rounded">
                    <h6 class="text-muteds" id="bold">Subscription</h6>
                    <h5 class="text-primary">Premium Annual</h5>
                    <p id='bold'>Your bill is $131.88 due at 07/06/24</p>
                </div>
            </div>
            <div class="col-1 bg-light text-center d-flex align-items-center justify-content-center rounded">
                <button class="btn btn-outline-dark d-flex flex-column align-items-center">
                    <img src="{{ asset('assets/image/User-Subscription.png') }}" alt="Subscription Icon"
                        id='small-image'>
                    <i class="fas fa-credit-card"></i> View Subscription
                </button>
            </div>
        </div>
    </div>

    <div class="card mb-3 bg-light border-0 rounded">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div class="w-100">
                <h5 class="text-primary mb-1">Account</h5>
                <div class="justify-content-between d-flex flex-col" id="items">
                    <div class='d-flex flex-row align-items-center'>
                        <div class='full-div'>
                            <img src="{{ asset('assets/image/User-Edit-Profile.png') }}" alt=""
                                id='smaller-image'>
                        </div>
                        <p class="mb-0"><i class="fas fa-pencil-alt"></i> Edit Profile</p>
                    </div>
                    <div class='align-content-center'>
                        &#62;
                    </div>
                </div>
            </div>
            <div>
                <i class="fas fa-chevron-right"></i>
            </div>
        </div>
    </div>

    <div class="card mb-3 bg-light border-0 rounded">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div class='w-100'>
                <h5 class="text-primary mb-1">Learning</h5>
                <div class="justify-content-between d-flex flex-col" id="items">
                    <div class="d-flex flex-row align-items-center">
                        <div class='full-div'>
                            <img src="{{ asset('assets/image/User-Preview-Certificate.png') }}" alt=""
                                id="smaller-image">
                        </div>
                        <p class="mb-0"><i class="fas fa-certificate"></i> View Certificate</p>
                    </div>
                    <div class='align-content-center'>
                        &#62;
                    </div>
                </div>
                <div class="justify-content-between d-flex flex-col" id="items">
                    <div class="d-flex flex-row align-items-center">
                        <div class='full-div'>
                            <img src="{{ asset('assets/image/User-View-Course.png') }}" alt=""
                                id="smaller-image">
                        </div>
                        <p class="mb-0"><i class="fas fa-book"></i> View Course</p>
                    </div>
                    <div class='align-content-center'>
                        &#62;
                    </div>
                </div>
            </div>
            <div>
                <i class="fas fa-chevron-right"></i>
            </div>
        </div>
    </div>
</div>
@endsection