@extends('/template/layout')

@section('title', 'Course')

@section('custom-csspage', '/css/course-media.css')

@section('content')
    <div class="row">
        <a href="/course/detail" style="text-decoration: none; color: inherit; display: block">
            <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/icon/back.png?raw=true" style="width: 3.5vw">
        </a>
    </div>
    <div class="video-container mt-2" style="margin-left: 2%">
        <div class="row">
            <iframe width="1691" height="622" src="https://www.youtube.com/embed/R9PTBwOzceo?list=PLBlnK6fEyqRj9lld8sWIUNwlKfdUoPd1Y" title="Introduction to Linked List" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
    <div class="row mt-5" style="margin-left: 2%">
        <div class="col-10">
            <h1 class="text-orange">Title</h1>
            <p>description fdkgklgklgmkldgmdkdgmggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg</p>
        </div>
        <div class="col-2">
            <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/brain8.png?raw=true" style="width: 8vw">
        </div>
    </div>
@endsection