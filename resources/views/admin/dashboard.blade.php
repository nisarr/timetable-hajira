@extends('admin.layouts.master')
@section('content')

<body>

  <div class="clearfix"></div>
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->
      <div class="row mt-3">
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card border-info border-left-sm">
            <div class="card-body">
              <div class="media align-items-center">
                <div class="media-body text-left">
                  <h4 class="text-info mb-0">{{$total_teachers}}</h4>
                  <span>Total Teacher</span>
                </div>
                <div class="align-self-center w-circle-icon rounded-circle gradient-scooter">
                   <a href="{{url('/student_admission')}}"><i class="fa fa-user text-white"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card border-danger border-left-sm">
            <div class="card-body">
              <div class="media align-items-center">
                <div class="media-body text-left">
                  <h4 class="text-danger mb-0">{{$total_classes}}</h4>
                  <span>Total classes</span>
                </div>
                <div class="align-self-center w-circle-icon rounded-circle gradient-bloody">
                  <i class="fa fa-book text-white"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card border-success border-left-sm">
            <div class="card-body">
              <div class="media align-items-center">
                <div class="media-body text-left">
                  <h4 class="text-success mb-0">{{$total_courses}}</h4>
                  <span>Total Courses</span>
                </div>
                <div class="align-self-center w-circle-icon rounded-circle gradient-quepal">
                  <i class="fa fa-users text-white"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card border-warning border-left-sm">
            <div class="card-body">
              <div class="media align-items-center">
                <div class="media-body text-left">
                  <h4 class="text-warning mb-0">{{$total_departments}}</h4>
                  <span>Total Departments</span>
                </div>
                <div class="align-self-center w-circle-icon rounded-circle gradient-blooker">
                  <i class="fa fa-money text-white"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End Row-->



      <!-- second row end -->



      <!--End Dashboard Content-->
      <!--start overlay-->
      <div class="overlay toggle-menu"></div>
      <!--end overlay-->
    </div>
    <!-- End container-fluid-->

  </div>
</div>
  <!--End content-wrapper-->
  <!--Start Back To Top Button-->
  <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
  <!--End Back To Top Button-->

  @endsection