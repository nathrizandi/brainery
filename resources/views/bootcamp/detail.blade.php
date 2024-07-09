@extends('/template/layout')

@section('title', 'Bootcamp Menu')

@section('custom-csspage', 'css/bootcamp-detail.css')

@section('content')
<div class="row">
    <div class="header mb-3">
        <div class="title">
            <h1 class="text-orange">Photography 101 with Bina Nusantara university</h1>
        </div>
        <div class="subtitle">
            <h2>by Bina Nusantara</h2>
        </div>
    </div>
    <div class="jumbotron mb-5">
        <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/courseBanner/course.jpg?raw=true" style="width: 100%; border-radius: 10px">
    </div>
    <div class="about">
        <h3>About the Bootcamp</h3>
    </div>
    <div class="aboutDetail row">
        <div class="detailtext col-md-8">
            <p>
                In this online degree program, you'll have the unique opportunity to develop an end-to-end perspective on data science and prepare for leadership in the field. As a MADS student, you’ll master core concepts and delve into essential topics such as big data, data ethics, data privacy, machine learning, natural language processing, network analysis, and more. By working with real data sets from top companies, you’ll put learning into practice, build your portfolio, and be ready to advance a successful data science career in any industry.
            </p>
            <a href="#" class="btn mt-3" style="background-color: #F76D3B; color: white;">Join Bootcamp</a>
        </div>
        <div class="detailcard col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h3 class="card-title">Detail</h3>
                  <p class="card-text">Date: </p>
                  <p class="card-text">Start Time: </p>
                  <p class="card-text">End Time: </p>
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
                        <img src="" class="rounded-circle" style="width: 18.75rem" alt="...">
                    </div>
                      <div class="text-center">
                        <h5 class="card-title">Dr. Felix Gustino Tjuatja</h5>
                      </div>
                  </div>
                </div>
                <div class="col">
                    <div class="user">
                      <div class="user-image" style="text-align: center">
                          <img src="/assets/felix.jpg" class="rounded-circle" style="width: 18.75rem" alt="...">
                      </div>
                        <div class="text-center">
                          <h5 class="card-title">Dr. Felix Gustino Tjuatja</h5>
                        </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="user">
                      <div class="user-image" style="text-align: center">
                          <img src="/assets/felix.jpg" class="rounded-circle" style="width: 18.75rem" alt="...">
                      </div>
                        <div class="text-center">
                          <h5 class="card-title">Dr. Felix Gustino Tjuatja</h5>
                        </div>
                    </div>
                  </div>
              </div>
        </div>
        <div class="recommended">
            <h3>
                Recommended Bootcamp
            </h3>
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                  <div class="card h-80">
                    <img src="/assets/public-speaking.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Digital Business Training</h4>
                        <h6 class="card-date">26th/May/2024</h6>
                        <div class="description">
                            <img src="assets/logobinus.png" alt="">
                            <p class="card-text"><small class="text-body-secondary">Bina Nusantara</small></p>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                    <div class="card h-80">
                        <img src="/assets/public-speaking.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Digital Business Training</h4>
                            <h6 class="card-date">26th/May/2024</h6>
                            <div class="description">
                                <img src="assets/logobinus.png" alt="">
                                <p class="card-text"><small class="text-body-secondary">Bina Nusantara</small></p>
                            </div>
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="card h-80">
                        <img src="/assets/public-speaking.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Digital Business Training</h4>
                            <h6 class="card-date">26th/May/2024</h6>
                            <div class="description">
                                <img src="assets/logobinus.png" alt="">
                                <p class="card-text"><small class="text-body-secondary">Bina Nusantara</small></p>
                            </div>
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="card h-80">
                        <img src="/assets/public-speaking.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Digital Business Training</h4>
                            <h6 class="card-date">26th/May/2024</h6>
                            <div class="description">
                                <img src="assets/logobinus.png" alt="">
                                <p class="card-text"><small class="text-body-secondary">Bina Nusantara</small></p>
                            </div>
                        </div>
                      </div>
                </div>
              </div>
              <a href="" class="btn btn-warning">Read More</a>
        </div>
    </div>
</div>
@endsection