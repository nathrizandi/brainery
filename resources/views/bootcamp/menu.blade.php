@extends('/template/layout')

@section('title', 'Bootcamp Menu')

@section('custom-csspage', '/css/bootcamp-menu.css')

@section('content')
    {{-- Boxes --}}
    <section class="boxes">
        <div class="container">
            <div class="row">
                <div class="header">
                    <h1 class="text-orange">Our Bootcamp</h1>
                    <h2>Take a look at our available bootcamp</h2>
                </div>
                <div class="row row-cols-1 row-cols-md-2">
                    @foreach ($bootcampMenu as $item)   
                    <div class="col-md">
                        <a href="/bootcamp/detail" style="text-decoration: none; color: inherit; display: block">
                        <div class="card shadow-sm mb-3">
                            <img src="{{asset($item->bootImage)}}" class="card-img-top" alt="...">
                            <div class="card-body d-flex align-items-center">
                                <h3 class="card-title">{{$item->title}}</h3>
                                <div class="ms-auto">
                                    <img src="{{asset($item->pubImage)}}" style="width: 3.5vw" class="me-2">
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    @endforeach
                  </div>
            </div>
            <a href="/bootcamp/list" class="btn" style="background-color: #F76D3B; color: white">View More</a>
            
            <div class="row mt-5">
                <div class="header">
                    <h1 class="text-orange">Popular Bootcamp</h1>
                    <h3>Take a look at our available bootcamp</h3>
                </div>
                <div class="row row-cols-1 row-cols-md-2">
                    @foreach ($bootcampMenu as $item)   
                    <div class="col-md">
                        <a href="/bootcamp/detail" style="text-decoration: none; color: inherit; display: block">
                        <div class="card shadow-sm mb-3">
                            <img src="{{asset($item->bootImage)}}" class="card-img-top" alt="...">
                            <div class="card-body d-flex align-items-center">
                                <h3 class="card-title">{{$item->title}}</h3>
                                <div class="ms-auto">
                                    <img src="{{asset($item->pubImage)}}" style="width: 3.5vw" class="me-2">
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    @endforeach
                  </div>
                
        </div>
    </section>
@endsection