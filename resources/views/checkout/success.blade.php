@extends('/template/layout')

@section('title', 'Checkout Success')

@section('content')
    <div class="row justify-content-center">
        <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/brain6.png?raw=truee" style="width: 25vw">
    </div>
    <div class="row justify-content-center text-center">
        <h1 class="text-orange">Payment Successful</h1>
        <h3 style="font-weight: 550; margin-top: 1%">Hooray! You have completed your payment. Let's explore all the courses
            and enhance your knowledge and skills.</h3>
    </div>

    <div class="row justify-content-center text-center mt-4">
        <a href="#" type="button" class="btn"
            style="width: 25%; height: 15%; font-weight: bold; background-color: #F76D3B; color: white">View Course List</a>
    </div>

@endsection
