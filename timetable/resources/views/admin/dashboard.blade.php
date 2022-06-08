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
                              <h4 class="text-info mb-0">{{ $total_students }}</h4>
                              <span>Total Students</span>
                           </div>
                           <div class="align-self-center w-circle-icon rounded-circle gradient-scooter">
                              <a href="{{ url('/students') }}"><i class="fa fa-users text-white"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-lg-6 col-xl-3">
                  <div class="card border-info border-left-sm">
                     <div class="card-body">
                        <div class="media align-items-center">
                           <div class="media-body text-left">
                              <h4 class="text-info mb-0">{{ $total_teachers }}</h4>
                              <span>Total Teacher</span>
                           </div>
                           <div class="align-self-center w-circle-icon rounded-circle gradient-scooter">
                              <a href="{{ url('/teachers') }}"><i class="fa fa-user text-white"></i></a>
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
               <div class="col-12 col-lg-6 col-xl-3">
                  <div class="card border-warning border-left-sm">
                     <div class="card-body">
                        <div class="media align-items-center">
                           <div class="media-body text-left">
                              <h4 class="text-warning mb-0">{{ $total_departments }}</h4>
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

            <div class="card radius-10">
               <div class="card-body">
                  <div class="d-flex align-items-center">
                     <div>
                        <h6 class="mb-3">Recent Students</h6>
                     </div>
                     
                  </div>
                  <div class="table-responsive">
                     <table class="table align-middle mb-0">
                        <thead class="table-light">
                           <tr>
                             <th>#</th>
                              <th>Student Name</th>
                              <th>Class</th>
                              <th>Email</th>
                              <th>Date</th>
                             
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($students as $index => $student)
                           <tr>
                             <td>{{ $index+1 }}</td>
                             <td>{{ $student->name }}</td>
                             <td>{{ $student->class ? $student->class->name : '' }}</td>
                             <td>{{ $student->email }}</td>
                             <td>{{ $student->created_at }}</td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
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
