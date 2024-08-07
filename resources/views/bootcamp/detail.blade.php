@extends('/template/layout')

@section('title', 'Bootcamp Detail')

@section('custom-csspage', '/css/bootcamp-detail.css')

@section('content')
<div class="row">
    <div class="header mb-3">
        <div class="title">
            <h1 class="text-orange">{{$bootcampDetail->bootTitle}}</h1>
        </div>
        <div class="subtitle">
            <h2>By {{$bootcampDetail->pubName}}</h2>
        </div>
    </div>
        
    <div class="jumbotron mb-5">
        <img src="{{asset($bootcampDetail->bootImage)}}" style="width: 100%; border-radius: 10px">
    </div>
    <div class="about">
        <h3>About the Bootcamp</h3>
    </div>
    <div class="aboutDetail row">
        <div class="detailtext col-md-8">
            <p>
                {{$bootcampDetail->description}}
            </p>
            @if (Auth::check())
                <form action="{{ route('joinBootcamp', $bootcampDetail->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn mt-3" style="background-color: #F76D3B; color: white;">Join Bootcamp</button>
                </form>
            @else
                <a class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #F76D3B; color: white;" href="#" role="button">Join Bootcamp</a>
                {{-- <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn mt-3" style="background-color: #F76D3B; color: white;">Join Bootcamp</a> --}}
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Oops!!</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        You need to login first
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-dark" href="{{route('loginView')}}" role="button">Login</a>
                    </div>
                    </div>
                </div>
                </div>
                {{-- <a href="{{ route('loginView') }}" class="btn mt-3" style="background-color: #F76D3B; color: white;">Join Bootcamp</a> --}}
            @endif
        </div>
        <div class="detailcard col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h3 class="card-title">Detail</h3>
                    <p class="card-text">Date: {{$bootcampDetail->date}}</p>
                    <p class="card-text">Start Time: {{$formattedStartTime}}</p>
                    <p class="card-text">End Time: {{$formattedEndTime}}</p>
                </div>
            </div>
        </div>
        <div class="speakers mt-5">
            <h3>
                Speakers of this Bootcamp
            </h3>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="user">
                        <div class="user-image" style="text-align: center">
                            <img src="{{asset($bootcampDetail->spkImage)}}" class="rounded-circle" style="width: 10vw" alt="...">
                        </div>
                        <div class="text-center mt-3">
                            <p class="card-title" style="font-weight: bold">{{$bootcampDetail->spkName}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="recommended mt-5">
            <h3>Recommended Bootcamp</h3>
            <div class="row row-cols-1 row-cols-md-4 g-4">
                @foreach ($bootcampListDetail as $item)
                <div class="col">
                    <div class="card h-80">
                        <a href="{{route('bootcampDetail', $item->id)}}" style="text-decoration: none; color: inherit; display: block">
                        <img src="{{asset($item->bootImage)}}" class="card-img-top" alt="...">
                        <div class="card-body" style="display: flex; align-items: center; justify-content: space-between;">
                            <h3 class="card-title" style="margin: 0">{{$item->title}}</h3>
                            <div class="ms-auto">
                                <img src="{{asset($item->pubImage)}}" style="width: 3.5vw" class="me-2">
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                @endforeach
              </div>
              <a href="/bootcamp/list" class="btn mt-4" style="background-color: #F76D3B; color: white;">View More</a>
        </div>
    </div>
</div>
@endsection
