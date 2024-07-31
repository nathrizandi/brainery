@extends('/template/layout')

@section('title', 'View Bootcamp')

@section('content')
    <h1 class="text-orange">Bootcamp List</h1>
    <h3>All free bootcamps you can register to</h3>

    <div class="row mt-4">
        @foreach ($bootcampList as $item)
                <div class="col-4 mt-2">
                    <a href="{{route('bootcampDetail', $item->id)}}" style="text-decoration: none; color: inherit; display: block">
                        <div class="card shadow-sm mb-3" >
                            <img src="{{ asset($item->bootImage) }}" class="card-img-top" alt="...">
                            <div class="card-body d-flex align-items-center">
                                <h3 class="card-title">{{ $item->title }}</h3>
                                <div class="ms-auto">
                                    <img src="{{ asset($item->pubImage) }}" style="width: 3.5vw" class="me-2">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
        @endforeach
    </div>
@endsection