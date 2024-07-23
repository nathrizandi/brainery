@extends('/template/layout')

@section('title', 'Course')

@section('custom-csspage', '/css/course-media.css')

@section('content')
    <div class="row">
        @foreach ($courseMedia as $item)
        <a href="{{route("courseMaterial", $item->cmId)}}" style="text-decoration: none; color: inherit; display: block">
            <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/icon/back.png?raw=true" style="width: 3.5vw">
        </a>
            
        @endforeach
    </div>
    <div class="video-container mt-2" style="margin-left: 2%">
        <div class="row">
            @foreach ($courseMedia as $item)
            <iframe width="1691" height="622" src="{{$item->video}}" title="Introduction to Linked List" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            @endforeach
        </div>
    </div>
    <div class="row mt-5" style="margin-left: 2%">
        <div class="col-10">
            @foreach ($courseMedia as $item)
            <h1 class="text-orange">{{$item->title}}</h1>
            <p>{{$item->desc}}</p>
                
            @endforeach
        </div>
        <div class="col-2">
            <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/brain8.png?raw=true" style="width: 8vw">
        </div>
    </div>
@endsection