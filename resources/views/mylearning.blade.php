@extends('/template/layout')

@section('title', 'My Learning')

@section('custom-csspage', '/css/mylearning.css')

@section('content')
    <div class="my-learning-wrapper p-5">
        <div class="my-learning p-3">
            <div class="row">
                <h1 class="text-orange">My Learning</h1>
            </div>
            <div class="row">
                <ul class="nav nav-underline">
                    <div class="col-2">
                        <li class="nav-item p-3 text-center">
                            <a class="nav-link active" id="ex1-tab-1" aria-current="page" data-bs-toggle="tab"
                                href="#ex1-tabs-1" aria-controls="ex1-tabs-1">
                                <h3 style="font-weight: bold">Courses</h3>
                            </a>
                        </li>
                    </div>
                    <div class="col-2">
                        <li class="nav-item p-3 text-center">
                            <a class="nav-link" id="ex1-tab-2" data-bs-toggle="tab" href="#ex1-tabs-2"
                                aria-controls="ex1-tabs-2">
                                <h3 style="font-weight: bold">Bootcamp</h3>
                            </a>
                        </li>
                    </div>
                </ul>
            </div>

            <div class="tab-content" id="ex1-content">
                {{-- course --}}
                <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                    <div class="myLearning-area-wrapper">
                        <div class="myLearning-area">
                            <div class="row myLearning-properties-wrap most-popular d-flex justify-content-center">
                                <div class="row myLearning-properties all-card">
                                    {{-- @for ($i = 0; $i < 16; $i++) --}}
                                    @foreach ($myLearningCourse as $item)
                                        <div class="col-3 myLearning-card">
                                            <a href="{{ route('courseMaterial', $item->course_id) }}"
                                                style="text-decoration: none; color: inherit; display: block">
                                                <div class="card" style="height: 45vh">
                                                    <div class="card-properties">
                                                        <div class="card-image overlay1">
                                                            <img class="card-img-top" src='{{ $item->image }}'
                                                                style="width: 100%">

                                                        </div>
                                                        <div class="card-body">
                                                            {{-- <h2 class="card-title">Docker Bootcamp: Conquer Docker with Real-World Projects</h3> --}}
                                                            <h2 class="card-title">{{ $item->title }}</h3>
                                                                {{-- <p class="card-writer">by : Donald Davidson </p> --}}
                                                                <p class="card-writer">by : {{ $item->nama }} </p>
                                                                {{-- <p class="card-description">Containerize Apps, Manage
                                                                        Microservices, and Deploy to the Cloud with Docker!
                                                                    </p> --}}
                                                                <p class="card-description">{{ $item->description }}
                                                                </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                    {{-- @endfor --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- bootcamp --}}
                <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                    <div class="myLearning-area-wrapper">
                        <div class="myLearning-area">
                            <div class="row myLearning-properties-wrap most-popular d-flex justify-content-center">
                                <div class="row myLearning-properties all-card">
                                    {{-- @for ($i = 0; $i < 16; $i++) --}}
                                    @foreach ($myLearningBootcamp as $item)
                                        <div class="col-3 myLearning-card">
                                            <a href="{{ route('bootcampDetail', $item->id) }}"
                                                style="text-decoration: none; color: inherit; display: block">
                                                <div class="card d-flex justifpy-content-center">
                                                    <div class="card-properties">
                                                        <div class="card_img overlay1">
                                                            <img class="card-img-top" src='{{ $item->image }}'
                                                                style="width: 100%">
                                                        </div>
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                            <h2 class="card-title">{{ $item->title }}</h2>
                                                            <div
                                                                class="card-footer d-flex justify-content-between align-items-center">
                                                                <p class="card-writer m-0">{{ $item->formattedDate }}</p>
                                                                <img src="{{$item->pubImage}}"
                                                                    style="width: 2.5vw">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                    {{-- @endfor --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
