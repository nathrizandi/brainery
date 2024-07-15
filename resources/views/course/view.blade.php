@extends('/template/layout')

@section('title', 'Course')

@section('custom-csspage', '/css/course-view.css')

@section('content')
    <div class="course-view-top" style="border-radius: 8px">
        <div class="row p-5">
            <div class="col ">
                <h1 class="course-view-title">Foundations of User Experience (UX) Design</h1>
                <div class="col course-view-image mt-3 mb-3">
                    <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/courseBanner/course.jpg?raw=true" alt="" srcset="">
                </div>
                <div class="row justify-content-between">
                    <div class="col-3">
                        <h3 class="course-view-writers mb-3" style="opacity: 70%">by : Donald Davidson</h3>
                    </div>
                    <div class="col-6 ratings">
                        <p>4.8 <i class="fa fa-star rating-color"></i></p>
                    </div>
                </div>
                <p class="course-view-decs mb-4" style="width: 1000px; text-align: justify">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae molestias, esse beatae
                    vitae odit, ratione mollitia ducimus impedit, nam a illum est sequi odio magnam. Fugiat nihil
                    nam doloremque sequi. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat
                    cupiditate laborum nam sequi. Nisi dolorem impedit maxime a fuga praesentium autem, quisquam
                    reprehenderit, velit dolorum inventore cupiditate voluptatum possimus nemo.
                </p>

                <a class="btn btn-dark" href="/course/detail" role="button">Start Enroll</a>
            </div>

        </div>
    </div>

    <div class="course-view-benefit p-5">
        <div class="row">
            <h3 class="gap-3" style="font-weight: bold">What you'll learn</h3>
            @for ($i = 0; $i < 6; $i++)
                <div class="col-3 d-flex gap-3 pb-5">
                    <p class="benefit-list">
                    <div class=""><i class="fa fa-check"></i></div>
                    <div class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore sunt sit
                        maiores corporis earum deserunt deleniti consequuntur iusto dolores debitis dolor sapiente, et
                        ea labore animi voluptas. Est, autem minus!
                    </div>
                    </p>
                </div>
            @endfor

        </div>
        <div class="row">
            <div class="col">
                <h3 class="gap-3 mb-3" style="font-weight: bold">Skills you'll gain</h3>
                @for ($i = 0; $i < 4; $i++)
                    <button type="button" class="btn btn-outline-dark">Web programming</button>
                @endfor

            </div>
        </div>
    </div>

@endsection