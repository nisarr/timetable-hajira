@extends('admin.layouts.master')
@section('content')

<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumb-->
    <div class="row pt-2 pb-2">
      <div class="col-sm-9">
        <h4 class="page-title">Add New Time</h4>
      </div>
      <div class="col-sm-3">
        <div class="float-sm-right">
          <a href="{{url('timeslots')}}" class="btn btn-gradient-bloody waves-effect waves-light m-1"> <i aria-hidden="true" class="fa fa-eye"></i> View Timeslots</a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Breadcrumb-->
  <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
        <div class="card-title"><i class="fa fa-user-circle-o"></i> Add Time</div>
        <hr>
        <form method="post" action="{{route('timeslots.store')}}">
          @csrf
          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <label for="input-13">Day <span class="text-danger">*</span></label>
                <select name="day" id="" class="form-control" required>
                    <option value="">Select a day</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                </select>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="form-group">
                <label for="input-14"> Start Time<span class="text-danger">*</span></label>
                <input type="time" name="start_time" class="form-control form-control-square" required>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="form-group">
                <label for="input-14">End Time<span class="text-danger">*</span></label>
               <input type="time" name="end_time" class="form-control form-control-square" required>
              </div>
            </div>  

          </div>

          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <label for="input-13">Class <span class="text-danger">*</span></label>
                <select name="class_id" id="" class="form-control" required>
                    <option value="">Select a Class</option>
                    @foreach($classes as $class)
                    <option value="{{$class->id}}">{{$class->name}}</option>
                    @endforeach
                </select>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="form-group">
                <label for="input-14">Teacher<span class="text-danger">*</span></label>
                <select name="teacher_id" id="" class="form-control" required>
                    @foreach($teachers as $teacher)
                    <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                    @endforeach
                </select>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="form-group">
                <label for="input-14">course<span class="text-danger">*</span></label>
              <select name="course_id" id="" class="form-control" required>
                  @foreach($courses as $course)
                  <option value="{{$course->id}}">{{$course->course_name}}</option>
                  @endforeach
              </select>
              </div>
            </div>  

          </div>

          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <label for="input-13">Room <span class="text-danger">*</span></label>
                <select name="room_id" id="" class="form-control" required>
                    @foreach($rooms as $room)
                    <option value="{{$room->id}}">{{$room->room_name}}</option>
                    @endforeach
                </select>
              </div>
            </div>
 

          </div>

          <div class="form-group">
            <div class="form-footer">
              <a href="{{ url('timeslots') }}" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</a>
              <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--start overlay-->
  <div class="overlay toggle-menu"></div>
  <!--end overlay-->
</div>
<!-- End container-fluid-->


@endsection
