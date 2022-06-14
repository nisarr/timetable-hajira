@extends('admin.layouts.master')
@section('content')

   <body>

      <div class="clearfix"></div>
      <div class="content-wrapper">
         <div class="container-fluid">

            <!--Start Dashboard Content-->
            <div class="row mt-3">
              
               
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
