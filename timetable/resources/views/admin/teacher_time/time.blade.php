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
		    <h4 class="page-title">My Schedule</h4>
		    
	   </div>
	  
     </div>
   
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i>Schedule</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                  <?php  
                  $day_of_week = array
                  (
                      0 => 'Monday',
                      1 => 'Tuesday',
                      2 => 'Wednesday',
                      3 => 'Thursday',
                      4 => 'Friday',
                      5 => 'Saturday'
                  );
                  ?>
                    <tr>
                      <th>Time</th>
                      @foreach($day_of_week as $day)
                        <th><?php echo $day; ?></th>
                      @endforeach
                    </tr>
                </thead>
                <tbody>
                @foreach($showtime as $time)
                 <tr>
                   <td>{{now()->parse($time->start_time)->format('h:i A')}} - {{now()->parse($time->end_time)->format('h:i A')}}</td>

                   @foreach($day_of_week as $day)
                      @if($day == $time->day)
                        <td>
                          <b>Class:</b> {{ $time->class ? $time->class->name : '' }}<br>
                          <b>Course:</b> {{ $time->course ? $time->course->course_name : '' }}<br>
                          <b>Room:</b> {{ $time->room ? $time->room->room_name : '' }}<br>
                          
                           
                        </td>
                      @else
                        <td></td>
                      @endif
                   @endforeach

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
                </div>


@endsection