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
		    <h4 class="page-title">Students</h4>
		  
	   </div>
	   <div class="col-sm-3">
       <div class="btn-group float-sm-right">
       <a href="{{'students/create'}}" class="btn btn-gradient-bloody waves-effect waves-light m-1"> <i aria-hidden="true" class="fa fa-plus"></i> Add New</a>
      </div>
     </div>
     </div>
   



      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i>All Students</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Student Name</th>
                        <th>Email</th>
                        {{-- <th>Department</th> --}}
                        <th>Profile Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr>
                        <td> {{$student->id}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->email}}</td>
                        {{-- <td>{{$student->department->department_name}}</td> --}}
                        <td><img style="width: 100px; height:100px; border-radius:50%;" src="{{asset('/teacher/profile/'.$student->image)}}" alt="ss"></td>
                        <td>
                        <form method="POST" action="{{url('/students/'.$student->id)}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button style="padding:3px; width:56px" type="submit" data-toggle="confirmation" class="btn btn-danger m-1 btn-sm">
                        Delete</button>
                        <a class="btn btn-primary m-1 btn-sm" href="{{url('/students/'.$student->id.'/edit')}}" style="padding:3px; width:56px">EDIT</a>
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