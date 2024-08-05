@extends('/template/layout')

@section('title', 'Course')

@section('custom-csspage', '/css/course-view.css')

@section('content')
@foreach ($courseView as $item)
    <div class="course-view-top" style="border-radius: 8px">
        <div class="row p-5">
            <div class="col ">
                <h1 class="course-view-title">{{$item->title}}</h1>
                <div class="col course-view-image mt-3 mb-3">
                    <img src="{{asset($item->courseImage)}}" alt="" srcset="">
                </div>
                <div class="row justify-content-between">
                    <div class="col-3">
                        <h3 class="course-view-writers mb-3" style="opacity: 70%">by : {{$item->nama}}</h3>
                    </div>
                    <div class="col-6 ratings">
                        <p>{{ $item->rating }}<i class="fa fa-star rating-color"></i></p>
                    </div>
                </div>
                <p class="course-view-decs mb-4" style="width: 1000px; text-align: justify">
                    {{$item->description}}
                </p>
                @if (Auth::check())
                    @if (Auth::user()->membership_type == 'free')
                        <a class="btn btn-dark" href="{{route('subs')}}" role="button">Start Enroll</a>
                    @else
                        <form action="{{ route('joinCourse', ['id' => $item->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-dark" role="button">Start Enroll</button>
                        </form>
                    @endif
                @else
                    <a class="btn btn-dark" href="{{route('loginView')}}" role="button">Start Enroll</a>
                @endif
            </div>
        </div>
    </div>

    <div class="course-view-benefit p-5">
        <div class="row">
            <h3 class="gap-3" style="font-weight: bold">What you'll learn</h3>
            @for ($i = 0; $i < 6; $i++)
                <div class="col-3 d-flex gap-3 pb-5">
                    <p class="benefit-list">
                    <div class=""><i class="fa fa-check"></i></div>
                    <div class="">{{$item->description}}
                    </div>
                </p>
                </div>
            @endfor
        </div>
        <div class="row">
            <div class="col">
                <h3 class="gap-3 mb-3" style="font-weight: bold">Skills you'll gain</h3>
                <button type="button" class="btn btn-outline-dark">{{$item->catName}}</button>
            </div>
        </div>
    </div>
@endforeach
@endsection
