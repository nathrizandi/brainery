@extends('/template/layout')

@section('title', 'Bootcamp Detail')

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
                @for ($i=0; $i<3; $i++) 
                    <div class="col">
                      <div class="user">
                        <div class="user-image" style="text-align: center">
                            <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/speaker.jpg?raw=true" class="rounded-circle" style="width: 10vw" alt="...">
                        </div>
                          <div class="text-center mt-3">
                            <p class="card-title" style="font-weight: bold">Dr. Felix Gustino Tjuatja</p>
                          </div>
                      </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="recommended mt-5">
            <h3>Recommended Bootcamp</h3>
            <div class="row row-cols-1 row-cols-md-4 g-4">
                @for ($i=0; $i<4; $i++) 
                    <div class="col">
                      <div class="card h-80">
                        <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/courseBanner/course2.jpg?raw=true" class="card-img-top" alt="...">
                        <div class="card-body" style="display: flex; align-items: center; justify-content: space-between;">
                            <h3 class="card-title" style="margin: 0">Digital Business Training</h3>
                            <div class="ms-auto">
                                <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/logo/sunib.png?raw=true" style="width: 3.5vw" class="me-2">
                            </div>
                        </div>
                      </div>
                    </div>
                @endfor
              </div>
              <a href="/bootcamp/list" class="btn mt-4" style="background-color: #F76D3B; color: white;">View More</a>
        </div>
    </div>
</div>
@endsection