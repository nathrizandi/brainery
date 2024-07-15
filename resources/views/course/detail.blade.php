@extends('/template/layout')

@section('title', 'Course Detail')

@section('custom-csspage', '/css/course-detail.css')

@section('content')
<div class="container-fluid d-flex flex-column min-vh-100">
    <div class="row flex-grow-1">
        <div class="sidebar col-2 d-flex flex-column">
            <div class="sidebar-course">
                <span class="sidebar-title p-4">
                    <h2>The Title Of course</h2>
                </span>

                <div class="sidebar-item">
                    <div class="accordion" id="sidebar-accordion btn-sidebar-itm">
                        <h3 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Course Material
                            </button>
                        </h3>

                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body choose" data-content="week-1">
                                Week 1
                            </div>
                            <div class="accordion-body" data-content="week-2">
                                Week 2
                            </div>
                            <div class="accordion-body" data-content="week-3">
                                Week 3
                            </div>
                            <div class="accordion-body" data-content="week-4">
                                Week 4
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sidebar-item course-info" data-content="course-info" id="btn-sidebar-itm">
                    Course Info
                </div>
            </div>
        </div>

        <div class="content-area col">
            <div id="content-area" class="w-100 p-4">
                <div class="accordion" id="accordionExample">
                    <div class="course-week-content" data-content="week-1">
                        @for ($i = 1; $i <= 4; $i++)
                            <a href="/course/media" style="text-decoration: none; color: inherit; display: block">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{ $i }}">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{ $i }}" aria-expanded="false"
                                            aria-controls="collapse{{ $i }}">
                                            Week {{ $i }} Content
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $i }}" class="accordion-collapse collapse"
                                        aria-labelledby="heading{{ $i }}" data-bs-parent="#accordionExample">
                                        @for ($j = 1; $j <= 5; $j++)
                                            <div class="accordion-body">
                                                Week {{ $i }} - Sub title {{ $j }}
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                            </a>
                        @endfor
                    </div>

                    <div class="course-week-content" data-content="week-2">
                        <!-- Week 2 content here -->
                    </div>
                    <div class="course-week-content" data-content="week-3">
                        <!-- Week 3 content here -->
                    </div>
                    <div class="course-week-content" data-content="week-4">
                        <!-- Week 4 content here -->
                    </div>

                    <div class="notes-content" data-content="course-info">
                        <h1 class="text-center text-orange">Supervised Machine Learning: Regression and Classification</h1>
                        <div class="course-info-content pb-3 mt-5">
                            <p>
                            <h2>About this Course</h2>
                            In the first course of the Machine Learning Specialization, you will:
                            <ul>
                                <li>
                                    Build machine learning models in Python using popular machine learning libraries NumPy
                                    and scikit-learn.
                                </li>
                                <li>
                                    Build and train supervised machine learning models for prediction and binary
                                    classification tasks, including linear regression and logistic regression
                                </li>
                            </ul>

                            The Machine Learning Specialization is a foundational online program created in collaboration
                            between DeepLearning.AI and Stanford Online. In this beginner-friendly program, you will learn
                            the fundamentals of machine learning and how to use these techniques to build real-world AI
                            applications.

                            This Specialization is taught by Andrew Ng, an AI visionary who has led critical research at
                            Stanford University and groundbreaking work at Google Brain, Baidu, and Landing.AI to advance
                            the AI field.

                            This 3-course Specialization is an updated and expanded version of Andrew’s pioneering Machine
                            Learning course, rated 4.9 out of 5 and taken by over 4.8 million learners since it launched in
                            2012.

                            It provides a broad introduction to modern machine learning, including supervised learning
                            (multiple linear regression, logistic regression, neural networks, and decision trees),
                            unsupervised learning (clustering, dimensionality reduction, recommender systems), and some of
                            the best practices used in Silicon Valley for artificial intelligence and machine learning
                            innovation (evaluating and tuning models, taking a data-centric approach to improving
                            performance, and more.)

                            By the end of this Specialization, you will have mastered key concepts and gained the practical
                            know-how to quickly and powerfully apply machine learning to challenging real-world problems.
                            If you’re looking to break into AI or build a career in machine learning, the new Machine
                            Learning Specialization is the best place to start.
                            </p>
                        </div>
                    @for ($i = 0; $i < 3; $i++)
                            <hr>
                            <div class="course-info-writers p-3 d-flex gap-4">
                                <div class="">
                                    <img src="https://marketplace.canva.com/EAFqNrAJpQs/1/0/1600w/canva-neutral-pink-modern-circle-shape-linkedin-profile-picture-WAhofEY5L1U.jpg"
                                        alt="" style="border-radius: 50%; width:100px">
                                </div>
                                <div class="">
                                    <h3>Taught by:</h3>
                                    <p>Bapak Abraham Mempunyai Banyak sekali anak-anak</p>
                                    <h3>Company:</h3>
                                    <p>Di sini senang, di sana senang, dimana-mana hatiku senang</p>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.accordion-body, .course-info').forEach(item => {
        item.addEventListener('click', event => {
            // Remove 'choose' class from all items
            document.querySelectorAll('.accordion-body, .course-info').forEach(body => {
                body.classList.remove('choose');
            });

            // Add 'choose' class to the clicked item
            event.target.classList.add('choose');

            // Show the corresponding content
            const content = event.target.getAttribute('data-content');
            document.querySelectorAll('.course-week-content, .notes-content').forEach(contentItem => {
                if (contentItem.getAttribute('data-content') === content) {
                    contentItem.style.display = 'block';
                } else {
                    contentItem.style.display = 'none';
                }
            });
        });
    });

    // Initial setup to show the first week's content by default
    document.querySelector('.course-week-content[data-content="week-1"]').style.display = 'block';
    document.querySelector('.notes-content[data-content="course-info"]').style.display = 'none';
</script>
@endsection
