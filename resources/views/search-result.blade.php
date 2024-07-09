@extends('/template/layout')

@section('title', 'Search Result')

@section('content')
    <div class="row">
        <h1 class="text-orange">Nama Yang Dicari</h1>
        <h3>Showing items for 'nama yang dicari'</h3>
    </div>
    <div class="row mt-4">
        @for ($i = 0; $i < 12; $i++)    
                <div class="col-3 mt-3">
                    <a href="#" style="text-decoration: none; color: inherit; display: block">
                        <div class="card shadow-sm" style="width: 18vw; border-radius: 20px">
                            <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/courseBanner/course2.jpg?raw=true" class="card-img-top mt-2 align-self-center" style="width: 95%; height: auto; border-radius: 8px;">
                            <div class="card-body">
                                <h3>Nama Course</h3>
                                <b><p>By: Nama Tutor</p></b>
                                <p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
                            </div>
                        </div>
                    </a>
                </div>
            @endfor
    </div>
@endsection