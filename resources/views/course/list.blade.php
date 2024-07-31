@extends('/template/layout')

@section('title', 'View Course')

@section('content')
    <h1 class="text-orange">Course List</h1>
    <h3>Enhance your skills and abilities with new knowledge through the following courses</h3>

    <div class="row mt-5">
        @foreach ($courseList as $item)
            <div class="col-3 mt-2">
                <a href="{{ route('courseView', $item->id) }}"
                    style="text-decoration: none; color: inherit; display: block">
                    <div class="card shadow-sm mb-3" style="height: 45vh">
                        <img src="{{ asset($item->courseImage) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">{{ $item->title }}</h3>
                            <p class="card-writer">by: {{ $item->nama }}</p>
                            <p class="card-description">{{ $item->description }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
