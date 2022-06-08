@extends('admin.layouts.master')
@section('content')

 

<!-- Start wrapper-->
 <div id="wrapper">
 
 

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Time Slots</h4>
		  
	   </div>
	   <div class="col-sm-3">
       <div class="btn-group float-sm-right">
       <a href="{{'timeshow'}}" class="btn btn-gradient-bloody waves-effect waves-light m-1"> <i aria-hidden="true" class="fa fa-eye"></i> View Time Schedule</a>
       <a href="{{'timeslots/create'}}" class="btn btn-gradient-bloody waves-effect waves-light m-1"> <i aria-hidden="true" class="fa fa-plus"></i> Add New</a>
      </div>
     </div>
     </div>
   



      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i>Time Slots</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Day</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Class</th>
                        <th>Teacher</th>
                        <th>Course</th>
                        <th>Room</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($times as $time)
                    <tr>
                        <td> {{$time->id}}</td>
                        <td>{{$time->day}}</td>
                        <td>{{$time->start_time}}</td>
                        <td>{{$time->end_time}}</td>
                        <td>{{$time->class ? $time->class->name : ''}}</td>
                        <td>{{$time->teacher ? $time->teacher->name : ''}}</td>
                        <td>{{$time->course ? $time->course->course_name : ''}}</td>
                        <td>{{$time->room ? $time->room->room_name : ''}}</td>
                        <td>
                        <form method="POST" action="{{url('/timeslots/'.$time->id)}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button style="padding:3px; width:56px" type="submit" data-toggle="confirmation" class="btn btn-danger m-1 btn-sm">
                        Delete</button>
                        <a class="btn btn-primary m-1 btn-sm" href="{{url('/timeslots/'.$time->id.'/edit')}}" style="padding:3px; width:56px">EDIT</a>
                        </form>
                        </td>
                        
                       
                    </tr>
                    @endforeach
                   
                </tbody>
             
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
<!--start overlay-->
	  <div class="overlay toggle-menu"></div>
	<!--end overlay-->
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   

  </div><!--End wrapper-->


@endsection