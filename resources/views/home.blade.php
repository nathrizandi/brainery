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
        @guest
            <h1 class="text-orange mb-4">Hello, Brainers!</h1>
        @else
        <h1 class="text-orange mb-4">Hello, {{ $user->username }}!</h1>
        @endguest
        <h2>What to Learn Next</h2>
        <h3>Our Top Pick for You</h3>
    </div>

    <div class="row">
        <div class="col-9 mt-1">
            <a href="{{ route('courseView', $highestRatedCourse->id) }}" style="text-decoration: none; color: inherit; display: block">
                <div class="card shadow-sm" style="width: 50vw;">
                    <img src="{{ $highestRatedCourse->courseImage }}" class="card-img-top" style="width: 50vw; height: 40vh;">
                    <div class="card-body">
                        <h2>{{ $highestRatedCourse->title }}</h2>
                        <h3>By: {{ $highestRatedCourse->nama }}</h3>
                        <p class="card-text">{{ $highestRatedCourse->description }}</p>
                    </div>
                </div>
            </a>
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
            @foreach ($newestCourses as $course)   
                <div class="col-3">
                    <a href="{{ route('courseView', $course->id) }}" style="text-decoration: none; color: inherit; display: block">
                    <div class="card shadow-sm" style="width: 18vw; height:50vh ;border-radius: 20px">
                        <img src="{{ $course->courseImage }}" class="card-img-top mt-2 align-self-center" style="width: 95%; height: auto; border-radius: 8px;">
                        <div class="card-body">
                            <h3>{{ $course->title }}</h3>
                            <b><p>By: {{ $course->nama }}</p></b>
                            <p>{{ Str::limit($course->description, 100) }}</p>
                        </div>
                    </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <div class="row mt-5">
        <h2>Explore More</h2>
        <h3>Based on the most in-demand categories</h3>
    </div>
    <div class="row mt-3">
        <ul class="nav nav-pills justify-content-start mb-3" id="pills-tab" role="tablist" style="margin-left: 1%">
            @foreach ($categories as $category)
                <li class="nav-item" role="presentation" style="margin-right: 1%;">
                    <button class="nav-link @if($loop->first) active @endif" id="pills-{{ $category->id }}-tab" data-bs-toggle="pill" data-bs-target="#pills-{{ $category->id }}" type="button" role="tab" aria-controls="pills-{{ $category->id }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}"
                        style="background-color: 
                            @if($category->id == 1) #F9BF48 
                            @elseif($category->id == 2) #67A1EE 
                            @elseif($category->id == 3) #8FD8B5 
                            @elseif($category->id == 4) #2A3242 
                            @else #ccc @endif; 
                        color:white; width: 150px">
                        {{ $category->category }}
                    </button>
                </li>
            @endforeach
        </ul>
        
    
        <div class="tab-content" id="pills-tabContent">
            @foreach ($categories as $category)
                <div class="tab-pane fade @if($loop->first) show active @endif" id="pills-{{ $category->id }}" role="tabpanel" aria-labelledby="pills-{{ $category->id }}-tab">
                    <div class="row">
                        @foreach ($category->courses as $course)
                            <div class="col-3">
                                <a href="#" style="text-decoration: none; color: inherit; display: block">
                                    <div class="card shadow-sm" style="width: 18vw; border-radius: 20px; max-height: 60vh">
                                        <img src="{{ $course->courseImage }}" class="card-img-top mt-2 align-self-center" style="width: 95%; height: auto ; border-radius: 8px;">
                                        <div class="card-body">
                                            <h3>{{ $course->title }}</h3>
                                            <b><p>By: {{ $course->nama }}</p></b>
                                            <p>{{ Str::limit($course->description, 35) }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection