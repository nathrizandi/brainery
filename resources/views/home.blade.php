@extends('/template/layout')

@section('title', 'Brainery')

@section('content')
    {{-- CAROUSEL --}}
    <div class="row">
        <div id="carouselExampleAutoplaying" class="carousel slide" style="width: 100%; height: 30%;" data-bs-ride="carousel">
            <div class="carousel-inner" style="border-radius: 10px">
            <div class="carousel-item active">
                <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/jumbotron/banner1.jpg?raw=true" style="width: 100%; height: auto;" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/jumbotron/banner2.jpg?raw=true" style="width: 100%; height: auto;" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/jumbotron/banner3.jpg?raw=true" style="width: 100%; height: auto;" class="d-block w-100" alt="...">
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    
    <div class="row mt-4">
        <h1 class="text-orange mb-4">Hello, User</h1>
        <h2>What to Learn Next</h2>
        <h3>Our Top Pick for You</h3>
    </div>

    <div class="row">
        <div class="col-9 mt-1">
            <div class="card shadow-sm" style="width: 50vw;">
                <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/courseBanner/course.jpg?raw=true" class="card-img-top" style="width: 100%; height: auto;">
                <div class="card-body">
                    <h2>Nama Course</h2>
                    <h3>By: Nama Tutor</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="row mt-5">
                <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/brain4.png?raw=true" alt="" style="width: 23vw">
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="row">
            <h2>New on Brainery</h2>
        </div>
        <div class="row">
            @for ($i = 0; $i < 4; $i++)    
                <div class="col-3">
                    <div class="card shadow-sm" style="width: 18vw; border-radius: 20px">
                        <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/courseBanner/course2.jpg?raw=true" class="card-img-top mt-2 align-self-center" style="width: 95%; height: auto; border-radius: 8px;">
                        <div class="card-body">
                            <h3>Nama Course</h3>
                            <b><p>By: Nama Tutor</p></b>
                            <p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    <div class="row mt-5">
        <h2>Explore More</h2>
        <h3>Based on the most in-demand categories</h3>
    </div>
    <div class="row mt-3">
        <ul class="nav nav-pills justify-content-start mb-3" id="pills-tab" role="tablist" style="margin-left: 1%">
            <li class="nav-item" role="presentation" style="margin-right: 1%;">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-compsci" type="button" role="tab" aria-controls="pills-home" aria-selected="true" style="background-color: #F9BF48; color:white; width: 150px">Computer Science</button>
            </li>
            <li class="nav-item" role="presentation" style="margin-right: 1%;">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-music" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" style="background-color: #67A1EE; color:white; width: 150px">Music</button>
            </li>
            <li class="nav-item" role="presentation" style="margin-right: 1%;">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-english" type="button" role="tab" aria-controls="pills-contact" aria-selected="false" style="background-color: #8FD8B5; color:white; width: 150px">English</button>
            </li>
            <li class="nav-item" role="presentation" style="margin-right: 1%;">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-accounting" type="button" role="tab" aria-controls="pills-contact" aria-selected="false" style="background-color: #2A3242; color:white; width: 150px">Accounting</button>
            </li>
        </ul>

        <!-- Tab content -->
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-compsci" role="tabpanel" aria-labelledby="pills-compsci-tab">
                <div class="row">
                    @for ($i = 0; $i < 4; $i++)    
                        <div class="col-3">
                            <div class="card shadow-sm" style="width: 18vw; border-radius: 20px">
                                <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/courseBanner/course2.jpg?raw=true" class="card-img-top mt-2 align-self-center" style="width: 95%; height: auto; border-radius: 8px;">
                                <div class="card-body">
                                    <h3>Nama Course Compsci</h3>
                                    <b><p>By: Nama Tutor</p></b>
                                    <p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>

            <div class="tab-pane fade" id="pills-music" role="tabpanel" aria-labelledby="pills-music-tab">
                <div class="row">
                    @for ($i = 0; $i < 4; $i++)    
                        <div class="col-3">
                            <div class="card shadow-sm" style="width: 18vw; border-radius: 20px">
                                <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/courseBanner/course2.jpg?raw=true" class="card-img-top mt-2 align-self-center" style="width: 95%; height: auto; border-radius: 8px;">
                                <div class="card-body">
                                    <h3>Nama Course Music</h3>
                                    <b><p>By: Nama Tutor</p></b>
                                    <p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>

            <div class="tab-pane fade" id="pills-english" role="tabpanel" aria-labelledby="pills-english-tab">
                <div class="row">
                    @for ($i = 0; $i < 4; $i++)    
                        <div class="col-3">
                            <div class="card shadow-sm" style="width: 18vw; border-radius: 20px">
                                <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/courseBanner/course2.jpg?raw=true" class="card-img-top mt-2 align-self-center" style="width: 95%; height: auto; border-radius: 8px;">
                                <div class="card-body">
                                    <h3>Nama Course English</h3>
                                    <b><p>By: Nama Tutor</p></b>
                                    <p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>

            <div class="tab-pane fade" id="pills-accounting" role="tabpanel" aria-labelledby="pills-accounting-tab">
                <div class="row">
                    @for ($i = 0; $i < 4; $i++)    
                        <div class="col-3">
                            <div class="card shadow-sm" style="width: 18vw; border-radius: 20px">
                                <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/courseBanner/course2.jpg?raw=true" class="card-img-top mt-2 align-self-center" style="width: 95%; height: auto; border-radius: 8px;">
                                <div class="card-body">
                                    <h3>Nama Course Accounting</h3>
                                    <b><p>By: Nama Tutor</p></b>
                                    <p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>


@endsection