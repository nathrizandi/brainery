@extends('/template/layout')

@section('title', 'View Bootcamp')

@section('content')
    <h1 class="text-orange">Bootcamp List</h1>
    <h3>All free bootcamps you can register to</h3>

    <div class="row">
        @for ($i = 0; $i < 12; $i++)  
            <div class="col-4 mt-2">
                <a href="/bootcamp/detail" style="text-decoration: none; color: inherit; display: block">
                    <div class="card shadow-sm mb-3">
                        <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/courseBanner/course.jpg?raw=true" class="card-img-top" alt="...">
                        <div class="card-body d-flex align-items-center">
                            <h3 class="card-title">Digital Business Training</h3>
                            <div class="ms-auto">
                                <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/logo/sunib.png?raw=true" style="width: 3.5vw" class="me-2">
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endfor
    </div>
@endsection