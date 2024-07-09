@extends('/template/layout')

@section('title', 'Brainery')

@section('content')
    {{-- CAROUSEL --}}
    <div class="row">
        <div id="carouselExampleAutoplaying" class="carousel slide" style="width: 100%; height: 30%" data-bs-ride="carousel">
            <div class="carousel-inner">
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
            <div class="card" style="width: 18rem;">
                <img src="" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>


@endsection