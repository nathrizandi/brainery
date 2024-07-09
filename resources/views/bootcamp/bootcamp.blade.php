@extends('/template/layout')

@section('title', 'Bootcamp')

@section('content')
    <div class="row justify-content-center">
        <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/brain3-1.png?raw=true" style="width: 35vw">
    </div>
    <div class="row justify-content-center text-center mt-5">
        <h1 class="text-orange">Bootcamp</h1>
        <h3 style="font-weight: 550; margin-top: 1%">Enhance your knowledge and skills with our bootcamps delivered by corporate partners and professional experts</h3>
        <h3>For Free</h3>
    </div>

    <div class="row justify-content-center text-center mt-4">
        <a href="/bootcamp/menu" type="button" class="btn " style="width: 25%; height: 15%; font-weight: bold; background-color: #F76D3B; color: white">View Bootcamp List</a>
    </div>
@endsection