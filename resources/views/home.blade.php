@extends('/template/layout')

@section('title', 'Brainery')

@section('content')
    <div class="row">
        <div id="carouselExampleAutoplaying" class="carousel slide" style="width: 40%; height: 30%" data-bs-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/banner/banner1.jpg?raw=true" style="width: 100%; height: auto;" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/banner/banner2.jpg?raw=true" style="width: 100%; height: auto;" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/banner/banner3.jpg?raw=true" style="width: 100%; height: auto;" class="d-block w-100" alt="...">
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
@endsection