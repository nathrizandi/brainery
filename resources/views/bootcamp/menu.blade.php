@extends('/template/layout')

@section('title', 'Bootcamp Menu')

@section('custom-csspage', 'css/bootcamp-menu.css')

@section('content')
    {{-- Boxes --}}
    <section class="boxes">
        <div class="container">
            <div class="row">
                <div class="header">
                    <h1 class="text-orange">Our Bootcamp</h1>
                    <h2>Take a look at our available bootcamp</h2>
                </div>
                <div class="col-md mt-3">
                    <div class="card shadow-sm mb-3">
                        <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/courseBanner/course.jpg?raw=true" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h class="card-title">Digital Business Training</h>
                          <div class="description">
                            <img src="assets/logobinus.png" alt="">
                            <p class="card-text"><small class="text-body-secondary">Bina Nusantara</small></p>
                        </div>
                        </div>
                      </div>
                      <div class="card shadow-sm mb-3">
                          <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/courseBanner/course.jpg?raw=true" class="card-img-top" alt="...">
                          <div class="card-body">
                              <h5 class="card-title">Digital Business Training</h5>
                              <div class="description">
                                <img src="assets/logobinus.png" alt="">
                                <p class="card-text"><small class="text-body-secondary">Bina Nusantara</small></p>
                            </div>
                            </div>
                        </div>
                        <a href="" class="btn btn-warning">Read More</a>
                </div>
                <div class="col-md">
                    <div class="card mb-3">
                        <img src="/assets/computer-science.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Digital Business Training</h5>
                          <div class="description">
                            <img src="assets/logobinus.png" alt="">
                            <p class="card-text"><small class="text-body-secondary">Bina Nusantara</small></p>
                        </div>
                        </div>
                      </div>
                    <div class="card mb-3">
                        <img src="/assets/public-speaking.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Digital Business Training</h5>
                          <div class="description">
                            <img src="assets/logobinus.png" alt="">
                            <p class="card-text"><small class="text-body-secondary">Bina Nusantara</small></p>
                        </div>
                        </div>
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="header">
                    <h1>
                        Popular Bootcamp
                    </h1>
                    <h5>
                        Take a look at our available bootcamp
                    </h5>
                </div>
                <div class="col-md">
                    <div class="card mb-3">
                        <img src="/assets/Digital business.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Digital Business Training</h5>
                          <div class="description">
                            <img src="assets/logobinus.png" alt="">
                            <p class="card-text"><small class="text-body-secondary">Bina Nusantara</small></p>
                          </div>
                        </div>
                      </div>
                      <div class="card mb-3">
                          <img src="/assets/Binusian Card.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                              <h5 class="card-title">Digital Business Training</h5>
                              <div class="description">
                                <img src="assets/logobinus.png" alt="">
                                <p class="card-text"><small class="text-body-secondary">Bina Nusantara</small></p>
                            </div>
                            </div>
                        </div>
                        <a href="" class="btn btn-warning">Read More</a>
                </div>
                <div class="col-md">
                    <div class="card mb-3">
                        <img src="/assets/computer-science.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Digital Business Training</h5>
                          <div class="description">
                            <img src="assets/logobinus.png" alt="">
                            <p class="card-text"><small class="text-body-secondary">Bina Nusantara</small></p>
                        </div>
                        </div>
                      </div>
                    <div class="card mb-3">
                        <img src="/assets/public-speaking.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Digital Business Training</h5>
                          <div class="description">
                            <img src="assets/logobinus.png" alt="">
                            <p class="card-text"><small class="text-body-secondary">Bina Nusantara</small></p>
                        </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
@endsection