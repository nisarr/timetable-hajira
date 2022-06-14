@extends('admin.layouts.master')
@section('content')

   <body>

      <div class="clearfix"></div>
      <div class="content-wrapper">
         <div class="container-fluid">

            <div class="row mt-3">
                
            
                <div class="col-12 col-lg-6 col-xl-3">
                   <div class="card border-danger border-left-sm">
                      <div class="card-body">
                         <div class="media align-items-center">
                            <div class="media-body text-left">
                               <h4 class="text-danger mb-0">{{ $total_classes }}</h4>
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
                               <h4 class="text-success mb-0">{{ $total_courses }}</h4>
                               <span>Total Courses</span>
                            </div>
                            <div class="align-self-center w-circle-icon rounded-circle gradient-quepal">
                               <i class="fa fa-users text-white"></i>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                
             </div>
             <!--End Row-->

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Number of Schedule by Days
                        </div>
                         
                         
                        <ul class="list-group list-group-flush">
                            @foreach($week_days_all as $day => $count)
                                 
                                <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center"> {{ $day }} <span class="badge bg-danger rounded-pill text-white">{{  $count }}</span>
                                </li>

                            @endforeach
                            {{-- <li class="list-group-item">{{ $day }}</li>
                            
                                <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Jeans <span class="badge bg-success rounded-pill">25</span>
                                </li>
                                <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">T-Shirts <span class="badge bg-danger rounded-pill">10</span>
                                </li>
                                <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Shoes <span class="badge bg-primary rounded-pill">65</span>
                                </li>
                                <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Lingerie <span class="badge bg-warning text-dark rounded-pill">14</span>
                                </li> --}}
                            
                        </ul>
                    </div>
                </div>
            </div>
            
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
