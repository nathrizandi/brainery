@extends('/template/layout')

@section('title', 'Search Result')

@section('content')
    @if (isset($query))
        <div class="row">
            <h1 class="text-orange">{{ $query }}</h1>
            <h3>Showing items for '{{ $query }}'</h3>
        </div>
    @endif
    <div class="row mt-4">
        @foreach ($items as $item)
            <div class="col-3 mt-3">
                <a href="#" style="text-decoration: none; color: inherit; display: block">
                    <div class="card shadow-sm" style="width: 18vw; border-radius: 20px">
                        <img src={{ $item->images }}
                            class="card-img-top mt-2 align-self-center"
                            style="width: 95%; height: auto; border-radius: 8px;">
                        <div class="card-body">
                            <h3>{{ $item->title }}</h3>
                            <b>
                                <p>By: {{ $item->speaker }}</p>
                            </b>
                            <p>{{ $item->description }} </p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
