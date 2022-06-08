
@extends('frontend.layouts2.app')
@section('content')

    <!-- SLIDER -->
    <section>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slider1 active">
                    <img src="{{ asset ('frontend-theme/images/slider/slider4.jpg')}}" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Welcome to <span>UIIT</span></h2>
                        <p><b>Education is the most powerful weapon we can use to change the world.</b></p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset ('frontend-theme/images/slider/2.jpg')}}" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Admission open <span>2022</span></h2>
                        <p><b>Education is the most powerful weapon we can use to change the world.</b></p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset ('frontend-theme/images/slider/3.jpg')}}" alt="">
                    <div class="carousel-caption slider-con">
                    <h2>Uiversity Institute of <span>Information Technology</span></h2>
                        <p><b>Education is the most powerful weapon we can use to change the world.</b></p>
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
    <section>
        <div class="container">
            <div class="row">
                <div class="wed-hom-ser">
                   
                </div>
            </div>
        </div>
    </section>

    <!-- DISCOVER MORE -->
    <section>
         <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>Our <span>Faculty</span></h2>
                     <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p> 
                </div>
            </div>
            <div class="row">
                <div class="ed-course">
                    <?php
                    use App\Models\Teacher;
                    $teachers = Teacher::all();
                    ?>
                    @foreach($teachers as $teacher)
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#">
                                <img style="width: 200px; height:170px;" src="{{asset('/teacher/profile/'.$teacher->image)}}" alt="">
                                <span>{{$teacher->teacher_name}}</span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                   
                 
                </div>
            </div>
        </div>
    </section> 
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
                        <a class="course-overlay" href="">
                            <img src="{{ asset ('frontend-theme/images/h-about.jpg')}}" alt="">
                            <span>Academics</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="ed-course-in">
                        <a class="course-overlay" href="">
                            <img src="{{ asset ('frontend-theme/images/h-adm1.jpg')}}" alt="">
                            <span>Admission</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="ed-course-in">
                        <a class="course-overlay" href="#">
                            <img src="{{ asset ('frontend-theme/images/h-cam.jpg')}}" alt="">
                            <span>Students profile</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="ed-course-in">
                        <a class="course-overlay" href="#">
                            <img src="{{ asset ('frontend-theme/images/h-res.jpg')}}" alt="">
                            <span>Research & Education</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="ed-course-in">
                        <a class="course-overlay" href="#">
                            <img src="{{ asset ('frontend-theme/images/h-about1.jpg')}}" alt="">
                            <span>Course</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="ed-course-in">
                        <a class="course-overlay" href="#">
                            <img src="{{ asset ('frontend-theme/images/h-adm.jpg')}}" alt="">
                            <span>Exam Time Line</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="ed-course-in">
                        <a class="course-overlay" href="#">
                            <img src="{{ asset ('frontend-theme/images/h-cam1.jpg')}}" alt="">
                            <span>Seminar 2022</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="ed-course-in">
                        <a class="course-overlay" href="">
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