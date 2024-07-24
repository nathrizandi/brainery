@extends('/template/layout')

@section('title', 'Course Detail')

@section('custom-csspage', '/css/course-detail.css')

@section('content')

<div class="container-fluid d-flex flex-column min-vh-100">
    <div class="row flex-grow-1">
        <div class="sidebar col-2 d-flex flex-column">
            <div class="sidebar-course">
                <span class="sidebar-title p-4">
                    <h2>{{$courseMaterial->title}}</h2>
                </span>
                
                <div class="sidebar-item">
                    <div class="accordion" id="sidebar-accordion">
                        <h3 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Course Material
                            </button>
                        </h3>
                        
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#sidebar-accordion">
                            <div class="accordion-body choose" data-content="week-1">
                                Week 1
                            </div>    
                            <div class="accordion-body" data-content="week-2">
                                Week 2
                            </div>
                            <div class="accordion-body" data-content="week-3">
                                Week 3
                            </div>
                            <div class="accordion-body" data-content="week-4">
                                Week 4
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sidebar-item course-info" data-content="course-info">
                    Course Info
                </div>
            </div>
        </div>

        <div class="content-area col">
            <div id="content-area" class="w-100 p-4">
                <div class="accordion" id="accordionExample">
                    <div class="course-week-content" data-content="week-1">
                        @for ($i = 1; $i <= 4; $i++)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading{{ $i }}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse{{ $i }}" aria-expanded="false"
                                aria-controls="collapse{{ $i }}">
                                Session {{ $i }} 
                            </button>
                        </h2>
                        <div id="collapse{{ $i }}" class="accordion-collapse collapse"
                                        aria-labelledby="heading{{ $i }}" data-bs-parent="#accordionExample">
                                        @foreach ($courseWeek as $item)
                                        <a href="{{route("courseMedia", $item->mediaId)}}" style="text-decoration: none; color: inherit; display: block">
                                                <div class="accordion-body">
                                                    {{$item->subTitle}}
                                                </div>
                                            </a>
                                            @endforeach
                                    </div>
                                </div>
                                @endfor
                            </div>
                            
                            <div class="course-week-content" data-content="week-2">
                                @for ($i = 1; $i <= 4; $i++)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading{{ $i }}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse{{ $i }}" aria-expanded="false"
                                aria-controls="collapse{{ $i }}">
                                Session {{ $i }} 
                            </button>
                        </h2>
                        <div id="collapse{{ $i }}" class="accordion-collapse collapse"
                                        aria-labelledby="heading{{ $i }}" data-bs-parent="#accordionExample">
                                        @foreach ($courseWeek as $item)
                                        <a href="{{route("courseMedia", $item->mediaId)}}" style="text-decoration: none; color: inherit; display: block">
                                                <div class="accordion-body">
                                                    {{$item->subTitle}}
                                                </div>
                                            </a>
                                            @endforeach
                                    </div>
                                </div>
                                @endfor
                            </div>
                    
                    <div class="course-week-content" data-content="week-3">
                        @for ($i = 1; $i <= 4; $i++)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading{{ $i }}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse{{ $i }}" aria-expanded="false"
                                aria-controls="collapse{{ $i }}">
                                Session {{ $i }} 
                            </button>
                        </h2>
                        <div id="collapse{{ $i }}" class="accordion-collapse collapse"
                                        aria-labelledby="heading{{ $i }}" data-bs-parent="#accordionExample">
                                        @foreach ($courseWeek as $item)
                                        <a href="{{route("courseMedia", $item->mediaId)}}" style="text-decoration: none; color: inherit; display: block">
                                                <div class="accordion-body">
                                                    {{$item->subTitle}}
                                                </div>
                                            </a>
                                            @endforeach
                                    </div>
                                </div>
                                @endfor
                    </div>
                    <div class="course-week-content" data-content="week-4">
                        @for ($i = 1; $i <= 4; $i++)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading{{ $i }}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse{{ $i }}" aria-expanded="false"
                                aria-controls="collapse{{ $i }}">
                                Session {{ $i }} 
                            </button>
                        </h2>
                        <div id="collapse{{ $i }}" class="accordion-collapse collapse"
                                        aria-labelledby="heading{{ $i }}" data-bs-parent="#accordionExample">
                                        @foreach ($courseWeek as $item)
                                        <a href="{{route("courseMedia", $item->mediaId)}}" style="text-decoration: none; color: inherit; display: block">
                                                <div class="accordion-body">
                                                    {{$item->subTitle}}
                                                </div>
                                            </a>
                                            @endforeach
                                    </div>
                                </div>
                                @endfor
                    </div>
                    
                    <div class="notes-content" data-content="course-info">
                        <h1 class="text-center text-orange">{{$courseMaterial->title}}</h1>
                        <div class="course-info-content pb-3 mt-5">
                            <p>
                                <h2>About this Course</h2>
                                <ul>
                                    {{-- @foreach ($courseWeek as $item)
                                    <li>
                                        {{$item->desc}}
                                    </li>
                                        
                                    @endforeach --}}
                                </ul>
                                {{$courseMaterial->medDesc}}
                                
                        </p>
                    </div>
                    {{-- @for ($i = 0; $i < 3; $i++) --}}
                    <hr>
                    <div class="course-info-writers p-3 d-flex gap-4">
                        <div class="">
                            <img src="{{asset($courseMaterial->spkImage)}}"
                            alt="" style="border-radius: 50%; width:100px">
                        </div>
                        <div class="">
                            <h3>Taught by:</h3>
                            <p>{{$courseMaterial->spkName}}</p>
                            <h3>Company:</h3>
                            <p>Bina Nusantara</p>
                        </div>
                    </div>
                    {{-- @endfor --}}
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initially show only the content for "Week 1"
        document.querySelectorAll('.course-week-content, .notes-content').forEach(contentItem => {
            if (contentItem.getAttribute('data-content') === 'week-1') {
                contentItem.style.display = 'block';
            } else {
                contentItem.style.display = 'none';
            }
        });

        // Add event listeners to sidebar items
        document.querySelectorAll('.accordion-body, .course-info').forEach(item => {
            item.addEventListener('click', event => {
                // Remove 'choose' class from all items
                document.querySelectorAll('.accordion-body, .course-info').forEach(body => {
                    body.classList.remove('choose');
                });

                // Add 'choose' class to the clicked item
                event.target.classList.add('choose');

                // Show the corresponding content
                const content = event.target.getAttribute('data-content');
                document.querySelectorAll('.course-week-content, .notes-content').forEach(contentItem => {
                    if (contentItem.getAttribute('data-content') === content) {
                        contentItem.style.display = 'block';
                    } else {
                        contentItem.style.display = 'none';
                    }
                });
            });
        });
    });
</script>
@endsection
