@extends('/template/layout')

@section('title', 'Certificate')

@section('custom-csspage', '/css/certificate.css')

@section('content')
<div class="container">
<div class="row">
    <div class="col">

        <div class="container profile-header d-flex justify-content-between align-items-center pb-5">
            <div class="profile-info d-flex align-items-center">
                <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/icon/user.png?raw=true" alt="Profile Picture">
                <div>
                    <h2>Welcome, jmk39</h2>
                </div>
            </div>
            <div class="achievements-info d-flex flex-row">
                <div class='d-flex flex-row align-items-center pr-4'>
                    <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/icon/certificate-orange.png?raw=true" alt="Certificate Icon"
                        id='certificate-icon'>
                    <h6>4 Certificate Earned</h6>
                </div>
                <div class="vr" style="margin-left: 10px; margin-right:10px"></div>
                <div class='d-flex flex-row align-items-center pl-4'>
                    <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/icon/course-orange.png?raw=true" alt="Course Icon"
                        id='course-icon'>
                    <h6>4 Course Completed</h6>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="achievement-card">
                    <div class="achievement-content">
                        <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/icon/field.png?raw=true" class="achievement-icon" alt="Achievement Icon" style="width: 8vw">
                        <div class="achievement-content-content">
                            <h3>Achievement</h3>
                            <h2 class="text-primary-orange">Backend Developer</h2>
                            <div class="d-flex flex-col">
                                <img src="{{ asset('assets/image/Certificate-Learning-Method.png') }}"
                                    alt="" id="small-image">
                                <p>Self-paced</p>
                            </div>
                            <div class="d-flex flex-col">
                                <img src="{{ asset('assets/image/Certificate-Book-Course.png') }}"
                                    alt="" id="small-image">
                                <p>Introduction to Backend</p>
                            </div>
                            <div class="d-flex flex-col">
                                <img src="{{ asset('assets/image/Certificate-Date.png') }}" alt=""
                                    id="small-image">
                                <p>Date Received: 10 November 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="achievement-card">
                    <div class="achievement-content">
                        <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/icon/field.png?raw=true"
                            class="achievement-icon" alt="Achievement Icon" style="width: 8vw">
                        <div class="achievement-content-content">
                            <h3>Achievement</h3>
                            <h2 class="text-primary-orange">Backend Developer</h2>
                            <div class="d-flex flex-col">
                                <img src="{{ asset('assets/image/Certificate-Learning-Method.png') }}"
                                    alt="" id="small-image">
                                <p>Self-paced</p>
                            </div>
                            <div class="d-flex flex-col">
                                <img src="{{ asset('assets/image/Certificate-Book-Course.png') }}"
                                    alt="" id="small-image">
                                <p>Introduction to Backend</p>
                            </div>
                            <div class="d-flex flex-col">
                                <img src="{{ asset('assets/image/Certificate-Date.png') }}" alt=""
                                    id="small-image">
                                <p>Date Received: 10 November 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="achievement-card">
                    <div class="achievement-content">
                        <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/icon/field.png?raw=true"
                            class="achievement-icon" alt="Achievement Icon" style="width: 8vw">
                        <div class="achievement-content-content">
                            <h3>Achievement</h5>
                            <h2 class="text-primary-orange">Backend Developer</h2>
                            <div class="d-flex flex-col">
                                <img src="{{ asset('assets/image/Certificate-Learning-Method.png') }}"
                                    alt="" id="small-image">
                                <p>Self-paced</p>
                            </div>
                            <div class="d-flex flex-col">
                                <img src="{{ asset('assets/image/Certificate-Book-Course.png') }}"
                                    alt="" id="small-image">
                                <p>Introduction to Backend</p>
                            </div>
                            <div class="d-flex flex-col">
                                <img src="{{ asset('assets/image/Certificate-Date.png') }}" alt=""
                                    id="small-image">
                                <p>Date Received: 10 November 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="achievement-card">
                    <div class="achievement-content">
                        <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/icon/field.png?raw=true"
                            class="achievement-icon" alt="Achievement Icon" style="width: 8vw">
                        <div class="achievement-content-content">
                            <h3>Achievement</h3>
                            <h2 class="text-primary-orange">Backend Developer</h2>
                            <div class="d-flex flex-col">
                                <img src="{{ asset('assets/image/Certificate-Learning-Method.png') }}"
                                    alt="" id="small-image">
                                <p>Self-paced</p>
                            </div>
                            <div class="d-flex flex-col">
                                <img src="{{ asset('assets/image/Certificate-Book-Course.png') }}"
                                    alt="" id="small-image">
                                <p>Introduction to Backend</p>
                            </div>
                            <div class="d-flex flex-col">
                                <img src="{{ asset('assets/image/Certificate-Date.png') }}" alt=""
                                    id="small-image">
                                <p>Date Received: 10 November 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection