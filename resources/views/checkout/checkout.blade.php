@extends('/template/layout')

@section('title', 'Checkout Subscription')

@section('custom-csspage', '/css/checkout.css')

@section('content')
    <h1 class="text-orange">Subscription Payment</h1>

    <div class="row mt-5">
        <div class="col-12" style="background-color: white; border-radius: 7px; height: 22vh">
            <div class="container row mt-3">
                <h2>Your Preferred Plan</h2>
            </div>
            <div class="container row mt-3">
                <div class="col-2">
                    <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/brain10.png?raw=true" alt="" style="width: 8vw">
                </div>
                <div class="col-8">
                    <br>
                    <h3>3 Month Subscription</h3>
                    <p>Free Access to All Learning Content</p>
                </div>
                <div class="col-2">
                    <br>
                    <h3>Rp xxx.xxx</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12" style="background-color: white; border-radius: 7px; height: 35vh">
            <div class="container row mt-3">
                <h2>Payment Method</h2>
            </div>

            <form action="">
                <div class="container mt-3">
                    <div class="form-check">
                        <div class="d-flex align-items-center">
                            <label class="form-check-label custom-form-check-label" for="flexRadioDefault1" style="margin-right: 75%">
                                <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/logo/sunib.png?raw=true" class="me-2">
                                <h3 class="custom-text">BCA Virtual Account</h3>
                            </label>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                        </div>
                    </div>
                    <div class="form-check mt-2">
                        <div class="d-flex align-items-center">
                            <label class="form-check-label custom-form-check-label" for="flexRadioDefault2" style="margin-right: 73.2%">
                                <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/logo/sunib.png?raw=true" class="me-2">
                                <h3 class="custom-text">Mandiri Virtual Account</h3>
                            </label>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        </div>
                    </div>
                    <div class="form-check mt-2">
                        <div class="d-flex align-items-center">
                            <label class="form-check-label custom-form-check-label" for="flexRadioDefault3" style="margin-right: 84.15%">
                                <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/logo/sunib.png?raw=true" class="me-2">
                                <h3 class="custom-text">OVO</h3>
                            </label>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                        </div>
                    </div>
                    <div class="form-check mt-2">
                        <div class="d-flex align-items-center">
                            <label class="form-check-label custom-form-check-label" for="flexRadioDefault3" style="margin-right: 83.10%">
                                <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/logo/sunib.png?raw=true" class="me-2">
                                <h3 class="custom-text">Gopay</h3>
                            </label>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row mt-3">
                <div class="col-10"></div>
                <div class="col-2">
                    <a type="submit" class="btn btn-outline btn-sm checkout-btn" style="margin-left: 3vw">Submit</a>
                </div>
            </div>
        </form>
    </div>
    
@endsection