@extends('/template/layout')

@section('title', 'Subscription')

@section('custom-csspage', '/css/course-subs.css')

@section('content')
    <div class="row d-flex text-center">
        <h1 class="text-orange">Subscription</h1>
        <h3>Join now to access exclusive features offered by our subscription</h3>
    </div>

    <div class="subscription-wrapper d-flex justify-content-center pt-4">
        <div class="subsription-section">
            @foreach ($subs as $item)
                <form action="{{ route('checkout') }}" method='POST'>
                    @csrf
                    <div class="card text-center mb-3" style="">
                        <div class="card-body">
                            <h2 class="mt-4">CATEGORY</h3>
                                <h1 class="text-orange mt-3">Rp {{ $item->price / $item->duration * 16000}}</h1>
                                <p class="text-orange">/month</p>
                                <p class="card-price-notes">Pay Rp {{ $item->price * 16000}} per {{ $item->duration }} month(s)</p>
                                <img class="card-image mb-3"
                                    src="https://github.com/nathrizandi/brainery/blob/main/public/assets/brain10.png?raw=true">
                                <input hidden name='id' value={{ $item->id }}>
                                <button type="submit" class="btn">
                                    buy</button>
                        </div>
                    </div>
                </form>
            @endforeach
        </div>
    </div>

    <div class="footer-subs-wrapper d-flex justify-content-center">
        <div class="footer-subs container-fluid">
            <div class="row footer-subs-detail d-flex justify-content-center text-center gap-5">
                <div class="col-12">
                    <h2 class="unlock-text">UNLOCK YOUR POTENTIAL</h2>
                </div>
            </div>
            <div class="row footer-subs-detail d-flex justify-content-center text-center gap-5">
                <div class="col-2">
                    <h3> Comprehensive Access </h3>
                    <img src='https://github.com/nathrizandi/brainery/blob/main/public/assets/brain11.png?raw=true'
                        style="width: 10vw">
                    <p class="footer-subs-info">Gain full access to a diverse range of courses, including exclusive premium
                        content.</p>
                </div>
                <div class="col-2">
                    <h3> Networking Opportunities </h3>
                    <img class="mt-4"
                        src='https://github.com/nathrizandi/brainery/blob/main/public/assets/brain7.png?raw=true'
                        style="width: 12vw">
                    <p class="footer-subs-info" style="margin-top:19.5%">Be part of a vibrant community of learners who
                        share your interests and
                        goals.</p>
                </div>
                <div class="col-2">
                    <h3> Flexible Learning </h3>
                    <img class="mt-4"
                        src='https://github.com/nathrizandi/brainery/blob/main/public/assets/brain1.png?raw=true'
                        style="width: 8.5vw">
                    <p class="footer-subs-info" style="margin-top: 2%">Study at your own pace with the flexibility to
                        revisit course materials
                        anytime.</p>
                </div>
                <div class="col-2">
                    <h3> Regular Updates </h3>
                    <img class="mt-4"
                        src='https://github.com/nathrizandi/brainery/blob/main/public/assets/brain13.png?raw=true'
                        style="width: 8vw">
                    <p class="footer-subs-info" style="margin-top: 6.5%">Access to new courses and materials as they become
                        available.</p>
                </div>
            </div>
        </div>
    </div>

@endsection
