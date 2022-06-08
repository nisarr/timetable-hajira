@extends('frontend.layouts.app')
@section('content')

<!-- SLIDER -->
<section>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item slider1 active">
                <img style="height: 570px;" src="{{ asset ('frontend-theme/images/slider/slider4.jpg')}}" alt="">
                <div class="carousel-caption slider-con" style="color: green;">
                    <h2>Welcome to <span>UIIT</span> </h2>
                    <p><b>Education is the most powerful weapon we can use to change the world.</b></p>
                    <!-- <a href="#" class="bann-btn-1">All Courses</a><a href="#" class="bann-btn-2">Read More</a> -->
                </div>
            </div>
            <div class="item">
                <img src="{{ asset ('frontend-theme/images/slider/2.jpg')}}" alt="">
                <div class="carousel-caption slider-con">
                    <h2>Admission open <span>2022</span></h2>
                    <p>Education is the most powerful weapon we can use to change the world.</p>
                    <!-- <a href="#" class="bann-btn-1">Admission</a><a href="#" class="bann-btn-2">Read More</a> -->
                </div>
            </div>
            <div class="item">
                <img src="{{ asset ('frontend-theme/images/slider/3.jpg')}}" alt="">
                <div class="carousel-caption slider-con">
                    <h2>Uiversity Institute of <span>Information Technology</span></h2>
                    <p>Education is the most powerful weapon we can use to change the world.</p>
                    <!-- <a href="#" class="bann-btn-1">All Courses</a><a href="#" class="bann-btn-2">Read More</a> -->
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <i class="fa fa-chevron-left slider-arr"></i>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <i class="fa fa-chevron-right slider-arr"></i>
        </a>
    </div>
</section>

<!-- QUICK LINKS -->


<!-- DISCOVER MORE -->
<section>
    <div class="container com-sp pad-bot-70">
        <div class="row">
            <div class="con-title">
                <h2>Discover <span>More</span></h2>
                <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
            </div>
        </div>
        <div class="row">
            <div class="ed-course">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="ed-course-in">
                        <a class="course-overlay" href="about.html">
                            <img src="{{ asset ('frontend-theme/images/h-about.jpg')}}" alt="">
                            <span>Academics</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="ed-course-in">
                        <a class="course-overlay" href="admission.html">
                            <img src="{{ asset ('frontend-theme/images/h-adm1.jpg')}}" alt="">
                            <span>Admission</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="ed-course-in">
                        <a class="course-overlay" href="dashboard.html">
                            <img src="{{ asset ('frontend-theme/images/h-cam.jpg')}}" alt="">
                            <span>Students profile</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="ed-course-in">
                        <a class="course-overlay" href="research.html">
                            <img src="{{ asset ('frontend-theme/images/h-res.jpg')}}" alt="">
                            <span>Research & Education</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="ed-course-in">
                        <a class="course-overlay" href="all-courses.html">
                            <img src="{{ asset ('frontend-theme/images/h-about1.jpg')}}" alt="">
                            <span>Couse</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="ed-course-in">
                        <a class="course-overlay" href="db-time-line.html">
                            <img src="{{ asset ('frontend-theme/images/h-adm.jpg')}}" alt="">
                            <span>Exam Time Line</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="ed-course-in">
                        <a class="course-overlay" href="seminar.html">
                            <img src="{{ asset ('frontend-theme/images/h-cam1.jpg')}}" alt="">
                            <span>Seminar 2018</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="ed-course-in">
                        <a class="course-overlay" href="events.html">
                            <img src="{{ asset ('frontend-theme/images/h-res1.jpg')}}   " alt="">
                            <span>Research & Education</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection